<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ImportBoundingBox extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:bounding';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import Saved Bounding Box';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $data = [];
        $jsonFile = file_get_contents(storage_path('app/bounding.json'));
        $annots = json_decode($jsonFile)->imagesLib[0]->annotations;

        foreach ($annots as $annot)
            $data[] = [
                'x' => $annot->position->x,
                'y' => $annot->position->y,
                'width' => $annot->position->width,
                'height' => $annot->position->height,
            ];

        settings('candling.annots', $data);
    }
}
