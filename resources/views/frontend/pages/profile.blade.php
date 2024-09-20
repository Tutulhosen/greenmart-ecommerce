@extends('frontend.layout.app')

@section('main-content')
    <section>
        <div class="dashboard-container">
        
            <!-- Dashboard Header -->
            <h1>Welcome to Your Dashboard</h1>
            <p>Manage your profile, view recent orders, wishlist, and more.</p>
            
            <!-- Dashboard Content -->
            <div class="dashboard-content">
                
                <!-- Left Column - Profile Info -->
                <div class="profile-info">
                    <h2>Profile Information</h2>
                    <p><strong>Name:</strong> {{Auth::guard('customer')->user()->name}}</p>
                    <p><strong>Email:</strong> {{Auth::guard('customer')->user()->email}}</p>
                    <p><strong>Phone:</strong> {{Auth::guard('customer')->user()->phone}}</p>
                    <button class="btn">Edit Profile</button>
                </div>
                
                <!-- Middle Column - Recent Orders -->
                <div class="recent-orders">
                    <h2>Recent Orders</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (!empty($recent_order))
                                @foreach ($recent_order as $item)
                                <tr>
                                    <td>{{$item->order_code}}</td>
                                    <td>{{formatDate($item->order_date)}}</td>
                                    <td class="status shipped">{{order_status($item->order_status)}}</td>
                                    <td>{{$item->total_price}}</td>
                                </tr>
                                @endforeach
                            @else
                                <h3 style="color: red, text-align:center">no order Found</h3>
                            @endif
                            
                        </tbody>
                    </table>
                </div>
            </div>
    
            <!-- Second Row - Wishlist and Saved Addresses -->
            <div class="dashboard-content">
                
                <!-- Left Column - Wishlist -->
                <div class="wishlist">
                    <h2>Your Wishlist</h2>
                    <ul>
                        <li>
                            <span>Product 1</span>
                            <button class="btn-remove">Remove</button>
                        </li>
                        <li>
                            <span>Product 2</span>
                            <button class="btn-remove">Remove</button>
                        </li>
                        <li>
                            <span>Product 3</span>
                            <button class="btn-remove">Remove</button>
                        </li>
                    </ul>
                </div>
                
                <!-- Right Column - Saved Addresses -->
                <div class="saved-addresses">
                    <h2>Saved Addresses</h2>
                    <p><strong>Home:</strong> 123 Main St, Cityville</p>
                    <p><strong>Office:</strong> 456 Corporate Ave, Business City</p>
                    <button class="btn">Manage Addresses</button>
                </div>
            </div>
    
            <!-- Account Settings Section -->
            <div class="account-settings">
                <h2>Account Settings</h2>
                <p>Manage your account settings such as password, payment methods, and more.</p>
                <button class="btn">Update Password</button>
                <button class="btn">Payment Methods</button>
            </div>
        </div>
    </section>
@endsection