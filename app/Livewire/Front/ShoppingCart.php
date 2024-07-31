<?php

namespace App\Livewire\Front;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Modules\Cart\App\Models\CustomerOrder;
use Illuminate\Support\Facades\Log;

class ShoppingCart extends Component
{
    public $contact;
    public $order_name;
    public $order_email;
    public $order_location;

    protected $listeners = ['ShoppingCart'];

    // Validate
    protected $rules = [
        'contact' => 'required',
        'order_name' => 'required',
        'order_email' => 'required',
        'order_location' => 'required',
    ];

    // Customize validation error messages
    protected $messages = [
        'contact.required' => 'Contact is required',
        'order_email.required' => 'Email is required',
        'order_name.required' => 'Name is required',
        'order_location.required' => 'Location is required',
    ];

    public function updateQuantity($packageId, $quantity)
    {
        $cart = Session::get('cart', []);
        foreach ($cart as &$item) {
            if ($item['package']->id == $packageId) {
                $item['quantity'] = $quantity;
                break;
            }
        }
        Session::put('cart', $cart);
        $this->dispatch('Cart', 'refreshComponent');
        $this->dispatch('ShoppingCart', 'refreshComponent');
    }
    public function placeOrder()
    {
        $this->validate();
        $cart = session('cart', []);
        Log::info('Cart: ', $cart); // Log the cart contents for debugging

        foreach ($cart as $item) {
            Log::info('Saving order item: ', $item); // Log each item being saved
            CustomerOrder::create([
                'category' => $item['package']->category,
                'quantity' => $item['quantity'],
                'amount' => $item['amount'],
                'contact' => $this->contact,
                'order_name' => $this->order_name,
                'order_email' => $this->order_email,
                'order_location' => $this->order_location,
            ]);
        }

        // Clear the cart after order is placed
        // session()->forget('cart');

        // Optional: Add a success message
        session()->flash('msg', 'Order placed successfully!');
    }
    public function render()
    {
        return view('livewire.front.shopping-cart',[
            'cartItems' => Session::get('cart', []),
            'totalAmount' => array_sum(array_column(Session::get('cart', []), 'amount')),
        ]);
    }
}
