<?php

namespace App\Traits;


trait saveToCvFolder
{
    /**
     * Save an image to both storage folder and database with the same name.
     *
     * @param  $fileName
     * @return string
     */
    public static function saveToCvs($path, $file)
    {
        $savedFileName = $file->getClientOriginalName();
        $file->storeAs('public/Cvs/'.$path, $savedFileName);

        return $savedFileName;
    }
}
