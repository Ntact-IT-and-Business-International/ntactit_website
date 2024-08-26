<?php

namespace App\Traits;

trait saveToReportFolder
{
    /**
     * this function saves any attachment to a folder
     */
    public static function saveToReports($path, $file)
    {
        $savedReport = $file->getClientOriginalName();
        $file->storeAs('public/Reports/'.$path, $savedReport);

        return $savedReport;
    }
}
