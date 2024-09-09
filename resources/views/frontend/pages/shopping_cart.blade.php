@extends('frontend.layout.app')

@section('main-content')
<section>
   
    <div style="max-width: 1200px; margin: 20px auto; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
         <!-- Display success message -->
    @if(isset($success))
        <div style="color: white; padding:10px; background-color:green; width:60%; margin:auto; text-align:center; border-radius:5px">
            {{ $success }}
        </div>
    @endif
        <h2 style="margin-bottom: 20px; text-align: center;">Shopping Cart</h2>
        
        <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
            <thead>
                <tr style="background-color: #007bff; color: white;">
                    <th style="padding: 10px; text-align: left;">Product</th>
                    <th style="padding: 10px; text-align: left;">Price</th>
                    <th style="padding: 10px; text-align: left;">Quantity</th>
                    <th style="padding: 10px; text-align: left;">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr style="border-bottom: 1px solid #ddd;">
                    <td style="padding: 10px;">{{ $title  }}</td>
                    <td style="padding: 10px;">{{ $discount_price  }}</td>
                    <td style="padding: 10px;">
                        <input type="number" value="{{ $qty }}" style="width: 50px; padding: 5px; border: 1px solid #ccc;">
                    </td>
                    <td style="padding: 10px;">{{ $total_price  }}</td>
                </tr>
               
            </tbody>
        </table>
        
        <div style="text-align: right;">
            <strong style="font-size: 1.2em;">Delivery Charge: $20.00</strong> </br>
            <strong style="font-size: 1.2em;">Subtotal: $70.00</strong>
        </div>
        
        <div style="margin-top: 20px; display: flex; justify-content: space-between;">
            <a href="{{route('home')}}" style="padding: 10px 20px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px;">Continue Shopping</a>
            <a href="#" style="padding: 10px 20px; background-color: #28a745; color: white; text-decoration: none; border-radius: 5px;">Proceed to Checkout</a>
        </div>

    </div>
 <!--cart-list-start-->
</section>
@endsection