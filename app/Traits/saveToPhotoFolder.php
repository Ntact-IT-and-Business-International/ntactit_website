<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Spatie\ImageOptimizer\OptimizerChainFactory;

trait saveToPhotoFolder
{
    /**
     * Save an image to both storage folder and database with the same name.
     *
     * @param  $fileName
     * @return string
     */
    public static function saveToItems($path, $file)
    {
        $savedFileName = $file->getClientOriginalName();
        $file->storeAs('public/Items/'.$path, $savedFileName);

        return $savedFileName;
    }
    // public static function saveToItems($path, $file)
    // {
    //     // Temporary file path
    //     $tempPath = $file->store('temp', 'public');
    //     $tempFilePath = storage_path("app/public/{$tempPath}");

    //     // Resize the image to fit within 800x600 pixels and compress it
    //     $image = Image::make($tempFilePath);
    //     $quality = 90; // Start with high quality

    //     do {
    //         // Resize the image while maintaining aspect ratio
    //         $image->resize(800, null, function ($constraint) {
    //             $constraint->aspectRatio();
    //             $constraint->upsize();
    //         });

    //         // Save the image with the current quality
    //         $image->save($tempFilePath, $quality);

    //         // Check the file size
    //         $fileSize = filesize($tempFilePath);

    //         // Decrease quality to compress further if file size > 1MB
    //         $quality -= 5;
    //     } while ($fileSize > 1048576 && $quality > 10); // 1MB = 1048576 bytes

    //     // Optimize the image using Spatie Image Optimizer
    //     $optimizerChain = OptimizerChainFactory::create();
    //     $optimizerChain->optimize($tempFilePath);

    //     // Define the final storage path
    //     $finalFileName = time() . '_' . $file->getClientOriginalName();
    //     $finalPath = 'public/Items/' . $path . '/' . $finalFileName;

    //     // Move the optimized image to the final directory
    //     Storage::disk('public')->move($tempPath, $finalPath);

    //     // Return the path relative to the 'public' disk
    //     return 'Items/' . $path . '/' . $finalFileName;
    // }
}
