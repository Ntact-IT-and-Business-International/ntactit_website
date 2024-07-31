<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <a wire:navigate href="/cart/shopping-cart" class="cart"><i class="fa fa-shopping-cart" ></i> <span class="cart-quantity">{{ getQuantity() }}</span><span class="cart-total">UGX {{ number_format(getTotalAmount()) }}</span></a>
</div>
