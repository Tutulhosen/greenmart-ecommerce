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
                    <form id="checkout-form">
                        @csrf
                        <!-- Loop through the cart items and add hidden inputs -->
                        @foreach ($cart as $item)
                            <input type="hidden" name="product_ids[]" value="{{ $item['product_id'] }}">
                            <input type="hidden" name="quantities[]" value="{{ $item['qty'] }}">
                        @endforeach
                        <!-- Hidden field for total price -->
                        <input type="hidden" value="{{ $total }}" name="total" id="total">
                        
                        <!-- Full Name and Phone Number -->
                        <div class="input-group">
                            <div>
                                <label for="full-name">Full Name</label>
                                <input type="text" id="full-name" name="full_name" placeholder="Full Name" required value="{{ Auth::guard('customer')->user()->name ?? '' }}">
                            </div>
                            <div>
                                <label for="phone-number">Phone Number</label>
                                <input type="text" id="phone-number" name="phone_number" placeholder="Phone Number" required value="{{ Auth::guard('customer')->user()->phone ?? '' }}">
                            </div>
                        </div>
                        
                        <!-- Email Address and Additional Address -->
                        <div class="input-group">
                            <div>
                                <label for="email-address">Email Address</label>
                                <input type="email" id="email-address" name="email_address" placeholder="Email Address" required value="{{ Auth::guard('customer')->user()->email ?? '' }}">
                            </div>
                            <div>
                                <label for="additional-address">Additional Address</label>
                                <input type="text" id="additional-address" name="additional_address" placeholder="Additional Address" value="{{ Auth::guard('customer')->user()->address ?? '' }}">
                            </div>
                        </div>

                        <!-- Delivery Address -->
                        <label for="delivery-address">Delivery Address</label>
                        <input type="text" id="delivery-address" name="delivery_address" placeholder="Delivery Address" required value="{{ Auth::guard('customer')->user()->delivery_address ?? '' }}">

                        <!-- Payment Method -->
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

                        <!-- Submit Button -->
                        <button type="submit" class="checkout-button">Proceed to Payment</button>
                    </form>
                </ul>
            </section>

            <!-- Order Summary Section -->
            <section class="order-summary">
                <h2>Order Summary</h2>
                <dl>
                    <!-- Subtotal -->
                    <div style="display: flex; justify-content: space-between;">
                        <dt>Subtotal</dt>
                        <dd>BDT {{ $subtotal }}</dd>
                    </div>
                    
                    <!-- Discount -->
                    <div style="padding-top: 16px; display: flex; justify-content: space-between;">
                        <dt>Total Discount</dt>
                        <dd>BDT {{ $discount }}</dd>
                    </div>
                    
                    <!-- Delivery Charge -->
                    <div style="padding-top: 16px; display: flex; justify-content: space-between;">
                        <dt>Delivery Charge</dt>
                        <dd>BDT {{ $shipping }}</dd>
                    </div>
                    
                    <!-- Total -->
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

@section('scripts')
<script>
    $(document).ready(function() {
        $('#checkout-form').on('submit', function(e) {
            e.preventDefault(); // Prevent form from submitting normally

            // Gather form data
            let formData = $(this).serialize();

            // AJAX request
            $.ajax({
                url: '{{ route("checkout") }}', 
                type: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('input[name=_token]').val() 
                },
                success: function(response) {
                    // Clear localStorage
                    localStorage.clear();

                    // Show Toastr success notification with a cancel button
                    toastr.options = {
                        "closeButton": true, // Adds the close (X) button
                        "progressBar": true, // Progress bar at the bottom
                        "positionClass": "toast-top-right", // Position of the toaster
                        "onclick": null, // No click handler
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000", // Auto-close after 5 seconds
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut",
                    };

                    // Display success message with a cancel button
                    toastr.success('Order placed successfully!', 'Success', {
                        closeButton: true,
                        tapToDismiss: false, // Disables auto-dismiss when clicked
                        timeOut: 0, // Ensures the toast doesn't disappear automatically
                        extendedTimeOut: 0, // Keeps it until user manually closes
                        onclick: function() {
                            toastr.clear(); // Optional: dismiss toaster on click
                        }
                    });

                    // Redirect to the user profile after showing the toaster
                    setTimeout(function() {
                        window.location.href = '{{ route("user.profile") }}';
                    }, 3000); // Redirect after 3 seconds to allow the user to see the toast
                },
                error: function(response) {
                    // Handle validation errors or other errors
                    if (response.status === 422) {
                        let errors = response.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            alert(value); // Display error messages (customize as needed)
                        });
                    } else {
                        alert('Something went wrong, please try again.');
                    }
                }
            });
        });
    });
</script>
@endsection
