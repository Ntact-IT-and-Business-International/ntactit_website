<?php

if (!function_exists('generateCustomerNumber')) {
    function generateCustomerNumber($model)
    {
        // Get the current year
        $year = date('Y');
        
        // Count the number of customers created in the current year
        $count = $model::whereYear('created_at', $year)
            ->count() + 1;
        
        // Format the count to be a 3-digit number (e.g., 001, 002)
        $formattedCount = str_pad($count, 3, '0', STR_PAD_LEFT);
        
        // Combine the year and formatted count to create the customer number
        $customerNumber = $year . $formattedCount;

        return $customerNumber;
    }
}
