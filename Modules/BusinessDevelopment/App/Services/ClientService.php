<?php

namespace Modules\BusinessDevelopment\App\Services;
use Modules\BusinessDevelopment\App\Models\Client;
use Modules\BusinessDevelopment\App\Models\BusinessDevelopmentDocument;

class ClientService
{
    public static function createClient($fields)
    {
        try {
            return Client::createClient($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getClient($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return Client::getClient($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularClient($ClientId): JsonResponse
    {
        try {
            return response()->json(['data' => Client::getParticularClient($ClientId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deleteClient($ClientId): JsonResponse
    {
        try {
            Client::deleteClient($ClientId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
    public static function getQuotationClients($search, $sortBy, $sortDirection, $perPage){
        try {
            return BusinessDevelopmentDocument::getQuotationClients($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
    public static function getInvoiceClients($search, $sortBy, $sortDirection, $perPage){
        try {
            return BusinessDevelopmentDocument::getInvoiceClients($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
    public static function updateClientStatus($client_id){
        try {
            return Client::updateClientStatus($client_id);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}
