<?php

namespace App\Models\Services;

use App\Models\User;

class UserService
{
    public static function createUserAccount($name, $email,$status, $password)
    {
        try {
            return User::createUserAccount($name, $email,$status, $password);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getUser($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return User::getUser($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularUser($UserId): JsonResponse
    {
        try {
            return response()->json(['data' => User::getParticularUser($UserId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deleteUser($UserId): JsonResponse
    {
        try {
            User::deleteUser($UserId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}
