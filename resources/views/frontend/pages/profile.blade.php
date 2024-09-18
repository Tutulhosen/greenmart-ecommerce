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
                    <p><strong>Name:</strong> John Doe</p>
                    <p><strong>Email:</strong> johndoe@example.com</p>
                    <p><strong>Phone:</strong> (555) 555-5555</p>
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
                            <tr>
                                <td>#1001</td>
                                <td>Aug 15, 2024</td>
                                <td class="status shipped">Shipped</td>
                                <td>$150.00</td>
                            </tr>
                            <tr>
                                <td>#1002</td>
                                <td>Aug 10, 2024</td>
                                <td class="status canceled">Canceled</td>
                                <td>$200.00</td>
                            </tr>
                            <tr>
                                <td>#1003</td>
                                <td>Aug 05, 2024</td>
                                <td class="status pending">Pending</td>
                                <td>$300.00</td>
                            </tr>
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