<?php

// app/Traits/SessionCartTrait.php

namespace App\Traits;

trait SessionCartTrait
{
    public function saveToSession($itemId)
    {
        $cart = session()->get('cart', []);
        // Add the item to the cart using its ID as the key and the item itself as the value
        $cart[$itemId] = Item::where('id', $itemId); // Assuming Item is your model
        session()->put('cart', $cart);

        session()->flash('message', 'Item added to cart successfully.');
    }
}
