@extends('frontend.layout.app')

@section('main-content')
@include('frontend.pages.slider')


<section>
    <div class="product_categories">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5 class="mb-3">প্রোডাক্ট ক্যাটেগরীজ</h5>
                    <div class="horiz_cat">
                        <ul>
                            @foreach ($category as $item)
                                <li>
                                    <a href="{{route('frontend.category.page', $item->id)}}">{{$item->name}}</a>
                                </li> 
                            @endforeach
                                                         
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="hot-deals">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hot-deals-inner-wrapper">
                        <div class="row mb-3">
                            <div class="col-md-6 col-6">
                                <div class="hot-deals-gif">
                                    <img src="frontend/frontEnd/images/hot-deal-logo.gif" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 col-6">
                                <div class="all-hot-deals-btn text-right mt-2">
                                    <a href="landing_page.html">সকল হট ডিল <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="owl-carousel mb-3">
                                                                                                    <div class="hot-deals-product">
                                    <a href="landing_page.html">
                                        <div class="discount">
                                            <div class="discount-wrapper">
                                                <img src="frontend/frontEnd/images/flash-deal-percentage.png" alt="">
                                                <span>27%</span> <br>
                                                <span>ছাড়</span>
                                            </div>
                                        </div>
                                        <p class="float_price">৳ 690</p>
                                        <img src="frontend/uploads/6200b851b6c12_180x180.jpg" alt="Six Peptides Repair Concentrate">
                                    </a>
                                </div>
                                                                                                    <div class="hot-deals-product">
                                    <a href="landing_page.html">
                                        <div class="discount">
                                            <div class="discount-wrapper">
                                                <img src="frontend/frontEnd/images/flash-deal-percentage.png" alt="">
                                                <span>38%</span> <br>
                                                <span>ছাড়</span>
                                            </div>
                                        </div>
                                        <p class="float_price">৳ 490</p>
                                        <img src="frontend/uploads/6200b9303c487_180x180.jpg" alt="Car Dent Repair Tools Strong Suction Cup">
                                    </a>
                                </div>
                                                                                                    <div class="hot-deals-product">
                                    <a href="landing_page.html">
                                        <div class="discount">
                                            <div class="discount-wrapper">
                                                <img src="frontend/frontEnd/images/flash-deal-percentage.png" alt="">
                                                <span>31%</span> <br>
                                                <span>ছাড়</span>
                                            </div>
                                        </div>
                                        <p class="float_price">৳ 450</p>
                                        <img src="frontend/uploads/623df7efe260b_180x180.jpg" alt="Hustuo Hemorrhoids Cream ( 3 পিস 790 টাকা)">
                                    </a>
                                </div>
                                                                                                    <div class="hot-deals-product">
                                    <a href="landing_page.html">
                                        <div class="discount">
                                            <div class="discount-wrapper">
                                                <img src="frontend/frontEnd/images/flash-deal-percentage.png" alt="">
                                                <span>58%</span> <br>
                                                <span>ছাড়</span>
                                            </div>
                                        </div>
                                        <p class="float_price">৳ 590</p>
                                        <img src="frontend/uploads/6225e36a409ca_180x180.jpg" alt="ইনস্ট্যান্ট দাগ রিমুভার রোল">
                                    </a>
                                </div>
                                                                                                    <div class="hot-deals-product">
                                    <a href="landing_page.html">
                                        <div class="discount">
                                            <div class="discount-wrapper">
                                                <img src="frontend/frontEnd/images/flash-deal-percentage.png" alt="">
                                                <span>22%</span> <br>
                                                <span>ছাড়</span>
                                            </div>
                                        </div>
                                        <p class="float_price">৳ 690</p>
                                        <img src="frontend/uploads/6200ba1ad9257_180x180.jpg" alt="Copper High Pressure Water Spray Gun">
                                    </a>
                                </div>
                                                                                                    <div class="hot-deals-product">
                                    <a href="landing_page.html">
                                        <div class="discount">
                                            <div class="discount-wrapper">
                                                <img src="frontend/frontEnd/images/flash-deal-percentage.png" alt="">
                                                <span>30%</span> <br>
                                                <span>ছাড়</span>
                                            </div>
                                        </div>
                                        <p class="float_price">৳ 550</p>
                                        <img src="frontend/uploads/6200ba5d5264c_180x180.jpg" alt="মোল্ড ক্লিনার জেল">
                                    </a>
                                </div>
                                                                                                    <div class="hot-deals-product">
                                    <a href="landing_page.html">
                                        <div class="discount">
                                            <div class="discount-wrapper">
                                                <img src="frontend/frontEnd/images/flash-deal-percentage.png" alt="">
                                                <span>22%</span> <br>
                                                <span>ছাড়</span>
                                            </div>
                                        </div>
                                        <p class="float_price">৳ 1050</p>
                                        <img src="frontend/uploads/6200c13518776_180x180.jpg" alt="Wireless Headset Sunglasses">
                                    </a>
                                </div>
                                                                                                    <div class="hot-deals-product">
                                    <a href="landing_page.html">
                                        <div class="discount">
                                            <div class="discount-wrapper">
                                                <img src="frontend/frontEnd/images/flash-deal-percentage.png" alt="">
                                                <span>38%</span> <br>
                                                <span>ছাড়</span>
                                            </div>
                                        </div>
                                        <p class="float_price">৳ 490</p>
                                        <img src="frontend/uploads/6200c175130ca_180x180.jpg" alt="Foot Repair Cream">
                                    </a>
                                </div>
                                                                                                    <div class="hot-deals-product">
                                    <a href="landing_page.html">
                                        <div class="discount">
                                            <div class="discount-wrapper">
                                                <img src="frontend/frontEnd/images/flash-deal-percentage.png" alt="">
                                                <span>25%</span> <br>
                                                <span>ছাড়</span>
                                            </div>
                                        </div>
                                        <p class="float_price">৳ 590</p>
                                        <img src="frontend/uploads/6200c1c23f8b6_180x180.jpg" alt="Wart Remover Cream">
                                    </a>
                                </div>
                                                                                                    <div class="hot-deals-product">
                                    <a href="landing_page.html">
                                        <div class="discount">
                                            <div class="discount-wrapper">
                                                <img src="frontend/frontEnd/images/flash-deal-percentage.png" alt="">
                                                <span>25%</span> <br>
                                                <span>ছাড়</span>
                                            </div>
                                        </div>
                                        <p class="float_price">৳ 590</p>
                                        <img src="frontend/uploads/6200c20f4299e_180x180.jpg" alt="Shoes Whitening Cleansing Gel, Shoe Stain Remover">
                                    </a>
                                </div>
                                                                                                    <div class="hot-deals-product">
                                    <a href="landing_page.html">
                                        <div class="discount">
                                            <div class="discount-wrapper">
                                                <img src="frontend/frontEnd/images/flash-deal-percentage.png" alt="">
                                                <span>33%</span> <br>
                                                <span>ছাড়</span>
                                            </div>
                                        </div>
                                        <p class="float_price">৳ 300</p>
                                        <img src="frontend/uploads/6200c2611f0e9_180x180.jpg" alt="Furniture Polish">
                                    </a>
                                </div>
                                                                                                    <div class="hot-deals-product">
                                    <a href="landing_page.html">
                                        <div class="discount">
                                            <div class="discount-wrapper">
                                                <img src="frontend/frontEnd/images/flash-deal-percentage.png" alt="">
                                                <span>8%</span> <br>
                                                <span>ছাড়</span>
                                            </div>
                                        </div>
                                        <p class="float_price">৳ 1150</p>
                                        <img src="frontend/uploads/6200c2f5c039e_180x180.jpg" alt="Water Pump Car and Bike Washer">
                                    </a>
                                </div>
                                                        </div>

                        <div class="owl-carousel">
                                                                                                    <div class="hot-deals-product">
                                    <a href="landing_page.html">
                                        <div class="discount">
                                            <div class="discount-wrapper">
                                                <img src="frontend/frontEnd/images/flash-deal-percentage.png" alt="">
                                                <span>30%</span> <br>
                                                <span>ছাড়</span>
                                            </div>
                                        </div>
                                        <p class="float_price">৳ 690</p>
                                        <img src="frontend/uploads/6200c335e5db1_180x180.jpg" alt="Back Support Belt">
                                    </a>
                                </div>
                                                                                                    <div class="hot-deals-product">
                                    <a href="landing_page.html">
                                        <div class="discount">
                                            <div class="discount-wrapper">
                                                <img src="frontend/frontEnd/images/flash-deal-percentage.png" alt="">
                                                <span>0%</span> <br>
                                                <span>ছাড়</span>
                                            </div>
                                        </div>
                                        <p class="float_price">৳ 890</p>
                                        <img src="frontend/uploads/6200c379457a8_180x180.jpg" alt="Stainless Steel Hexagonal Aiwa 40 In 1 Pcs Wrench Tool Kit">
                                    </a>
                                </div>
                                                                                                    <div class="hot-deals-product">
                                    <a href="landing_page.html">
                                        <div class="discount">
                                            <div class="discount-wrapper">
                                                <img src="frontend/frontEnd/images/flash-deal-percentage.png" alt="">
                                                <span>21%</span> <br>
                                                <span>ছাড়</span>
                                            </div>
                                        </div>
                                        <p class="float_price">৳ 990</p>
                                        <img src="frontend/uploads/6200c3b4d53f5_180x180.jpg" alt="T9 Electric Rechargeable Trimer">
                                    </a>
                                </div>
                                                                                                    <div class="hot-deals-product">
                                    <a href="landing_page.html">
                                        <div class="discount">
                                            <div class="discount-wrapper">
                                                <img src="frontend/frontEnd/images/flash-deal-percentage.png" alt="">
                                                <span>30%</span> <br>
                                                <span>ছাড়</span>
                                            </div>
                                        </div>
                                        <p class="float_price">৳ 550</p>
                                        <img src="frontend/uploads/6200c40414afe_180x180.jpg" alt="Miss Belt">
                                    </a>
                                </div>
                                                                                                    <div class="hot-deals-product">
                                    <a href="landing_page.html">
                                        <div class="discount">
                                            <div class="discount-wrapper">
                                                <img src="frontend/frontEnd/images/flash-deal-percentage.png" alt="">
                                                <span>27%</span> <br>
                                                <span>ছাড়</span>
                                            </div>
                                        </div>
                                        <p class="float_price">৳ 650</p>
                                        <img src="frontend/uploads/6200c439817b2_180x180.jpg" alt="Oil Purification Spray">
                                    </a>
                                </div>
                                                                                                    <div class="hot-deals-product">
                                    <a href="landing_page.html">
                                        <div class="discount">
                                            <div class="discount-wrapper">
                                                <img src="frontend/frontEnd/images/flash-deal-percentage.png" alt="">
                                                <span>46%</span> <br>
                                                <span>ছাড়</span>
                                            </div>
                                        </div>
                                        <p class="float_price">৳ 990</p>
                                        <img src="frontend/uploads/6200c47a12c22_180x180.jpg" alt="Multipurpose Laptop and Reading Table">
                                    </a>
                                </div>
                                                                                                    <div class="hot-deals-product">
                                    <a href="landing_page.html">
                                        <div class="discount">
                                            <div class="discount-wrapper">
                                                <img src="frontend/frontEnd/images/flash-deal-percentage.png" alt="">
                                                <span>16%</span> <br>
                                                <span>ছাড়</span>
                                            </div>
                                        </div>
                                        <p class="float_price">৳ 1050</p>
                                        <img src="frontend/uploads/6200c4bc64516_180x180.jpg" alt="3D Large LED Digital Table Alarm Clock">
                                    </a>
                                </div>
                                                                                                    <div class="hot-deals-product">
                                    <a href="landing_page.html">
                                        <div class="discount">
                                            <div class="discount-wrapper">
                                                <img src="frontend/frontEnd/images/flash-deal-percentage.png" alt="">
                                                <span>51%</span> <br>
                                                <span>ছাড়</span>
                                            </div>
                                        </div>
                                        <p class="float_price">৳ 390</p>
                                        <img src="frontend/uploads/6200c4eab43e1_180x180.jpg" alt="Leak Stopping Waterproof Tape">
                                    </a>
                                </div>
                                                                                                    <div class="hot-deals-product">
                                    <a href="landing_page.html">
                                        <div class="discount">
                                            <div class="discount-wrapper">
                                                <img src="frontend/frontEnd/images/flash-deal-percentage.png" alt="">
                                                <span>25%</span> <br>
                                                <span>ছাড়</span>
                                            </div>
                                        </div>
                                        <p class="float_price">৳ 590</p>
                                        <img src="frontend/uploads/6200c58d5deee_180x180.jpg" alt="Ginger Fast Hair Growth Serum">
                                    </a>
                                </div>
                                                                                                    <div class="hot-deals-product">
                                    <a href="landing_page.html">
                                        <div class="discount">
                                            <div class="discount-wrapper">
                                                <img src="frontend/frontEnd/images/flash-deal-percentage.png" alt="">
                                                <span>31%</span> <br>
                                                <span>ছাড়</span>
                                            </div>
                                        </div>
                                        <p class="float_price">৳ 450</p>
                                        <img src="frontend/uploads/6227c113702ca_180x180.png" alt="Magic Drain Cleaner">
                                    </a>
                                </div>
                                                                                                    <div class="hot-deals-product">
                                    <a href="landing_page.html">
                                        <div class="discount">
                                            <div class="discount-wrapper">
                                                <img src="frontend/frontEnd/images/flash-deal-percentage.png" alt="">
                                                <span>0%</span> <br>
                                                <span>ছাড়</span>
                                            </div>
                                        </div>
                                        <p class="float_price">৳ 490</p>
                                        <img src="frontend/uploads/6200c602e1e06_180x180.jpg" alt="Snow Flake Multi Tool">
                                    </a>
                                </div>
                                                                                                    <div class="hot-deals-product">
                                    <a href="landing_page.html">
                                        <div class="discount">
                                            <div class="discount-wrapper">
                                                <img src="frontend/frontEnd/images/flash-deal-percentage.png" alt="">
                                                <span>0%</span> <br>
                                                <span>ছাড়</span>
                                            </div>
                                        </div>
                                        <p class="float_price">৳ 790</p>
                                        <img src="frontend/uploads/6200c649770c0_180x180.jpg" alt="DMPT Fishing Powder Food 100g">
                                    </a>
                                </div>
                                                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <section>
        <div class="main-products-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="mb-3">প্রয়োজনীয় প্রোডাক্ট</h4>
                    </div>
                </div>
                <div class="row m-0">
                                            <div class="col-md-2 col-6 main-product">
                            <div class="main-product-inner-wrapper text-center">
                                <a href="product/4-prkar-12-masee-beej/141.html">
                                    <img src="frontend/uploads/66c79a0239506_180x180.jpg" alt="৪ প্রকার ১২ মাসী বীজ">
                                </a>
                                                                    <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 750</p>
                                    <p class="font-weight-bold mb-0" style="color: #fca204">৳ 450</p>
                                                                <p class="mb-0 prod_name"><a href="landing_page.html">৪ প্রকার ১২ মাসী বীজ</a></p>
                                <form action="" method="post">
                                    <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                    <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                                </form>
                            </div>
                        </div>
                                            <div class="col-md-2 col-6 main-product">
                            <div class="main-product-inner-wrapper text-center">
                                <a href="landing_page.html">
                                    <img src="frontend/uploads/66c0eb5b96c5d_180x180.jpg" alt="Super Slimming Coffee – Package 1">
                                </a>
                                                                    <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 1550</p>
                                    <p class="font-weight-bold mb-0" style="color: #fca204">৳ 790</p>
                                                                <p class="mb-0 prod_name"><a href="landing_page.html">Super Slimming Coffee – Package 1</a></p>
                                <form action="" method="post">
                                    <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                    <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                                </form>
                            </div>
                        </div>
                                            <div class="col-md-2 col-6 main-product">
                            <div class="main-product-inner-wrapper text-center">
                                <a href="product/super-slimming-coffee-package-2-full-course/139.html">
                                    <img src="frontend/uploads/66c0ead7986e8_180x180.jpg" alt="Super Slimming Coffee – Package 2 (Full Course)">
                                </a>
                                                                    <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 3150</p>
                                    <p class="font-weight-bold mb-0" style="color: #fca204">৳ 1350</p>
                                                                <p class="mb-0 prod_name"><a href="landing_page.html">Super Slimming Coffee – Package 2 (Full Course)</a></p>
                                <form action="http://burnamala.com/add-cart/139" method="post">
                                    <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                    <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                                </form>
                            </div>
                        </div>
                                            <div class="col-md-2 col-6 main-product">
                            <div class="main-product-inner-wrapper text-center">
                                <a href="product/lemon-juice-tin-maser-kors/137.html">
                                    <img src="frontend/uploads/6698f9b20a000_180x180.webp" alt="Lemon Juice তিন মাসের কোর্স">
                                </a>
                                                                    <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 2980</p>
                                    <p class="font-weight-bold mb-0" style="color: #fca204">৳ 1380</p>
                                                                <p class="mb-0 prod_name"><a href="landing_page.html">Lemon Juice তিন মাসের কোর্স</a></p>
                                <form action="http://burnamala.com/add-cart/137" method="post">
                                    <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                    <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                                </form>
                            </div>
                        </div>
                                            <div class="col-md-2 col-6 main-product">
                            <div class="main-product-inner-wrapper text-center">
                                <a href="landing_page.html">
                                    <img src="frontend/uploads/6698f94a07c5f_180x180.webp" alt="Lemon Juice দুই মাসের কোর্স (2 packet)">
                                </a>
                                                                    <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 1950</p>
                                    <p class="font-weight-bold mb-0" style="color: #fca204">৳ 980</p>
                                                                <p class="mb-0 prod_name"><a href="product/lemon-juice-dui-maser-kors-2-packet/136.html">Lemon Juice দুই মাসের কোর্স (2 packet)</a></p>
                                <form action="http://burnamala.com/add-cart/136" method="post">
                                    <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                    <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                                </form>
                            </div>
                        </div>
                                            <div class="col-md-2 col-6 main-product">
                            <div class="main-product-inner-wrapper text-center">
                                <a href="product/lemon-juice-ek-maser-kors-1-packet/135.html">
                                    <img src="frontend/uploads/6698f8c421f83_180x180.webp" alt="Lemon Juice এক মাসের কোর্স (1 packet)">
                                </a>
                                                                    <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 980</p>
                                    <p class="font-weight-bold mb-0" style="color: #fca204">৳ 580</p>
                                                                <p class="mb-0 prod_name"><a href="product/lemon-juice-ek-maser-kors-1-packet/135.html">Lemon Juice এক মাসের কোর্স (1 packet)</a></p>
                                <form action="http://burnamala.com/add-cart/135" method="post">
                                    <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                    <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                                </form>
                            </div>
                        </div>
                                            <div class="col-md-2 col-6 main-product">
                            <div class="main-product-inner-wrapper text-center">
                                <a href="product/kerala-sim/134.html">
                                    <img src="frontend/uploads/667c81cdab97f_180x180.jpg" alt="কেরালা শিম">
                                </a>
                                                                    <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 450</p>
                                    <p class="font-weight-bold mb-0" style="color: #fca204">৳ 300</p>
                                                                <p class="mb-0 prod_name"><a href="product/kerala-sim/134.html">কেরালা শিম</a></p>
                                <form action="http://burnamala.com/add-cart/134" method="post">
                                    <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                    <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                                </form>
                            </div>
                        </div>
                                            <div class="col-md-2 col-6 main-product">
                            <div class="main-product-inner-wrapper text-center">
                                <a href="product/height-growth-tea-by-natural-plusfull-course/133.html">
                                    <img src="frontend/uploads/665e29f32c514_180x180.jpg" alt="Height Growth Tea by Natural Plus(Full Course).">
                                </a>
                                                                    <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 1750</p>
                                    <p class="font-weight-bold mb-0" style="color: #fca204">৳ 999</p>
                                                                <p class="mb-0 prod_name"><a href="product/height-growth-tea-by-natural-plusfull-course/133.html">Height Growth Tea by Natural Plus(Full Course).</a></p>
                                <form action="http://burnamala.com/add-cart/133" method="post">
                                    <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                    <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                                </form>
                            </div>
                        </div>
                                            <div class="col-md-2 col-6 main-product">
                            <div class="main-product-inner-wrapper text-center">
                                <a href="product/height-growth-tea-by-natural-plushalf-course/132.html">
                                    <img src="frontend/uploads/665e29893a5e5_180x180.jpg" alt="Height Growth Tea by Natural Plus(Half Course).">
                                </a>
                                                                    <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 1250</p>
                                    <p class="font-weight-bold mb-0" style="color: #fca204">৳ 650</p>
                                                                <p class="mb-0 prod_name"><a href="product/height-growth-tea-by-natural-plushalf-course/132.html">Height Growth Tea by Natural Plus(Half Course).</a></p>
                                <form action="http://burnamala.com/add-cart/132" method="post">
                                    <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                    <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                                </form>
                            </div>
                        </div>
                                            <div class="col-md-2 col-6 main-product">
                            <div class="main-product-inner-wrapper text-center">
                                <a href="product/lemon-juice/131.html">
                                    <img src="frontend/uploads/6698f834d8cf3_180x180.jpg" alt="Lemon Juice">
                                </a>
                                                                    <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 990</p>
                                    <p class="font-weight-bold mb-0" style="color: #fca204">৳ 750</p>
                                                                <p class="mb-0 prod_name"><a href="product/lemon-juice/131.html">Lemon Juice</a></p>
                                <form action="http://burnamala.com/add-cart/131" method="post">
                                    <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                    <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                                </form>
                            </div>
                        </div>
                                            <div class="col-md-2 col-6 main-product">
                            <div class="main-product-inner-wrapper text-center">
                                <a href="product/lcd-writing-tablet/130.html">
                                    <img src="frontend/uploads/6661cd2e1e60d_180x180.jpg" alt="LCD Writing Tablet">
                                </a>
                                                                    <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 550</p>
                                    <p class="font-weight-bold mb-0" style="color: #fca204">৳ 350</p>
                                                                <p class="mb-0 prod_name"><a href="product/lcd-writing-tablet/130.html">LCD Writing Tablet</a></p>
                                <form action="http://burnamala.com/add-cart/130" method="post">
                                    <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                    <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                                </form>
                            </div>
                        </div>
                                            <div class="col-md-2 col-6 main-product">
                            <div class="main-product-inner-wrapper text-center">
                                <a href="product/9-ti-bye-smnwye-1-ti-bi-eker-vitr-sb/129.html">
                                    <img src="frontend/uploads/664525fc8fd15_180x180.jpg" alt="৯ টি বইয়ে সমন্বয়ে ১ টি বই একের ভিতর সব">
                                </a>
                                                                    <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 750</p>
                                    <p class="font-weight-bold mb-0" style="color: #fca204">৳ 600</p>
                                                                <p class="mb-0 prod_name"><a href="product/9-ti-bye-smnwye-1-ti-bi-eker-vitr-sb/129.html">৯ টি বইয়ে সমন্বয়ে ১ টি বই একের ভিতর সব</a></p>
                                <form action="http://burnamala.com/add-cart/129" method="post">
                                    <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                    <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                                </form>
                            </div>
                        </div>
                                            <div class="col-md-2 col-6 main-product">
                            <div class="main-product-inner-wrapper text-center">
                                <a href="product/magic-book-pzakej-1-4-ti-bi-bangla-ingreji-gnit-ebng-drzing/128.html">
                                    <img src="frontend/uploads/6645258f1ce3c_180x180.jpg" alt="Magic Book প্যাকেজ ১ =৪ টি বই ( বাংলা, ইংরেজি, গনিত এবং ড্রয়িং )">
                                </a>
                                                                    <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 550</p>
                                    <p class="font-weight-bold mb-0" style="color: #fca204">৳ 450</p>
                                                                <p class="mb-0 prod_name"><a href="product/magic-book-pzakej-1-4-ti-bi-bangla-ingreji-gnit-ebng-drzing/128.html">Magic Book প্যাকেজ ১ =৪ টি বই ( বাংলা, ইংরেজি, গনিত এবং ড্রয়িং )</a></p>
                                <form action="http://burnamala.com/add-cart/128" method="post">
                                    <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                    <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                                </form>
                            </div>
                        </div>
                                            <div class="col-md-2 col-6 main-product">
                            <div class="main-product-inner-wrapper text-center">
                                <a href="product/magic-book-pzakej-2-5-ti-bi-bangla-ingreji-gnit-drzing-ebng-arbi/127.html">
                                    <img src="frontend/uploads/664451025b047_180x180.png" alt="Magic Book প্যাকেজ ২= ৫ টি বই (বাংলা, ইংরেজি, গনিত, ড্রয়িং এবং আরবি )">
                                </a>
                                                                    <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 650</p>
                                    <p class="font-weight-bold mb-0" style="color: #fca204">৳ 550</p>
                                                                <p class="mb-0 prod_name"><a href="product/magic-book-pzakej-2-5-ti-bi-bangla-ingreji-gnit-drzing-ebng-arbi/127.html">Magic Book প্যাকেজ ২= ৫ টি বই (বাংলা, ইংরেজি, গনিত, ড্রয়িং এবং আরবি )</a></p>
                                <form action="http://burnamala.com/add-cart/127" method="post">
                                    <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                    <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                                </form>
                            </div>
                        </div>
                                            <div class="col-md-2 col-6 main-product">
                            <div class="main-product-inner-wrapper text-center">
                                <a href="product/Mini-Portable-Pocket-Shaver/97.html">
                                    <img src="frontend/uploads/623a232298259_180x180.jpg" alt="Mini Portable Pocket Shaver">
                                </a>
                                                                    <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 990</p>
                                    <p class="font-weight-bold mb-0" style="color: #fca204">৳ 590</p>
                                                                <p class="mb-0 prod_name"><a href="product/Mini-Portable-Pocket-Shaver/97.html">Mini Portable Pocket Shaver</a></p>
                                <form action="http://burnamala.com/add-cart/97" method="post">
                                    <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                    <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                                </form>
                            </div>
                        </div>
                                            <div class="col-md-2 col-6 main-product">
                            <div class="main-product-inner-wrapper text-center">
                                <a href="product/Glass-Crack-Repair-Tools/96.html">
                                    <img src="frontend/uploads/6234d2b0abe94_180x180.jpg" alt="Glass Crack Repair Tools">
                                </a>
                                                                    <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 990</p>
                                    <p class="font-weight-bold mb-0" style="color: #fca204">৳ 750</p>
                                                                <p class="mb-0 prod_name"><a href="product/Glass-Crack-Repair-Tools/96.html">Glass Crack Repair Tools</a></p>
                                <form action="http://burnamala.com/add-cart/96" method="post">
                                    <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                    <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                                </form>
                            </div>
                        </div>
                                            <div class="col-md-2 col-6 main-product">
                            <div class="main-product-inner-wrapper text-center">
                                <a href="product/Ohico-Hair-Color-Stick-Korean/95.html">
                                    <img src="frontend/uploads/622a2d6dd6321_180x180.jpg" alt="Ohico Hair Color Stick Korean">
                                </a>
                                                                    <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 890</p>
                                    <p class="font-weight-bold mb-0" style="color: #fca204">৳ 650</p>
                                                                <p class="mb-0 prod_name"><a href="product/Ohico-Hair-Color-Stick-Korean/95.html">Ohico Hair Color Stick Korean</a></p>
                                <form action="http://burnamala.com/add-cart/95" method="post">
                                    <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                    <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                                </form>
                            </div>
                        </div>
                                            <div class="col-md-2 col-6 main-product">
                            <div class="main-product-inner-wrapper text-center">
                                <a href="product/Master-cutting-scissors/94.html">
                                    <img src="frontend/uploads/622134b996082_180x180.jpg" alt="Master cutting scissors">
                                </a>
                                                                    <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 590</p>
                                    <p class="font-weight-bold mb-0" style="color: #fca204">৳ 450</p>
                                                                <p class="mb-0 prod_name"><a href="product/Master-cutting-scissors/94.html">Master cutting scissors</a></p>
                                <form action="http://burnamala.com/add-cart/94" method="post">
                                    <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                    <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                                </form>
                            </div>
                        </div>
                                            <div class="col-md-2 col-6 main-product">
                            <div class="main-product-inner-wrapper text-center">
                                <a href="product/Fold-able-Stainless-Steel-Sink-Racks/93.html">
                                    <img src="frontend/uploads/622134905deb2_180x180.jpg" alt="Fold-able Stainless Steel Sink Racks">
                                </a>
                                                                    <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 990</p>
                                    <p class="font-weight-bold mb-0" style="color: #fca204">৳ 790</p>
                                                                <p class="mb-0 prod_name"><a href="product/Fold-able-Stainless-Steel-Sink-Racks/93.html">Fold-able Stainless Steel Sink Racks</a></p>
                                <form action="http://burnamala.com/add-cart/93" method="post">
                                    <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                    <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                                </form>
                            </div>
                        </div>
                                            <div class="col-md-2 col-6 main-product">
                            <div class="main-product-inner-wrapper text-center">
                                <a href="product/Mimo-Body-Massager/92.html">
                                    <img src="frontend/uploads/62213459a3120_180x180.jpg" alt="Mimo Body Massager">
                                </a>
                                                                    <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 690</p>
                                    <p class="font-weight-bold mb-0" style="color: #fca204">৳ 590</p>
                                                                <p class="mb-0 prod_name"><a href="product/Mimo-Body-Massager/92.html">Mimo Body Massager</a></p>
                                <form action="http://burnamala.com/add-cart/92" method="post">
                                    <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                    <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                                </form>
                            </div>
                        </div>
                                            <div class="col-md-2 col-6 main-product">
                            <div class="main-product-inner-wrapper text-center">
                                <a href="product/Silicon-Body-Washer/91.html">
                                    <img src="frontend/uploads/6221342e9f61c_180x180.jpg" alt="Silicon Body Washer">
                                </a>
                                                                    <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 690</p>
                                    <p class="font-weight-bold mb-0" style="color: #fca204">৳ 490</p>
                                                                <p class="mb-0 prod_name"><a href="product/Silicon-Body-Washer/91.html">Silicon Body Washer</a></p>
                                <form action="http://burnamala.com/add-cart/91" method="post">
                                    <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                    <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                                </form>
                            </div>
                        </div>
                                            <div class="col-md-2 col-6 main-product">
                            <div class="main-product-inner-wrapper text-center">
                                <a href="product/Gadget-Holder/90.html">
                                    <img src="frontend/uploads/62213401bb706_180x180.jpg" alt="Gadget Holder">
                                </a>
                                                                    <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 450</p>
                                    <p class="font-weight-bold mb-0" style="color: #fca204">৳ 350</p>
                                                                <p class="mb-0 prod_name"><a href="product/Gadget-Holder/90.html">Gadget Holder</a></p>
                                <form action="http://burnamala.com/add-cart/90" method="post">
                                    <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                    <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                                </form>
                            </div>
                        </div>
                                            <div class="col-md-2 col-6 main-product">
                            <div class="main-product-inner-wrapper text-center">
                                <a href="product/Multifunctional-Egg-boiler-and-Fry-pan/89.html">
                                    <img src="frontend/uploads/622133ced172d_180x180.jpg" alt="Multifunctional Egg boiler and Fry pan">
                                </a>
                                                                    <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 1590</p>
                                    <p class="font-weight-bold mb-0" style="color: #fca204">৳ 1290</p>
                                                                <p class="mb-0 prod_name"><a href="product/Multifunctional-Egg-boiler-and-Fry-pan/89.html">Multifunctional Egg boiler and Fry pan</a></p>
                                <form action="http://burnamala.com/add-cart/89" method="post">
                                    <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                    <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                                </form>
                            </div>
                        </div>
                                            <div class="col-md-2 col-6 main-product">
                            <div class="main-product-inner-wrapper text-center">
                                <a href="product/Sink-Soap-%26-Sponge-Organizer/88.html">
                                    <img src="frontend/uploads/6221339e2c630_180x180.jpg" alt="Sink Soap &amp; Sponge Organizer">
                                </a>
                                                                    <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 390</p>
                                    <p class="font-weight-bold mb-0" style="color: #fca204">৳ 250</p>
                                                                <p class="mb-0 prod_name"><a href="product/Sink-Soap-%26-Sponge-Organizer/88.html">Sink Soap &amp; Sponge Organizer</a></p>
                                <form action="http://burnamala.com/add-cart/88" method="post">
                                    <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                    <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                                </form>
                            </div>
                        </div>
                                            <div class="col-md-2 col-6 main-product">
                            <div class="main-product-inner-wrapper text-center">
                                <a href="product/Invisible-Drawer/87.html">
                                    <img src="frontend/uploads/62213364d39d5_180x180.jpg" alt="Invisible Drawer">
                                </a>
                                                                    <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 520</p>
                                    <p class="font-weight-bold mb-0" style="color: #fca204">৳ 450</p>
                                                                <p class="mb-0 prod_name"><a href="product/Invisible-Drawer/87.html">Invisible Drawer</a></p>
                                <form action="http://burnamala.com/add-cart/87" method="post">
                                    <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                    <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                                </form>
                            </div>
                        </div>
                                            <div class="col-md-2 col-6 main-product">
                            <div class="main-product-inner-wrapper text-center">
                                <a href="product/Silicon-Folding-Cup/86.html">
                                    <img src="frontend/uploads/62213324f2d01_180x180.jpg" alt="Silicon Folding Cup">
                                </a>
                                                                    <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 790</p>
                                    <p class="font-weight-bold mb-0" style="color: #fca204">৳ 650</p>
                                                                <p class="mb-0 prod_name"><a href="product/Silicon-Folding-Cup/86.html">Silicon Folding Cup</a></p>
                                <form action="http://burnamala.com/add-cart/86" method="post">
                                    <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                    <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                                </form>
                            </div>
                        </div>
                                            <div class="col-md-2 col-6 main-product">
                            <div class="main-product-inner-wrapper text-center">
                                <a href="product/Food-Sealing-Machine/85.html">
                                    <img src="frontend/uploads/622132e9bac16_180x180.jpg" alt="Food Sealing Machine">
                                </a>
                                                                    <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 2290</p>
                                    <p class="font-weight-bold mb-0" style="color: #fca204">৳ 1790</p>
                                                                <p class="mb-0 prod_name"><a href="product/Food-Sealing-Machine/85.html">Food Sealing Machine</a></p>
                                <form action="http://burnamala.com/add-cart/85" method="post">
                                    <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                    <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                                </form>
                            </div>
                        </div>
                                            <div class="col-md-2 col-6 main-product">
                            <div class="main-product-inner-wrapper text-center">
                                <a href="product/Household-Kitchen-Washing-Liquid-Dish-Brush-1/84.html">
                                    <img src="frontend/uploads/622132aba8a87_180x180.jpg" alt="Household Kitchen Washing Liquid Dish Brush">
                                </a>
                                                                    <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ 590</p>
                                    <p class="font-weight-bold mb-0" style="color: #fca204">৳ 390</p>
                                                                <p class="mb-0 prod_name"><a href="product/Household-Kitchen-Washing-Liquid-Dish-Brush-1/84.html">Household Kitchen Washing Liquid Dish Brush</a></p>
                                <form action="http://burnamala.com/add-cart/84" method="post">
                                    <input type="hidden" name="_token" value="XXZrsl9wgpNRJBwrLcZyy76d5amKi0PaOHwQASGN">                                    <input type="hidden" name="qty" value="1">
                                    <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                                </form>
                            </div>
                        </div>
                                    </div>

                <div class="row mt-md-4 mt-2">
                    <div class="col-12">
                        <nav>
        <ul class="pagination">
            
                <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>
                <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                <li class="page-item"><a class="page-link" href="index4658.html?page=2">2</a></li>
                <li class="page-item"><a class="page-link" href="index9ba9.html?page=3">3</a></li>
                <li class="page-item"><a class="page-link" href="indexfdb0.html?page=4">4</a></li>
                <li class="page-item">
                    <a class="page-link" href="index4658.html?page=2" rel="next" aria-label="Next &raquo;">&rsaquo;</a>
                </li>
                    </ul>
    </nav>

                    </div>
                </div>
            </div>
        </div>
</section>
@endsection