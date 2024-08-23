<?php

namespace App\Traits;

trait saveToHrFolderFolder
{
    /**
     * Save an image to both storage folder and database with the same name.
     *
     * @param  $fileName
     * @return string
     */
    public static function saveToHrForms($path, $file)
    {
        $savedFileName = $file->getClientOriginalName();
        $file->storeAs('public/HrForms/'.$path, $savedFileName);

        return $savedFileName;
    }
}
