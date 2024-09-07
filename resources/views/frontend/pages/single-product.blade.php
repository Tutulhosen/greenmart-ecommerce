@extends('frontend.layout.app')

@section('main-content')
<section>
    <div class="category_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>
                        <a href="http://burnamala.com">Home</a>
                        /
                        <a href="javascript:void(0);">Home &amp; Gadgets</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="products-details-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12 mb-md-3 mb-2">
                    
                    <div id="sing_prod_img_slider" class="carousel slide" data-ride="carousel">
                                                    <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('frontend/uploads/6200b851b6c12_800x800.jpg')}}" class="d-block w-100"
                                     alt="">
                            </div>
                                                        </div>
                                                </div>
                </div>

                <div class="col-md-5 mb-3">
                    <h2 class="text-capitalize single_prod_title">Six Peptides Repair Concentrate</h2>
                    <h3 class="font-weight-bold single_prod_prices">
                                                        <span
                                style="text-decoration: line-through; color: #555;opacity: .5">৳ 950</span>
                            <span style="color: #0088cc">৳ 690</span>
                                                </h3>
                    <p class="sku_text"><span>প্রোডাক্ট কোড: </span> <span class="p-0 pr-1">SPR-001</span></p>
                    <h4 class="single_prod_in_stock">স্টক :  <span
                            class="text-danger">স্টক আউট</span></h4>

                    

                    <form action="http://burnamala.com/add-cart/1" method="post">
                        <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                            <div class="d-flex">
                            <div class="qty-text-div">
                                <span>পরিমান : </span>
                            </div>
                            <div class="qty_div">
                                <div class="minus-qty-div">
                                    <i class="fa fa-minus" id="qty_minus"></i>
                                </div>
                                <div class="qty-div">
                                    <input type="text" name="qty" id="qty" min="1" value="1" readonly>
                                </div>
                                <div class="plus-qty-div">
                                    <i class="fa fa-plus" id="qty_plus"></i>
                                </div>
                            </div>
                        </div>

                        
                        <div class="mt-md-4 mt-2">
                            <input type="submit" class="btn px-4 order_now_btn order_now_btn_m" name="order_now" value="অর্ডার করুন">
                        </div>

                        <div class="mt-md-3 mt-2">
                            <input type="submit" class="btn px-4 add_cart_btn" name="add_cart" value="কার্ট-এ যোগ করুন">
                        </div>
                    </form>


                    <div class="mt-md-5 mt-4">
                        <h4>ফোনে অর্ডারের জন্য ডায়াল করুন</h4>

                                                        <h4 class="font-weight-bold ml-4">
                                <a href="tel:01784116079">
                                    <i class="fa fa-phone-square"></i>
                                    01784116079
                                </a>
                            </h4>
                        
                        
                                                </div>

                    

                                                <div class="col-12 mt-3 delivery_details" style="padding: 0">
                            <table class="table" style="color:#08c !important">
                                <tbody>
                                                                        <tr>
                                        <td style="padding-left: 0;border-bottom: 1px solid #ddd;">
                                            হোম ডেলিভারি
                                        </td>
                                        <td style="border-bottom: 1px solid #ddd;">
                                            <b>৳ 90</b>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td style="padding-left: 0;border-bottom: 1px solid #ddd;">
                                            হোম ডেলিভারি
                                        </td>
                                        <td style="border-bottom: 1px solid #ddd;">
                                            <b>৳ 110</b>
                                        </td>
                                    </tr>
                                                                    </tbody>
                            </table>
                        </div>
                                            <h6 class="font-weight-bold text-danger mt-md-3 mt-2">বিকাশ নাম্বার : 01784116079</h6>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="features">
                        <table>
                            <tbody>
                            <tr>
                                <td class="icon"><i class="fa fa-thumbs-up" style="color: #666"></i></td>
                                <td class="text">100% original products</td>
                            </tr>

                            <tr>
                                <td class="icon"><i class="fa fa-money" style="color: #666"></i></td>
                                <td class="text">Pay cash on delivery</td>
                            </tr>

                            <tr>
                                <td class="icon"><i class="fa fa-shopping-cart" style="color: #666;vertical-align: top"></i></td>
                                <td class="text">Delivery within: 2-3 business days</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="feature-products d-md-block d-none">
                        <p>প্রয়োজনীয় প্রোডাক্ট</p>
                        <div class="feature-products-wrapper">
                            <table>
                                                                        <tr>
                                        <td class="img">
                                            <a href="../4-prkar-12-masee-beej/141.html">
                                                <img width="50" src="uploads/66c79a0239506_180x180.jpg"
                                                     alt="">
                                            </a>
                                        </td>
                                        <td class="title">
                                            <a href="../4-prkar-12-masee-beej/141.html" class="text-dark">
                                                ৪ প্রকার ১২ মাসী বীজ
                                            </a>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td class="img">
                                            <a href="../super-slimming-coffee-package-1/140.html">
                                                <img width="50" src="uploads/66c0eb5b96c5d_180x180.jpg"
                                                     alt="">
                                            </a>
                                        </td>
                                        <td class="title">
                                            <a href="../super-slimming-coffee-package-1/140.html" class="text-dark">
                                                Super Slimming Coffee – Package 1
                                            </a>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td class="img">
                                            <a href="../super-slimming-coffee-package-2-full-course/139.html">
                                                <img width="50" src="uploads/66c0ead7986e8_180x180.jpg"
                                                     alt="">
                                            </a>
                                        </td>
                                        <td class="title">
                                            <a href="../super-slimming-coffee-package-2-full-course/139.html" class="text-dark">
                                                Super Slimming Coffee – Package 2 (Full Course)
                                            </a>
                                        </td>
                                    </tr>
                                                                </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs nav-tabs-mod">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">পন্যের বিবরণ</a>
                        </li>
                    </ul>
                    <div class="tab-content tab-content-mod">
                        <div class="tab-pane active">
                            <div>
                                <li style="color: rgb(51, 51, 51); font-family: raleway, sans-serif; background-image: url(image/right-arrow.html); background-position: initial; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; padding-left: 25px; margin-bottom: 10px; font-size: 16px; list-style-type: none !important;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="max-width: 100%; height: 64px; border: 0px;">কুচকে যাওয়া ত্বককে টানটান করবে! ত্বক ফর্সা করে</li><li style="color: rgb(51, 51, 51); font-family: raleway, sans-serif; background-image: url(image/right-arrow.html); background-position: initial; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; padding-left: 25px; margin-bottom: 10px; font-size: 16px; list-style-type: none !important;"></li><li style="color: rgb(51, 51, 51); font-family: raleway, sans-serif; background-image: url(image/right-arrow.html); background-position: initial; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; padding-left: 25px; margin-bottom: 10px; font-size: 16px; list-style-type: none !important;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="max-width: 100%; height: 64px; border: 0px;">ত্বকের প্রতিদিনের জমা হওয়া ময়লা পরিস্কার করে ত্বকে প্রয়োজনীয় ভিটামিন এবং পুস্টির যোগান দেয়</li><li style="color: rgb(51, 51, 51); font-family: raleway, sans-serif; background-image: url(image/right-arrow.html); background-position: initial; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; padding-left: 25px; margin-bottom: 10px; font-size: 16px; list-style-type: none !important;"></li><li style="color: rgb(51, 51, 51); font-family: raleway, sans-serif; background-image: url(image/right-arrow.html); background-position: initial; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; padding-left: 25px; margin-bottom: 10px; font-size: 16px; list-style-type: none !important;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="max-width: 100%; height: 64px; border: 0px;">ব্রনের দাগ এবং রোদে পোড়া দাগ দূর করে চোখের নিচের কালো ভাব দূর করে</li><li style="color: rgb(51, 51, 51); font-family: raleway, sans-serif; background-image: url(image/right-arrow.html); background-position: initial; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; padding-left: 25px; margin-bottom: 10px; font-size: 16px; list-style-type: none !important;"></li><li style="color: rgb(51, 51, 51); font-family: raleway, sans-serif; background-image: url(image/right-arrow.html); background-position: initial; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; padding-left: 25px; margin-bottom: 10px; font-size: 16px; list-style-type: none !important;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="max-width: 100%; height: 64px; border: 0px;">আপনার ত্বক করবে নিখুঁত ও মসৃণ করে।</li><li style="color: rgb(51, 51, 51); font-family: raleway, sans-serif; background-image: url(image/right-arrow.html); background-position: initial; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; padding-left: 25px; margin-bottom: 10px; font-size: 16px; list-style-type: none !important;"></li><li style="color: rgb(51, 51, 51); font-family: raleway, sans-serif; background-image: url(image/right-arrow.html); background-position: initial; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; padding-left: 25px; margin-bottom: 10px; font-size: 16px; list-style-type: none !important;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="max-width: 100%; height: 64px; border: 0px;">তককে সুন্দর ও আকর্ষণীও করে ক্ষতিগ্রস্থ ত্বক পুনরুদ্ধার করে</li><li style="color: rgb(51, 51, 51); font-family: raleway, sans-serif; background-image: url(image/right-arrow.html); background-position: initial; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; padding-left: 25px; margin-bottom: 10px; font-size: 16px; list-style-type: none !important;"></li><li style="color: rgb(51, 51, 51); font-family: raleway, sans-serif; background-image: url(image/right-arrow.html); background-position: initial; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; padding-left: 25px; margin-bottom: 10px; font-size: 16px; list-style-type: none !important;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="max-width: 100%; height: 64px; border: 0px;">Made in china</li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5 related-products">
                <div class="col-md-12">
                    <h4 class="mb-3">রিলেটেড প্রোডাক্ট</h4>
                </div>
            </div>

            <div class="row m-0">
                                        <div class="col-md-2 col-6 main-product">
                        <div class="main-product-inner-wrapper text-center">
                            <a href="../Wart-Remover-Cream/9.html">
                                <img src="uploads/6200c1c23f8b6_180x180.jpg" alt="Wart Remover Cream">
                            </a>
                                                                <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 790</p>
                                <p class="font-weight-bold mb-0" style="color: #fca204">৳ 590</p>
                                                            <p class="mb-0 prod_name"><a href="../Wart-Remover-Cream/9.html">Wart Remover Cream</a></p>
                            <form action="http://burnamala.com/add-cart/1" method="post">
                                <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                            </form>
                        </div>
                    </div>
                                        <div class="col-md-2 col-6 main-product">
                        <div class="main-product-inner-wrapper text-center">
                            <a href="../Magic-Drain-Cleaner-1/22.html">
                                <img src="uploads/6227c113702ca_180x180.png" alt="Magic Drain Cleaner">
                            </a>
                                                                <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 650</p>
                                <p class="font-weight-bold mb-0" style="color: #fca204">৳ 450</p>
                                                            <p class="mb-0 prod_name"><a href="../Magic-Drain-Cleaner-1/22.html">Magic Drain Cleaner</a></p>
                            <form action="http://burnamala.com/add-cart/1" method="post">
                                <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                            </form>
                        </div>
                    </div>
                                        <div class="col-md-2 col-6 main-product">
                        <div class="main-product-inner-wrapper text-center">
                            <a href="../Travel-Waterproof-Handbag-Parpel/79.html">
                                <img src="uploads/620b63285b32e_180x180.jpg" alt="Travel Waterproof Handbag Parpel">
                            </a>
                                                                <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 1250</p>
                                <p class="font-weight-bold mb-0" style="color: #fca204">৳ 990</p>
                                                            <p class="mb-0 prod_name"><a href="../Travel-Waterproof-Handbag-Parpel/79.html">Travel Waterproof Handbag Parpel</a></p>
                            <form action="http://burnamala.com/add-cart/1" method="post">
                                <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                            </form>
                        </div>
                    </div>
                                        <div class="col-md-2 col-6 main-product">
                        <div class="main-product-inner-wrapper text-center">
                            <a href="../Nail-Repair-and-Fungus-Treatment-Solution/26.html">
                                <img src="uploads/6200c6cced2cc_180x180.jpg" alt="Nail Repair and Fungus Treatment Solution">
                            </a>
                                                                <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 790</p>
                                <p class="font-weight-bold mb-0" style="color: #fca204">৳ 590</p>
                                                            <p class="mb-0 prod_name"><a href="../Nail-Repair-and-Fungus-Treatment-Solution/26.html">Nail Repair and Fungus Treatment Solution</a></p>
                            <form action="http://burnamala.com/add-cart/1" method="post">
                                <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                            </form>
                        </div>
                    </div>
                                        <div class="col-md-2 col-6 main-product">
                        <div class="main-product-inner-wrapper text-center">
                            <a href="../Portable-360-degree-rotation-Mobile-Stand/42.html">
                                <img src="uploads/6200d25b18535_180x180.jpg" alt="Portable 360 degree rotation Mobile Stand">
                            </a>
                                                                <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 450</p>
                                <p class="font-weight-bold mb-0" style="color: #fca204">৳ 290</p>
                                                            <p class="mb-0 prod_name"><a href="../Portable-360-degree-rotation-Mobile-Stand/42.html">Portable 360 degree rotation Mobile Stand</a></p>
                            <form action="http://burnamala.com/add-cart/1" method="post">
                                <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                            </form>
                        </div>
                    </div>
                                        <div class="col-md-2 col-6 main-product">
                        <div class="main-product-inner-wrapper text-center">
                            <a href="../Kinoki-Detox-Foot-Pads/45.html">
                                <img src="uploads/62023cbb6b046_180x180.jpg" alt="Kinoki Detox Foot Pads">
                            </a>
                                                                <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 690</p>
                                <p class="font-weight-bold mb-0" style="color: #fca204">৳ 350</p>
                                                            <p class="mb-0 prod_name"><a href="../Kinoki-Detox-Foot-Pads/45.html">Kinoki Detox Foot Pads</a></p>
                            <form action="http://burnamala.com/add-cart/1" method="post">
                                <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                            </form>
                        </div>
                    </div>
                                        <div class="col-md-2 col-6 main-product">
                        <div class="main-product-inner-wrapper text-center">
                            <a href="../Single-Sim-Supported-Land-Phone(-%e0%a6%b8%e0%a6%bf%e0%a6%99%e0%a7%8d%e0%a6%97%e0%a7%87%e0%a6%b2-%e0%a6%b8%e0%a6%bf%e0%a6%ae-%e0%a6%b8%e0%a6%be%e0%a6%aa%e0%a7%8b%e0%a6%b0%e0%a7%8d%e0%a6%9f%e0%a7%87%e0%a6%a1-%e0%a6%b2%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8%e0%a7%8d%e0%a6%a1%e0%a6%ab%e0%a7%8b%e0%a6%a8-(-%e0%a6%b8%e0%a6%be%e0%a6%a6%e0%a6%be-%e0%a6%95%e0%a6%be%e0%a6%b2%e0%a6%be%e0%a6%b0-)/65.html">
                                <img src="uploads/620241e55f62c_180x180.jpg" alt="Single-Sim-Supported-Land-Phone( সিঙ্গেল সিম সাপোর্টেড ল্যান্ডফোন ( সাদা কালার )">
                            </a>
                                                                <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 3050</p>
                                <p class="font-weight-bold mb-0" style="color: #fca204">৳ 1990</p>
                                                            <p class="mb-0 prod_name"><a href="../Single-Sim-Supported-Land-Phone(-%e0%a6%b8%e0%a6%bf%e0%a6%99%e0%a7%8d%e0%a6%97%e0%a7%87%e0%a6%b2-%e0%a6%b8%e0%a6%bf%e0%a6%ae-%e0%a6%b8%e0%a6%be%e0%a6%aa%e0%a7%8b%e0%a6%b0%e0%a7%8d%e0%a6%9f%e0%a7%87%e0%a6%a1-%e0%a6%b2%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8%e0%a7%8d%e0%a6%a1%e0%a6%ab%e0%a7%8b%e0%a6%a8-(-%e0%a6%b8%e0%a6%be%e0%a6%a6%e0%a6%be-%e0%a6%95%e0%a6%be%e0%a6%b2%e0%a6%be%e0%a6%b0-)/65.html">Single-Sim-Supported-Land-Phone( সিঙ্গেল সিম সাপোর্টেড ল্যান্ডফোন ( সাদা কালার )</a></p>
                            <form action="http://burnamala.com/add-cart/1" method="post">
                                <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                            </form>
                        </div>
                    </div>
                                        <div class="col-md-2 col-6 main-product">
                        <div class="main-product-inner-wrapper text-center">
                            <a href="../Snow-Flake-Multi-Tool-1/23.html">
                                <img src="uploads/6200c602e1e06_180x180.jpg" alt="Snow Flake Multi Tool">
                            </a>
                                                                <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 490</p>
                                <p class="font-weight-bold mb-0" style="color: #fca204">৳ 490</p>
                                                            <p class="mb-0 prod_name"><a href="../Snow-Flake-Multi-Tool-1/23.html">Snow Flake Multi Tool</a></p>
                            <form action="http://burnamala.com/add-cart/1" method="post">
                                <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                            </form>
                        </div>
                    </div>
                                        <div class="col-md-2 col-6 main-product">
                        <div class="main-product-inner-wrapper text-center">
                            <a href="../Nima-Electric-Spice-Grinder/40.html">
                                <img src="uploads/6200d1dfa9da9_180x180.jpg" alt="Nima Electric Spice Grinder">
                            </a>
                                                                <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 990</p>
                                <p class="font-weight-bold mb-0" style="color: #fca204">৳ 690</p>
                                                            <p class="mb-0 prod_name"><a href="../Nima-Electric-Spice-Grinder/40.html">Nima Electric Spice Grinder</a></p>
                            <form action="http://burnamala.com/add-cart/1" method="post">
                                <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                            </form>
                        </div>
                    </div>
                                        <div class="col-md-2 col-6 main-product">
                        <div class="main-product-inner-wrapper text-center">
                            <a href="../Wireless-Headset-Sunglasses/7.html">
                                <img src="uploads/6200c13518776_180x180.jpg" alt="Wireless Headset Sunglasses">
                            </a>
                                                                <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 1350</p>
                                <p class="font-weight-bold mb-0" style="color: #fca204">৳ 1050</p>
                                                            <p class="mb-0 prod_name"><a href="../Wireless-Headset-Sunglasses/7.html">Wireless Headset Sunglasses</a></p>
                            <form action="http://burnamala.com/add-cart/1" method="post">
                                <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                            </form>
                        </div>
                    </div>
                                        <div class="col-md-2 col-6 main-product">
                        <div class="main-product-inner-wrapper text-center">
                            <a href="../Multifunctional-Egg-boiler-and-Fry-pan/89.html">
                                <img src="uploads/622133ced172d_180x180.jpg" alt="Multifunctional Egg boiler and Fry pan">
                            </a>
                                                                <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 1590</p>
                                <p class="font-weight-bold mb-0" style="color: #fca204">৳ 1290</p>
                                                            <p class="mb-0 prod_name"><a href="../Multifunctional-Egg-boiler-and-Fry-pan/89.html">Multifunctional Egg boiler and Fry pan</a></p>
                            <form action="http://burnamala.com/add-cart/1" method="post">
                                <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                            </form>
                        </div>
                    </div>
                                        <div class="col-md-2 col-6 main-product">
                        <div class="main-product-inner-wrapper text-center">
                            <a href="../Shoes-Whitening-Cleansing-Gel%2c-Shoe-Stain-Remover/10.html">
                                <img src="uploads/6200c20f4299e_180x180.jpg" alt="Shoes Whitening Cleansing Gel, Shoe Stain Remover">
                            </a>
                                                                <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 790</p>
                                <p class="font-weight-bold mb-0" style="color: #fca204">৳ 590</p>
                                                            <p class="mb-0 prod_name"><a href="../Shoes-Whitening-Cleansing-Gel%2c-Shoe-Stain-Remover/10.html">Shoes Whitening Cleansing Gel, Shoe Stain Remover</a></p>
                            <form action="http://burnamala.com/add-cart/1" method="post">
                                <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                            </form>
                        </div>
                    </div>
                                </div>


        </div>
    </div>
</section>
@endsection