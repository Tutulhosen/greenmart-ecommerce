@extends('frontend.layout.app')

@section('main-content')
<section>
    <div class="main">
        <div class="container-for-cart">

            <section class="cart-items">
                <h1 style="font-size: 2rem; font-weight: 700; color: #333; margin-bottom: 20px;">Checkout</h1>

                <ul role="list" class="payment-details">
                    <!-- Payment Details Section -->
                    <h2>Payment Details</h2>
                    <form action="{{ route('checkout') }}" method="post">
                        @csrf
                        <div class="input-group">
                            <div>
                                <label for="full-name">Name</label>
                                <input type="text" id="full-name" name="full_name" placeholder="Name" required value="{{Auth::guard('customer')->user()->name ?? ' '}}">
                            </div>
                            <div>
                                <label for="phone-number">Phone</label>
                                <input type="text" id="phone-number" name="phone_number" placeholder="Phone" required value="{{Auth::guard('customer')->user()->phone ?? ' '}}">
                            </div>
                        </div>
                        <div class="input-group">
                            <div>
                                <label for="email-address">Email</label>
                                <input type="email" id="email-address" name="email_address" placeholder="Email" required value="{{Auth::guard('customer')->user()->email ?? ' '}}">
                            </div>
                            <div>
                                <label for="additional-number">Additional Address</label>
                                <input type="text" id="additional-address" name="additional_address" placeholder="Additional Address" value="{{Auth::guard('customer')->user()->address ?? ' '}}">
                            </div>
                        </div>
                    
                        <label for="delivery-address">Delivery Address</label>
                        <input type="text" id="delivery-address" name="delivery_address" placeholder="Delivery Address" required value="{{Auth::guard('customer')->user()->delivery_address ?? ' '}}">
                    
                        <fieldset class="payment-methods">
                            <legend>Payment Method</legend>
                            <div class="payment-method">
                                <input type="radio" id="credit-card" name="payment_method" value="credit-card" required>
                                <label for="credit-card" class="payment-label">
                                    <div class="payment-icon" style="background: url('path-to-credit-card-icon.png') no-repeat center center; background-size: contain;"></div>
                                    <span>Credit Card</span>
                                </label>
                            </div>
                            <div class="payment-method">
                                <input type="radio" id="paypal" name="payment_method" value="paypal">
                                <label for="paypal" class="payment-label">
                                    <div class="payment-icon" style="background: url('path-to-paypal-icon.png') no-repeat center center; background-size: contain;"></div>
                                    <span>PayPal</span>
                                </label>
                            </div>
                            <div class="payment-method">
                                <input type="radio" id="cash-on-delivery" name="payment_method" value="cash-on-delivery" checked>
                                <label for="cash-on-delivery" class="payment-label">
                                    <div class="payment-icon" style="background: url('path-to-cash-on-delivery-icon.png') no-repeat center center; background-size: contain;"></div>
                                    <span>Cash on Delivery</span>
                                </label>
                            </div>
                        </fieldset>

                        <button type="submit" class="checkout-button">Proceed to Payment</button>
                    </form>
                </ul>
            </section>

            <!-- Order Summary Section -->
            <section class="order-summary">
                <h2>Order Summary</h2>
                <dl>
                    <div style="display: flex; justify-content: space-between;">
                        <dt>Subtotal</dt>
                        <dd>BDT. {{ $subtotal }}</dd>
                    </div>
                    <div style="padding-top: 16px; display: flex; justify-content: space-between;">
                        <dt>Total Discount</dt>
                        <dd>BDT {{ $discount }}</dd>
                    </div>
                    <div style="padding-top: 16px; display: flex; justify-content: space-between;">
                        <dt>Delivery Charge</dt>
                        <dd>BDT {{ $shipping }}</dd>
                    </div>
                    <div style="border-top: 3px solid #ddd; padding-top: 16px; display: flex; justify-content: space-between; margin-bottom: 16px;">
                        <dt>Total</dt>
                        <dd>BDT {{ $total }}</dd>
                    </div>
                </dl>
            </section>

        </div>
    </div>
</section>
@endsection
