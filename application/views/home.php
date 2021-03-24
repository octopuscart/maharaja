<?php
$this->load->view('layout/header');
?>
<!-- Slider Area Start Here -->
<!--<div class="main-slider2">
    <div class="bend niceties preview-1">
        <div id="ensign-nivoslider-3" class="slides">


    </div>
</div>-->
<!-- Slider Area End Here -->
<div ng-controller="HomeController">

    <!-- Slider Area Start Here -->
    <div class="main-slider2">
        <div class="bend niceties preview-1">
            <div id="ensign-nivoslider-3" class="slides">
                <img src="<?php echo base_url(); ?>assets/sliders/24032021/main_slider2.jpg" alt="" title="#slider-direction-6" />
                <img src="<?php echo base_url(); ?>assets/sliders/24032021/indian_grocery.jpg" alt="" title="#slider-direction-7" />
                <img src="<?php echo base_url(); ?>assets/sliders/24032021/spice.jpg" alt="" title="#slider-direction-8" />
                <img src="<?php echo base_url(); ?>assets/sliders/24032021/vegetables.jpg" alt="" title="#slider-direction-9" />
                <img src="<?php echo base_url(); ?>assets/sliders/24032021/dairy.jpg" alt="" title="#slider-direction-10" />
                <img src="<?php echo base_url(); ?>assets/sliders/24032021/payment.jpg" alt="" title="#slider-direction-11" />
                <img src="<?php echo base_url(); ?>assets/sliders/24032021/cinema.jpg" alt="" title="#slider-direction-12" />

                <img src="<?php echo base_url(); ?>assets/sliders/home-banner-2.jpg" alt="" title="#slider-direction-1" />
                <img src="<?php echo base_url(); ?>assets/sliders/home-banner-4.jpg" alt="" title="#slider-direction-4" />
                <img src="<?php echo base_url(); ?>assets/sliders/home-banner-5.jpg" alt="" title="#slider-direction-5" />
                <img src="<?php echo base_url(); ?>assets/sliders/cinema-ticket-banner.jpg" alt="" title="#slider-direction-2" />
                <img src="<?php echo base_url(); ?>assets/sliders/home-banner-3.jpg" alt="" title="#slider-direction-3" />


            </div>
            <div id="slider-direction-1" class="t-cn slider-direction">
                <div class="slider-content t-lfr s-tb slider-3 hideonmoile">
                    <div class="title-container s-tb-c">
                        <h2 class="title1">SHOP ORGANIC PRODUCT
                            <br/> Fruits,Oils, Ghee & Much More
                        </h2>
                        <a href="<?php echo site_url('Product/productList/1/19'); ?>" class="btn-shop-now-fill-slider">Shop Now</a>
                    </div>
                </div>
            </div>

            <div id="slider-direction-2" class="t-cn slider-direction">
                <div class="slider-content t-lfr s-tb slider-3 hideonmoile">
                    <div class="title-container s-tb-c">
                        <h2 class="title1" style="font-size: 23px;"><span style="font-size: 40px;">Bollywood Movie Tickets
                            </span> <br>For Bookings Call / Whatsapp - +(852) 6142 8189
                        </h2>
                        <a href="http://maharajatickets.com/" target="_blank" class="btn-shop-now-fill-slider">Contact Us</a>
                    </div>
                </div>
            </div>


            <div id="slider-direction-3" class="t-cn slider-direction">
                <div class="slider-content t-lfr s-tb slider-3">
                    <div class="title-container s-tb-c">`
                        <h2 class="title1" style="font-size: 23px;">
                            <span style="font-size: 40px;">
                            </span> 
                        </h2>
                    </div>
                </div>
            </div>

            <div id="slider-direction-4" class="t-cn slider-direction">
                <div class="slider-content t-lfr s-tb slider-3">
                    <div class="title-container s-tb-c">
                        <h2 class="title1" style="font-size: 23px;">
                            <span style="font-size: 40px;">
                            </span> 
                        </h2>
                    </div>
                </div>
            </div>

            <div id="slider-direction-5" class="t-cn slider-direction">
                <div class="slider-content t-lfr s-tb slider-3">
                    <div class="title-container s-tb-c hideonmoile">
                        <h2 class="title1" style="font-size: 22px"> Top quality pulses and food grains, dairy products
                            <br/><span style="font-size: 20px">Fresh Fruits and Vegetables</span>                         </h2>
                        <a href="<?php echo site_url('Product/productList/1/19'); ?>" class="btn-shop-now-fill-slider">Shop Now</a>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- Slider Area End Here -->



    <div class="product2-area">
        <div class="container-fluid" >
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <span class="title-bar-left"></span>
                        <h2>Blockbuster Offers</h2>
                        <span class="title-bar-right"></span>
                    </div>
                </div>
            </div>

            <div class="row featuredContainer">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 homeproductblock {{globleCartData.products[product.id] ? 'activeproduct': '' }} " ng-repeat="product in homeInit.offers" >

                    <div class="product-box1" >

                        <div class="product-img-holder" style="background: url(<?php echo PRODUCTIMAGELINK; ?>{{product.file_name}});      background-size: cover;
                             background-position: center;">

                        </div>

                        <div class="product-content-holder">
                            <h3>
                                <a href="#">{{product.title}}  <br>
                                    <span style="font-size: 12px">{{product.short_description}} </span>
                                </a>
                                <span ><span  style="font-size: 12px;">{{product.regular_price|currency:"<?php echo globle_currency; ?> "}}</span>{{product.price|currency:"<?php echo globle_currency; ?> "}}</span>

                            </h3>

                            <div class="productbuttonscontainer">

                                <button ng-click="addToCart(product.id, 1)" class="productbutton" style="    background: #d92229;
                                        color: white;
                                        border-color: #d92229;">Add To Cart</button>
                                <button ng-click="addToBuy(product.id, 1)" type="button" class="productbutton">Buy Now</button>

                            </div>  
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <img src="<?php echo base_url(); ?>assets/movies/moviebanner.jpg" alt="offer" style="width:100%">

    <div class="offer-area1 hidden-after-desk movieblockhome">

        <div class="" style="padding: 0px 50px;">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="brand-area-box-l" style="padding-top: 24px;">
                        <span>Movie Ticket Price From </span>
                        <h1>HK$ 180 Only</h1>
                        <p>Choose your Ticket Price<br/> $220 (J-O) - $200 (E-I) - $180 (C-D)</p>
                        <a href="http://maharajatickets.com/" target="_blank" class="btn-shop-now-fill">Book Now</a>
                    </div>
                </div>
                <div id="countdown2">
<!--                    <div class="countdown-section"><h3>7th</h3> <p>FAB</p> </div>
                    <div class="countdown-section"><h3>8th</h3> <p>FAB</p> </div>
                    <div class="countdown-section"><h3>9th</h3> <p>FAB</p> </div>-->

                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="brand-area-box-r">
                        <a href="#"><img src="<?php echo base_url(); ?>assets/movies/movieposter1.jpg" alt="offer"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container block52">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="    margin-top: 24px;">
            <div class="banner-top-left col-lg-4 col-md-4 col-sm-4 col-xs-12"><a href="<?php echo site_url('contact'); ?>"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/ext/become-vendor-1.jpg" alt=""></a></div>
            <div class="banner-top-center col-lg-4 col-md-4 col-sm-4 col-xs-12"><a href="<?php echo site_url('privacy-policy'); ?>"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/ext/hk-delivery-1.jpg" alt=""></a></div>
            <div class="banner-top-right col-lg-4 col-md-4 col-sm-4 col-xs-12"><a href="http://maharajatickets.com/" target="_blank"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/ext/favourite-banner-1.jpg" alt=""></a></div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="    margin-top: 24px;">
            <div class="banner-bottom-left col-lg-8 col-md-8 col-sm-8 col-xs-12"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/ext/boutique-collection-1.jpg" alt=""></div>
            <div class="banner-bottom-right col-lg-4 col-md-4 col-sm-4 col-xs-12"><a href="<?php echo site_url('/'); ?>"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/ext/cares-shares-1.jpg" alt=""></a></div>
        </div>
    </div>

    <video autoplay loop muted poster="screenshot.jpg" id="background">
        <source src="<?php echo base_url(); ?>assets/sliders/maharajamart.mp4" type="video/mp4">
    </video>


    <div style="clear: both"></div>
    <div class="brand-area" >
        <div class="container">
            <div class="section-title">
                <span class="title-bar-left"></span>
                <h2>our Best Brands</h2>
                <span class="title-bar-right"></span>
            </div>
            <div class="metro-carousel" data-loop="true" data-items="6" data-margin="30" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="2" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="3" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="4" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="5" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="6" data-r-large-nav="true" data-r-large-dots="false">
                <?php
                $brandarray = ['Marico.png', 'Gowardhan.png', 'KhadiNatural.png', 'NaturePearls.png', 'RealFruitPower.png',
                    'Patanjali.png', 'Bikaji.png', 'PSO.png'
                ];
                foreach ($brandarray as $key => $value) {
                    ?>
                    <div class="brand-area-box">
                        <a href="#"><img src="<?php echo base_url(); ?>assets/brand/<?php echo $value; ?>" alt="brand"></a>
                    </div>
                    <?php
                }
                ?>

            </div>
        </div>
    </div>
    <!-- Brand Area End Here -->


    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="banner-bottom-left col-lg-8 col-md-8 col-sm-8 col-xs-12"><a href="<?php echo site_url('/'); ?>"><img src="<?php echo base_url(); ?>assets/images/ext/WhatsApp_Image_2018-10-15_at_11.30.10_PM.jpeg" alt=""></a></div>
            <div class="banner-bottom-right col-lg-4 col-md-4 col-sm-4 col-xs-12"><a href="<?php echo site_url('/'); ?>"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/ext/WhatsApp_Image_2018-10-15_at_11.30.11_PM.jpeg" alt=""></a></div>
        </div>
    </div>

</div>
<?php
$this->load->view('layout/footer');
?>