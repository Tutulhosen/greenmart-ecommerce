<!doctype html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta name="csrf-token" content="">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GreenMart -     Home
</title>


    <link rel="shortcut icon" href="frontend/frontEnd/images/no_image.png">
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,600,600i,700,700i,800,800i&amp;display=swap" rel="stylesheet">
    
    <link href="{{asset('frontend/frontEnd/plugins/font-awesome/font-awesome.css')}}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5b135da28d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('frontend/frontEnd/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/frontEnd/css/style.css')}}">
    
    <link rel="stylesheet" href="{{asset('frontend/frontEnd/plugins/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/frontEnd/plugins/owl-carousel/owl.theme.default.min.css')}}">
    
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/backEnd/assets/vendor/toastr/toastr.min.css')}}">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

</head>
<body>
<div class="main-wrapper">
@include('frontend.layout.header')

@section('main-content')
    
@show

@include('frontend.layout.footer')
</div>
    <!-- Button to open the popup -->
    <div style="text-align: center; margin-top: 50px;">
   
    </div>

    <!-- Popup form -->
    <div class="popup" id="popupForm">
        <div class="popup-content">
            <button class="close-btn" id="closePopupBtn">&times;</button>

            <!-- Login Form -->
            <div id="loginForm" class="login_form">
                <h2 style="">Login</h2>
				<p>Don't have an account? <button class="toggle-btn" id="showRegisterForm">Register here</button></p>
                <input type="text" 	style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc;  border-radius: 5px;  font-size: 16px; "placeholder="Username" id="loginUsername">
                <input type="password" placeholder="Password" id="loginPassword" 	style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc;  border-radius: 5px;  font-size: 16px; ">
                <button class="submit-btn">Login</button>
                
            </div>

            <!-- Registration Form (Initially Hidden) -->
            <div id="registerForm" style="display: none;" class="login_form">
                <h2>Register</h2>
                <input type="text" placeholder="Username" id="registerUsername" 	style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc;  border-radius: 5px;  font-size: 16px; ">
                <input type="email" placeholder="Email" id="registerEmail" 	style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc;  border-radius: 5px;  font-size: 16px; ">
                <input type="password" placeholder="Password" id="registerPassword" 	style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc;  border-radius: 5px;  font-size: 16px; ">
                <button class="submit-btn">Register</button>
                <p>Already have an account? <button class="toggle-btn" id="showLoginForm">Login here</button></p>
            </div>
        </div>
    </div>

    

<script src="{{asset('frontend/frontEnd/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('frontend/frontEnd/js/bootstrap.bundle.min.js')}}"></script>


<script src="{{asset('frontend/frontEnd/plugins/owl-carousel/owl.carousel.min.js')}}"></script>


<script src="{{asset('frontend/backEnd/assets/vendor/toastr/toastr.min.js')}}"></script>

{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

@include('frontend.pages.main-js')

@yield('scripts')
	
</body>


</html>
