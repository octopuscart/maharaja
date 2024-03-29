<?php
$this->load->view('layout/header');
?>
<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb-area">
                    <h1>My Account</h1>
                    <ul>
                        <li><a href="#">Home</a> /</li>
                        <li>Account</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->
<!-- Login Registration Page Area Start Here -->
<div class="login-registration-page-area" style="padding: 20px 0;">
    <div class="container">
        <div class="row">
            <?php
            if ($userloggedin == 'yes') {
                ?>

                <div class="col-md-12 text-center">
                    <h2>
                        <i class="fa fa-user"></i> <?php echo $user_details->first_name . ' ' . $user_details->last_name; ?>
                        <br/>
                        <small><i class="fa fa-envelope"></i> <?php echo $user_details->email; ?></small>
                    </h2>
                    <a class="btn  btn btn-danger" href="<?php echo site_url('/'); ?>"> <i class=" fa fa-arrow-left"></i> SHOP MORE</a>
                    <a class="btn  btn btn-danger" href="<?php echo site_url('Cart/details'); ?>">VIEW CART <i class=" fa fa-arrow-right"></i></a>
                </div>        

                <?php
            } else {
                ?>

                <div class="col-lg-12">
                    <?php
                    if ($next_link === 'checkoutInit') {
                        ?>
                        <h5  class="text-center">
                            <a href="<?php echo site_url("CartGuest/checkoutInit"); ?>" class="btn  btn btn-danger">
                                <i class=" fa fa-user"></i> Checkout As Guest <i class="fa fa-arrow-right"></i>
                            </a>
                        </h5>
                        <h3  class="text-center">Or</h3>
                        <?php
                    }
                    ?>
                    <h5 class="text-center">  By creating an account with our store, you will be able to move through
                        the checkout process faster, store multiple shipping addresses,
                        view and track your orders in your account and more.
                    </h5>
                </div>
                <?php
                if ($msg) {
                    ?>
                    <div class="col-md-12">
                        <div class="alert alert-warning alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="ion-android-close"></i> </span></button>
                            <i class="fa fa-exclamation-triangle "></i> <?php echo $msg; ?>
                        </div>
                    </div>
                    <?php
                }
                ?>
                <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                    <div class="login-registration-field">
                        <h2 class="cart-area-title">Login</h2>
                        <form method="post" action="#">
                            <label>Email address *</label>
                            <input type="email" name="email" placeholder="Email " required=""/>
                            <label>Password *</label>
                            <input type="password" name="password" placeholder="Password *" required=""/>

                            <button class="btn-send-message " name="signIn" type="submit" value="signIn">Login</button>
                            <!--<span><input type="checkbox" name="remember"/>Remember Me</span>-->
                        </form>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
                    <div class="login-registration-field">
                        <h2 class="cart-area-title">Register</h2>
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Last Name *</label>
                                    <input type="text" name="last_name" placeholder="Last Name *" required="">
                                </div>
                                <div class="col-md-6">
                                    <label>First Name *</label>
                                    <input type="text" name="first_name" placeholder="First Name *" required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email address *</label>
                                    <input type="email" name="email" placeholder="Email *" required="">
                                </div>
                                <div class="col-md-6">
                                    <label>Contact No. *</label>
                                    <input type="tel" name="contact_no" placeholder="Contact No. *" required="">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Password *</label>
                                    <input type="password" class="pass" name="password" placeholder="Password" required="">

                                </div>
                                <div class="col-md-6">
                                    <label>Confirm Password *</label>
                                    <input type="password" class="con_pass" name="con_password" placeholder="Confirm Password" required>

                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <label>Gender *</label>
                                    <select name="gender" id="gender"    required >
                                        <option value="Male" >Male</option>
                                        <option value="Female" >Female</option>
                                    </select>


                                </div>
                                <div class="col-md-6">
                                    <input type="hidden" name="birth_date" id="birth_date" value="{{birth_month}}-{{date_birth}}"> 
                                    <label>Date Of Birth *</label>


                                    <select id="birth_month" ng-model="birth_month" name="birth_month" class="r_corners bg_light w_full border_none bith_date_select" required >
                                        <option value="" >-MM-</option>
                                        <?php
                                        for ($i = 1; $i <= 12; $i++) {
                                            $mmdate = $i < 10 ? "0" . $i : $i;
                                            echo "<option value='$mmdate'>$mmdate</option>";
                                        }
                                        ?>
                                    </select> 

                                    <select id="birth_date" name="date_birth" ng-model="date_birth" class="r_corners bg_light w_full border_none bith_date_select"  required >
                                        <option value="" >-DD-</option>
                                        <?php
                                        for ($i = 1; $i <= 31; $i++) {
                                            $dddate = $i < 10 ? "0" . $i : $i;
                                            echo "<option value='$dddate'>$dddate</option>";
                                        }
                                        ?>
                                    </select>

                                </div>
                            </div>
                            <div style="clear: both"></div>





                            <br/>


                            <button name = "registration" class="btn-send-message disabled" type="submit" value="Login">Register</button>
                        </form>
                    </div>
                </div>
                <?php
            }
            ?>

        </div>
    </div>
</div>
<!-- Login Registration Page Area End Here -->

<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/productController.js"></script>


<?php
$this->load->view('layout/footer');
?>