<?php

namespace App\Traits;

trait saveToPhotoFolder
{
    /**
     * Save an image to both storage folder and database with the same name.
     *
     * @param  $fileName
     * @return string
     */
    public static function saveToPhotos($path, $file)
    {
        $savedFileName = $file->getClientOriginalName();
        $file->storeAs('public/photo/'.$path, $savedFileName);

        return $savedFileName;
    }
}
