<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait saveToDeliveryAgentFolder
{
    /**
     * Save an image to both storage folder and database with the same name.
     *
     * @param  $fileName
     * @return string
     */
    public static function saveToDeliveryAgent($path, $file)
    {
        $savedFileName = $file->getClientOriginalName();
        $file->storeAs('public/Agent/'.$path, $savedFileName);

        return $savedFileName;
    }
}
