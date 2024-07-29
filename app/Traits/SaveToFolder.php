<?php

namespace App\Traits;

trait SaveToFolder
{
    /**
     * this function saves any attachment to a folder
     */
    public static function saveToAcademicDocuments($path, $file)
    {
        $savedDocument = $file->getClientOriginalName();
        $file->storeAs('public/Items/'.$path, $savedDocument);

        return $savedDocument;
    }
}
