<?php

namespace App\Traits;


trait saveToContractFolder
{
    /**
     * Save an image to both storage folder and database with the same name.
     *
     * @param  $fileName
     * @return string
     */
    public static function saveToContracts($path, $file)
    {
        $savedFileName = $file->getClientOriginalName();
        $file->storeAs('public/Contracts/'.$path, $savedFileName);

        return $savedFileName;
    }
}
