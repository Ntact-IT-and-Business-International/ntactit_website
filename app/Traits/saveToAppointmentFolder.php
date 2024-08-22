<?php

namespace App\Traits;


trait saveToAppointmentFolder
{
    /**
     * Save an image to both storage folder and database with the same name.
     *
     * @param  $fileName
     * @return string
     */
    public static function saveToAppointments($path, $file)
    {
        $savedFileName = $file->getClientOriginalName();
        $file->storeAs('public/Cvs/'.$path, $savedFileName);

        return $savedFileName;
    }
}
