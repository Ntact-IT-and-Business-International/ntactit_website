<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\ServicesModule\App\Models\Service;


class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $services = [
            [
                'name_of_service' => 'Web Design',
                'created_by' => '1',
            ], [
                'name_of_service' => 'Application Development',
                'created_by' => '1',
            ],
            [
                'name_of_service' => 'Bulk Sms',
                'created_by' => '1',
            ],
            [
                'name_of_service' => 'Enterprise IT',
                'created_by' => '1',
            ],
            [
                'name_of_service' => 'Cyber Security',
                'created_by' => '1',
            ],
            [
                'name_of_service' => 'Artificial Intelligence',
                'created_by' => '1',
            ],
            [
                'name_of_service' => 'Data Analytics',
                'created_by' => '1',
            ],
            [
                'name_of_service' => 'Networking',
                'created_by' => '1',
            ],
            [
                'name_of_service' => 'IT Consultancy',
                'created_by' => '1',
            ],
            [
                'name_of_service' => 'Digital Marketing',
                'created_by' => '1',
            ],
            [
                'name_of_service' => 'USSD Application',
                'created_by' => '1',
            ],
            [
                'name_of_service' => 'CCTV Camera Installation',
                'created_by' => '1',
            ],

        ];
        foreach ($services as $name_of_service) {
            $existingService = Service::whereNameOfService($name_of_service['name_of_service'])->first();
            //check if the name_of_service exists, if not, create it
            if ($existingService) {
                Service::updateNameOfService($name_of_service, $existingService->name_of_service);
            } else {
                Service::createService($name_of_service);
            }
        }
    }
}
