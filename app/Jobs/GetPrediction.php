<?php

namespace App\Jobs;

use App\Models\Image;
use App\Repos\ImageRepository;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class GetPrediction implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(private Image $image) {}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $image = Storage::disk('public')->path("candling/" . $this->image->original_image);
        $splits = ImageRepository::boundingSplit($image, $this->image);
        $http = Http::asMultipart();

        foreach ($splits as $split)
            $http->attach('images', file_get_contents(storage_path("app/$split")), basename($split));

        $response = $http->post(config('app.ai_url') . '/predict');
        $body = $response->object();

        $predictions = $body->predictions;
        $imagename = ImageRepository::savePredicted($splits, $predictions, $this->image);

        $this->image->update([
            'predicted_image' => $imagename,
            'fertily' => count(
                array_filter($predictions, fn($predict) => $predict->class == "fertile")
            ),
            'unfertily' => count(
                array_filter($predictions, fn($predict) => $predict->class == "unfertile")
            ),
        ]);

        Log::info('Success saved predicted image');
    }
}
