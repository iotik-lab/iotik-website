<?php

namespace App\Repos;

use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class ImageRepository
{
    public static function boundingSplit(string $path, Image $image)
    {
        $images = [];
        $iteration = 1;

        $directory = "cropped/" . time();
        $actives = $image->incubator->leds;
        $boundings = json_decode(settings('candling.annots'));
        $image = imagecreatefromjpeg($path);

        Storage::makeDirectory($directory);

        foreach ($boundings as $bounding) {
            if (!in_array($iteration, $actives)) {
                $iteration++;
                continue;
            }

            $name = "{$directory}/{$iteration}.jpg";
            $croppedImage = imagecrop($image, [
                'x' => $bounding->x,
                'y' => $bounding->y,
                'width' => $bounding->width,
                'height' => $bounding->height,
            ]);

            imagejpeg($croppedImage, storage_path("app/$name"));
            imagedestroy($croppedImage);

            $images[] = $name;
            $iteration++;
        }

        return $images;
    }

    public static function savePredicted(array $splits, array $predicts, Image $image)
    {
        $iteration = 0;
        $boundings = json_decode(settings('candling.annots'));
        $mainImage = imagecreatefromjpeg(Storage::disk('public')->path("candling/" . $image->original_image));
        $name = "predicted_" . time() . '.jpg';

        Storage::disk('public')->makeDirectory("predicted");

        foreach ($predicts as $predict) {
            $index = str_replace(".jpg", "", basename($predict->filename)) - 1;
            $bounding = $boundings[$index];

            $imagePart = imagecreatefromjpeg(storage_path("app/$splits[$iteration]"));
            $transparentColor = $predict->class == "unfertile" ?
                imagecolorallocatealpha($mainImage, 255, 0, 0, 80) :
                imagecolorallocatealpha($mainImage, 0, 255, 0, 80);

            imagefilledrectangle($imagePart, 0, 0, $bounding->width, $bounding->height, $transparentColor);
            imagecopymerge($mainImage, $imagePart, $bounding->x, $bounding->y, 0, 0, $bounding->width, $bounding->height, 100);
            imagedestroy($imagePart);

            $iteration++;
        }

        imagejpeg($mainImage, storage_path("app/public/predicted/{$name}"));
        imagedestroy($mainImage);

        return $name;
    }
}
