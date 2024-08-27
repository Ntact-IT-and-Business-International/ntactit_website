<?php

namespace App\Traits;

trait SaveToDocumentFolder
{
    /**
     * this function saves any attachment to a folder
     */
    public static function saveToDocuments($path, $file)
    {
        $savedDocument = $file->getClientOriginalName();
        $file->storeAs('public/Documents/'.$path, $savedDocument);

        return $savedDocument;
    }
}
