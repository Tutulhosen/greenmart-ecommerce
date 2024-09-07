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

<!--Whatsapp--add--from-here-->


<!--Whatsapp--add--from-End-->

<script src="{{asset('frontend/frontEnd/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('frontend/frontEnd/js/bootstrap.bundle.min.js')}}"></script>


<script src="{{asset('frontend/frontEnd/plugins/owl-carousel/owl.carousel.min.js')}}"></script>


<script src="{{asset('frontend/backEnd/assets/vendor/toastr/toastr.min.js')}}"></script>
<script>
                            </script>

<script>
    $('#account-btn').on('click', function () {
        $('.login-float').toggle()
    });

    $('#header-top-menu-btn').on('click', function () {
        $('.header-top-menu-m').toggle()
    });

    $('#cat_menu_mobile_btn').on('click', function () {
        $('.cat_menu_m').toggle()
    });

    $('#search_mobile_btn').on('click', function () {
        $('.search-form-m').toggle()
    });

    $('.search_btnclose').on('click', function () {
        $('.search-form-m').toggle()
    });
</script>

    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                margin: 15,
                loop: true,
                dots: false,
                autoplay: true,
                autoplayTimeout: 6000,
                autoplayHoverPause: true,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 3,
                        nav: true
                    },
                    600: {
                        items: 3,
                        nav: false
                    },
                    1000: {
                        items: 6,
                        nav: true,
                        loop: false
                    }
                }
            });

            $('.owl-nav').remove();
        });
    </script>
	
    <script>
        function loadPage() {
            const content = document.getElementById('content');
            const url = window.location.pathname;

            if (url === '/home') {
                content.innerHTML = '<h1>Welcome to Home Page</h1>';
            } else if (url === '/landing_page.html') {
                content.innerHTML = '<h1>About Us</h1>';
            } else {
                content.innerHTML = '<h1>404 - Page Not Found</h1>';
            }
        }

        window.onload = loadPage;
    </script>
	
	    <script>
        // Get elements
        const openPopupBtn = document.getElementById('openPopupBtn');
        const popupForm = document.getElementById('popupForm');
        const closePopupBtn = document.getElementById('closePopupBtn');
        const loginForm = document.getElementById('loginForm');
        const registerForm = document.getElementById('registerForm');
        const showRegisterForm = document.getElementById('showRegisterForm');
        const showLoginForm = document.getElementById('showLoginForm');

        // Open the popup when the button is clicked
        openPopupBtn.addEventListener('click', () => {
            popupForm.style.display = 'flex';
        });

        // Close the popup when the close button is clicked
        closePopupBtn.addEventListener('click', () => {
            popupForm.style.display = 'none';
        });

        // Close the popup if user clicks outside the form
        window.addEventListener('click', (e) => {
            if (e.target === popupForm) {
                popupForm.style.display = 'none';
            }
        });

        // Show the registration form and hide the login form
        showRegisterForm.addEventListener('click', () => {
            loginForm.style.display = 'none';
            registerForm.style.display = 'block';
        });

        // Show the login form and hide the registration form
        showLoginForm.addEventListener('click', () => {
            registerForm.style.display = 'none';
            loginForm.style.display = 'block';
        });
    </script>
	
	
</body>


</html>
