@extends('frontend.layout.app')

@section('main-content')
<section>
	<div style="display: flex; justify-content: center; align-items: center; min-height: 100vh; margin-top:10px">
        <div style="background-color: #fff; width: 85%; padding: 20px; border-radius: 10px; box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);">
            <h1 style="text-align: left; color: #333; font-weight: 600; margin-bottom: 15px;">Checkout</h1>
			  <h1 style="text-align: left; color: #333; font-size:14px; font-weight: 600; margin-bottom: 14px;color: #7E7E7E !important; ">There are 1 products in your cart</h1>
            <div style="display: flex; gap: 20px;">
                
				<div style="flex: 1; padding: 20px; background-color: #fff; border-radius: 10px; border: 1px solid #e0e0e0;">
                    <h2 style="color: #333; font-size: 24px; margin-bottom: 20px;">Payment Details</h2>
                    <form action="{{ route('order') }}" method="POST">
                        @csrf
                        <input type="hidden" id="product_id" name="product_id" value="{{ $product_id }}">
                        <input type="hidden" id="total_amount" name="total_amount" value="{{ $total_amount }}">
                        <input type="hidden" id="qty" name="qty" value="{{ $qty }}">
                        
                        <input type="text" name="full_name" placeholder="Full Name" required>
                        <input type="text" name="delivery_address" placeholder="Delivery Address" required>
                        <input type="text" name="phone_number" placeholder="Phone Number" required>
                        <input type="text" name="additional_number" placeholder="Additional Number">
                        <input type="email" name="email" placeholder="Email Address" required>
                        <textarea name="additional_info" placeholder="Additional information"></textarea>
                        
                        <button type="submit">Place Order</button>
                    </form>
                    
                    <!-- Display success message -->
                    @if(session('success'))
                        <div style="color: green;">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                </div>
				<!-- Left Column (Order Summary) -->
                <div style="flex: 1; padding: 0px; background-color: #f9f9f9; border-radius: 10px; border: 1px solid #e0e0e0;">
                    <div style="display: flex; justify-content: center; align-items: center; min-height: 100vh;">
                        <div style="background-color: #fff; width: 100%; padding: 20px; border-radius: 10px; box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);">
                            <h1 style="text-align: left; font-size:22px; color: #333; font-weight: 600; margin-bottom: 30px;">Checkout</h1>
                        
                            <!-- Product Details Table -->
                            <table style="width: 100%; border-collapse: collapse; margin-bottom: 30px;">
                                <thead>
                                    <tr style="background-color: #f9f9f9;">
                                        <th style="padding: 15px; text-align: left; border-bottom: 1px solid #ddd; font-size: 16px;">Image</th>
                                        <th style="padding: 15px; text-align: left; border-bottom: 1px solid #ddd; font-size: 16px;">Product</th>
                                        <th style="padding: 15px; text-align: left; border-bottom: 1px solid #ddd; font-size: 16px;">Qnt</th>
                                        <th style="padding: 15px; text-align: right; border-bottom: 1px solid #ddd; font-size: 16px;">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Row 1 -->
                                    <tr>
                                        <td style="padding: 15px; border-bottom: 1px solid #ddd;">
                                            <img src="{{asset('images/galleries/' . $this_product->thumbnail)}}" alt="Product 1" style="width: 80px; height: auto; border-radius: 8px;">
                                        </td>
                                        <td style="padding: 15px; border-bottom: 1px solid #ddd;">
                                            <h4 style="margin: 0; font-size: 18px; color: #333;">{{$this_product->title}}</h4>
                                           
                                        </td>
                                        <td style="padding: 15px; text-align: right; border-bottom: 1px solid #ddd;">
                                            <span style="font-size: 18px; color: #333;">৳  {{$total_amount}}</span>
                                        </td>
                                        <td style="padding: 15px; text-align: right; border-bottom: 1px solid #ddd;">
                                            <span style="font-size: 18px; color: #333;">৳  {{$total_amount}}</span>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                                <!-- Total Price Row -->
                                <tfoot>
                                    <tr style="background-color: #f9f9f9;">
                                    
                                        <td colspan="3" style="padding: 13px; text-align: right; border-top: 1px solid #ddd; font-size: 18px; color: #333;">Delivery Charge: </td>
                                        <td style="padding: 13px; text-align: right; border-top: 1px solid #ddd; font-size: 18px; color: #333;">৳ 0.00</td>
                                    </tr>
                                    <tr style="background-color: #f9f9f9;">
                                    
                                        <td colspan="3" style="padding: 15px; text-align: right; border-top: 1px solid #ddd; font-size: 18px; color: #333;">Total</td>
                                        <td style="padding: 15px; text-align: right; border-top: 1px solid #ddd; font-size: 18px; color: #333;">৳ {{$total_amount}}</td>
                                    </tr>
                                </tfoot>
                            </table>

                            <!-- Payment Section -->
                            <div style="background-color: #fafafa; padding: 20px; border-radius: 10px; border: 1px solid #e0e0e0;">
                                <h2 style="color: #333; font-size: 24px; margin-bottom: 20px;">Payment Details</h2>
                                <form>
                                
                                <div class="custome-radio" style="padding-left:15px">
                                                <input class="form-check-input" required=""  type="radio" name="payment_option" value="Cash on delivery" id="exampleRadios4" checked="">
                                                <label class="form-check-label" style="font-size: 16px; color: #333; font-weight: 500; margin-bottom: 10px;">Cash on delivery</label>
                                            </div>

                                
                                    

                                    <button class="btn" style="width: 100%; background-color: #28a745; color: white; padding: 15px; border: none; border-radius: 8px; font-size: 18px; cursor: pointer; font-weight: 600;"> <a href="invoice.html" target="blank" style="color:white; text-decoration: none;">Visit Example</a></button>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
				
				</div>
                <!-- Right Column (Payment Details) -->
              
            </div>
        </div>
    </div>
    </section>
@endsection