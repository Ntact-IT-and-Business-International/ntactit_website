<?php

namespace Modules\ServicesModule\Services;

use Modules\ServicesModule\App\Models\Package;

class PackageService
{
    public static function createPackage($fields)
    {
        try {
            return Package::createPackage($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getPackage($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return Package::getPackage($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularPackage($PackageId): JsonResponse
    {
        try {
            return response()->json(['data' => Package::getParticularPackage($PackageId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deletePackage($PackageId): JsonResponse
    {
        try {
            Package::deletePackage($PackageId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}
