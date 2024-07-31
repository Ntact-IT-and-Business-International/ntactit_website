<?php
// app/Helpers/cart_helpers.php

use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Modules\ServicesModule\App\Models\Package;

if (!function_exists('addToCart')) {
    function addToCart($packageId)
    {
        $package = Package::find($packageId);

        if (!$package) {
            return false;
        }

        $cart = Session::get('cart', []);
        $itemFound = false;

        foreach ($cart as &$item) {
            if ($item['package']->id === $package->id) {
                $item['quantity'] = isset($item['quantity']) ? $item['quantity'] + 1 : 2; // Ensure 'quantity' is always set
                $item['added_at'] = Carbon::now();
                $itemFound = true;
                break;
            }
        }

        if (!$itemFound) {
            $cart[] = [
                'package' => $package,
                'amount' => $package->amount,
                'quantity' => 1, // Initialize 'quantity'
                'added_at' => Carbon::now(),
            ];
        }

        Session::put('cart', $cart);
        session()->flash('msg', 'Package added to cart successfully!');
        return true;
    }
}




if (!function_exists('getCartItems')) {
    function getCartItems()
    {
        $cart = Session::get('cart', []);
        $items = [];
        $itemMap = [];

        foreach ($cart as $item) {
            if (Carbon::parse($item['added_at'])->addHours(2)->isFuture()) {
                $packageId = $item['package']->id;

                if (isset($itemMap[$packageId])) {
                    $itemMap[$packageId]['quantity'] += isset($item['quantity']) ? $item['quantity'] : 1; // Aggregate quantity
                } else {
                    $itemMap[$packageId] = [
                        'package' => $item['package'],
                        'amount' => $item['amount'],
                        'quantity' => isset($item['quantity']) ? $item['quantity'] : 1, // Initialize 'quantity'
                        'added_at' => $item['added_at'],
                    ];
                }
            }
        }

        foreach ($itemMap as $item) {
            $items[] = $item;
        }

        return $items;
    }
}



// if (!function_exists('getTotalAmount')) {
//     function getTotalAmount()
//     {
//         $cart = Session::get('cart', []);
//         $totalAmount = 0;

//         foreach ($cart as $item) {
//             if (Carbon::parse($item['added_at'])->addHours(2)->isFuture()) {
//                 $totalAmount += $item['amount'];
//             }
//         }

//         return $totalAmount;
//     }
// }

// if (!function_exists('getQuantity')) {
//     function getQuantity()
//     {
//         $cart = Session::get('cart', []);
//         $quantity = 0;

//         foreach ($cart as $item) {
//             if (Carbon::parse($item['added_at'])->addHours(2)->isFuture()) {
//                 $quantity++;
//             }
//         }

//         return $quantity;
//     }
// }

if (!function_exists('getTotalAmount')) {
    function getTotalAmount()
    {
        $cart = Session::get('cart', []);
        $totalAmount = 0;

        foreach ($cart as $item) {
            if (Carbon::parse($item['added_at'])->addHours(2)->isFuture()) {
                $totalAmount += $item['amount'] * (isset($item['quantity']) ? $item['quantity'] : 1);
            }
        }

        return $totalAmount;
    }
}


if (!function_exists('getQuantity')) {
    function getQuantity()
    {
        $cart = Session::get('cart', []);
        $quantity = 0;

        foreach ($cart as $item) {
            if (Carbon::parse($item['added_at'])->addHours(2)->isFuture()) {
                $quantity += isset($item['quantity']) ? $item['quantity'] : 1;
            }
        }

        return $quantity;
    }
}



if (!function_exists('getValidCart')) {
    function getValidCart()
    {
        $cart = Session::get('cart', []);
        $validCart = [];

        foreach ($cart as $item) {
            if (Carbon::parse($item['added_at'])->addHours(2)->isFuture()) {
                $validCart[] = $item;
            }
        }

        Session::put('cart', $validCart);

        return $validCart;
    }
}

if (!function_exists('clearCart')) {
    function clearCart()
    {
        Session::forget('cart');
        session()->flash('msg', 'Cart cleared successfully!');
    }
}

