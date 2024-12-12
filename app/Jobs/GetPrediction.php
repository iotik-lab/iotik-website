<?php

namespace App\Jobs;

use App\Models\Image;
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
        $response = Http::attach('file', file_get_contents($image), 'image.jpg')
            ->post(config('app.ai_url') . '/upload');

        $body = $response->object();
        $name = "predicted_" . time() . '.jpg';
        $image = base64_decode($body->image);

        Storage::disk('public')->put("/predicted/$name", $image);

        $this->image->update([
            'predicted_image' => $name,
            'fertily' => $body->fertily,
            'unfertily' => $body->unfertily
        ]);

        Log::info('Success saved predicted image');
    }
}
