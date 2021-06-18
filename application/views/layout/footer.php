<!-- Footer Area Start Here -->
<div style="clear: both"></div>
<?php
$querymenu = $this->db->get('category');
$categorylists = $querymenu->result_array();
$categorylisttemp = [];


$this->db->select("seo_keywords");
$queryconf = $this->db->get('configuration_site');
$seokeywords = $queryconf->row();
$keywordschat = $seokeywords->seo_keywords;

$keywordslist = explode(", ", $keywordschat);

$this->db->where("parent_id", "0");
$querymenu = $this->db->get('category');
$categorylistsparent = $querymenu->result_array();
?>
<div class="container">
    <hr style="border: 1px solid #d92229;"/>

    <table class="footertable">
        <tr>
            <th style="width: 25%;text-align: right;">
                POPULAR CATEGORIES:
            </th>
            <td>
                <?php
                foreach ($categorylists as $key => $value) {
                    echo $value['category_name'] . ($key == (count($categorylists) - 1) ? '' : ', ');
                }
                ?>
            </td>
        </tr>

        <tr>
            <th style="width: 25%;text-align: right;">
                POPULAR BRANDS:
            </th>
            <td>

                POPULAR BRANDS:
                Fresho, bb Royal, Surf Excel, Amul, Nestle , Saffola, Britannia, Harpic, Lizol, Colgate, Dettol, Dabur, Tata I Shakti, Dhara , Fresho Meats, Parle, Real, Tropicana, Kissan, danone,
            </td>
        </tr>

        <tr>
            <th style="width: 25%;text-align: right;">
                PAYMENT OPTIONS:
            </th>
            <td>
                <img src="<?php echo base_url(); ?>assets/paymentstatus/payment.jpg" style="height: 75px;">
            </td>
        </tr>
    </table>


</div>

<footer>

    <div class="footer-area" style="background: #d92229">
        <div class="footer-area-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-box">
                            <h3>Information</h3>
                            <ul class="info-list">
                                <li><a href="#">FAQ's</a></li>
                                <li><a href="<?php echo site_url('about-us')?>">About Us</a></li>
                                <li><a href="<?php echo site_url('contact')?>">Contact Us</a></li>
                                <li><a href="<?php echo site_url('privacy-policy')?>">Privacy Policy</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-box">
                            <h3>My Account</h3>
                            <ul class="info-list">
                                 <li><a href="<?php echo site_url('Account/login')?>"">Login</a></li>
                                <li><a href="<?php echo site_url('Account/profile')?>"">My Account</a></li>
                                <li><a href="<?php echo site_url('Account/orderList')?>"">Order History</a></li>
                                <li><a href="<?php echo site_url('Cart/details')?>"">View Cart</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-box">
                            <h3>Order Now</h3>
                            <ul class="info-list">
                                <?php
                                foreach ($categorylistsparent as $key => $value) {
                                    ?>
                                 <li><a href=""><?php echo $value['category_name'];?></a></li>
                                <?php
                                  
                                }
                                ?>    
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-box">
                            <h3>Stay With Us!</h3>
                            <p>Connect with us via social media.</p>
                            <ul class="footer-social">
                                <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                            </ul><div class="newsletter-area">
                                <h3>NewsLetter Sign Up!</h3>
                                <div class="input-group stylish-input-group">
                                    <input type="text" class="form-control" placeholder="E-mail . . .">
                                    <span class="input-group-addon">
                                        <button type="submit">
                                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                        </button>  
                                    </span>
                                </div>
                            </div


                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div style="clear: both"></div>
        <div class="container">
            <div class="col-md-12 row " style="text-align: center;">
                <hr/>

                <span class="keywordfooter"><?php echo$keywordschat; ?> </span>

                <hr/>
            </div>
        </div>
        <div style="clear: both"></div>

        <div class="footer-area-bottom" style="background: #ffeb3b">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <p>Copyright ©  <?php echo date('Y') ?>  by  Maharaja Mart Ltd. All rights reserved.  </p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</footer>

<!-- Footer Area End Here -->

</div>









<!-- Bootstrap js -->
<script src="<?php echo base_url(); ?>assets/theme2/js/bootstrap.min.js" type="text/javascript"></script>
<!-- Owl Cauosel JS -->
<script src="<?php echo base_url(); ?>assets/theme2/js/owl.carousel.min.js" type="text/javascript"></script>
<!-- Nivo slider js -->
<script src="<?php echo base_url(); ?>assets/theme2/lib/custom-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/theme2/lib/custom-slider/home.js" type="text/javascript"></script>
<!-- Meanmenu Js -->
<script src="<?php echo base_url(); ?>assets/theme2/js/jquery.meanmenu.min.js" type="text/javascript"></script>
<!-- WOW JS -->
<script src="<?php echo base_url(); ?>assets/theme2/js/wow.min.js" type="text/javascript"></script>
<!-- Plugins js -->
<script src="<?php echo base_url(); ?>assets/theme2/js/plugins.js" type="text/javascript"></script>
<!-- Countdown js -->
<script src="<?php echo base_url(); ?>assets/theme2/js/jquery.countdown.min.js" type="text/javascript"></script>
<!-- Srollup js -->
<script src="<?php echo base_url(); ?>assets/theme2/js/jquery.scrollUp.min.js" type="text/javascript"></script>
<!-- Isotope js -->
<script src="<?php echo base_url(); ?>assets/theme2/js/isotope.pkgd.min.js" type="text/javascript"></script>
<!-- Select2 Js -->
<script src="<?php echo base_url(); ?>assets/theme2/js/select2.min.js" type="text/javascript"></script>
<!-- Custom Js -->

<!--wnum-->
<script src="<?php echo base_url(); ?>assets/theme2/js/wNumb.js" type="text/javascript"></script>

<!--no slider-->
<script src="<?php echo base_url(); ?>assets/theme2/js/vendor/nouislider.min.js" type="text/javascript"></script>


<script src="<?php echo base_url(); ?>assets/theme2/js/main.js" type="text/javascript"></script>

<!-- type ahead-->
<script src="<?php echo base_url(); ?>assets/handlebars.js" type="text/javascript"></script>

<!-- type ahead-->
<script src="<?php echo base_url(); ?>assets/typeahead.bundle.js" type="text/javascript"></script>


<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme2/angular/shopController.js"></script>




<script>
    $(window).on('load', function () {
        // Page Preloader




    });

    $('nav#dropdown').meanmenu({siteLogo: "<a href='/' class='logo-mobile-menu'><img src='<?php echo base_url() . 'assets/images/logo73.png'; ?>' style='    height: 35px;' /></a>"});
</script>


</body>

</html>