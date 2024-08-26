<?php

namespace App\Traits;

trait saveToFinanceFolderFolder
{
    /**
     * Save an image to both storage folder and database with the same name.
     *
     * @param  $fileName
     * @return string
     */
    public static function saveToFinanceForms($path, $file)
    {
        $savedFileName = $file->getClientOriginalName();
        $file->storeAs('public/FinanceForms/'.$path, $savedFileName);

        return $savedFileName;
    }
}
