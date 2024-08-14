<?php

namespace App\Services;
use Modules\HumanResource\App\Models\HrForm;

class HrFormService
{
    public static function createHrForm($fields)
    {
        try {
            return HrForm::createHrForm($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getHrForm($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return HrForm::getHrForm($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularHrForm($HrFormId): JsonResponse
    {
        try {
            return response()->json(['data' => HrForm::getParticularHrForm($HrFormId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deleteHrForm($HrFormId): JsonResponse
    {
        try {
            HrForm::deleteHrForm($HrFormId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}
