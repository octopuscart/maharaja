<?php
$this->load->view('layout/header');
?>

<style>
    .cartbutton{
        width: 100%;
        padding: 6px;
        color: #fff!important;
    }


    .noti-check1 span{
        color: red;
        color: red;
        width: 111px;
        float: left;
        text-align: right;
        padding-right: 13px;
    }

    .noti-check1 h6{
        font-size: 15px;
        font-weight: 600;
    }

    .address_block{
        background: #fff;
        border: 3px solid #d30603;
        padding: 5px 10px;
        margin-bottom: 20px;
        height: 150px;


    }
    .checkcart {
        border-radius: 50%;
        position: absolute;
        top: -28px;
        left: -8px;
        padding: 4px;
        background: #fff;
        border: 2px solid green;
    }


    .default{
        border: 2px solid green;
    }

    .default{
        border: 2px solid green;
    }

    .checkcart i{
        color: green;
    }

    .address_button{
        padding: 0px 10px;
        margin-top: 15px;
        font-size: 10px;


    }

    .cartdetail_small {
        float: left;
        width: 203px;
    }
    .address_guest_p{
        margin: 0px;
    }

    .freeshippingnote{
        color:red;
    }
    
</style>






<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb-area">
                    <h1>Checkout</h1>
                    <ul>
                        <li><a href="#">Home</a> /</li>
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->

<!-- Content -->


<div class="cart-page-area">
    <div class="container" ng-if="globleCartData.total_quantity">
        <div class="row">
             <?php
                    $this->load->view('Cart/commanmessage');
                    ?>
            <?php
            $this->load->view('CartGuest/itemblock', array('vtype' => 'items'));
            ?>




            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span class="fa-stack">
                                    <i class="fa fa-map-marker fa-stack-1x"></i>
                                    <i class="ion-bag fa-stack-1x "></i>
                                </span>   Shopping Address
                                <span style="float: right; line-height: 29px;" class="ng-binding">
                                    <button class="btn btn-danger" data-toggle="modal" data-target="#changeAddress" style="margin-left: 20px;padding: 5px 11px;color:white;"><i class="fa fa-plus"></i> Add New</button>
                                </span> 
                            </a>
                        </h4>
                    </div>
                    <!-- Address Details -->
                    <div class="panel-body">


                        <div class="row" >  

                            <div class="col-md-12">

                                <?php
                                if (count($user_address_details)) {
                                    ?>
                                    <div class="col-md-6">
                                        <h3><i class="fa fa-user"></i> <?php echo $user_details['name']; ?> </h3>
                                        <p class="address_guest_p"><i class="fa fa-phone"></i> <?php echo $user_details['contact_no']; ?> </p>
                                        <p class="address_guest_p"><i class="fa fa-envelope"></i> <?php echo $user_details['email']; ?> </p>
                                        <a href="<?php echo site_url("CartGuest/checkoutShipping/?removeAddress=" . $user_details['email']); ?>" class="btn btn-danger address_button btn-sm "><i class ="fa fa-times"></i> Remove Address</a>
                                    </div>

                                    <?php
                                    foreach ($user_address_details as $key => $value) {
                                        ?>
                                        <div class="col-md-6">
                                            <div class="">
                                                <b>Ship To</b>
                                                <p>
                                                    <?php echo $value['address1']; ?>,<br/>
                                                    <?php echo $value['address2']; ?>,<br/>
                                                    <?php echo $value['city']; ?><br/>
 <?php echo $value['zipcode']=='on'?'<span class="freeshippingnote">Free shipping at Tsim Sha Tsui<span>':''; ?>
                                                </p>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                } else {
                                    ?>
                                    <h4 class="text-center " style="color: red"><i class="fa fa-warning"></i> Please Add Shipping Address</h4>

                                    <?php
                                }
                                ?>
                            </div>                            

                        </div>
                    </div>
                    <div class="cart-page-top table-responsive">
                        <table class="table table-hover">
                            <tbody id="quantity-holder">
                                <tr>
                                    <td colspan="4" class="text_right">
                                        <div class="proceed-button pull-left " >
                                            <a href=" <?php echo site_url("CartGuest/checkoutInit"); ?>" class="btn-apply-coupon checkout_button_pre disabled" ><i class="fa fa-arrow-left"></i> View Cart</a>
                                        </div>
                                        <div class="proceed-button pull-right ">
                                            <?php
                                            if (count($user_address_details)) {
                                                ?>
                                                <a href=" <?php echo site_url("CartGuest/checkoutPayment"); ?>" class="btn-apply-coupon checkout_button_next disabled" >Choose Payment Method <i class="fa fa-arrow-right"></i></a>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <?php
            $this->load->view('CartGuest/itemblock', array('vtype' => 'payment'));
            ?>
        </div>



    </div>

</div>
</div>



<?php
$this->load->view('Cart/noproduct');
?>



<!-- Modal -->
<div class="modal  fade" id="changeAddress" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="    z-index: 20000000;">
    <div class="modal-dialog modal-sm" role="document">
        <form action="#" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel" style="font-size: 15px">Add New Address</h4>
                </div>
                <div class="modal-body checkout-form">

                    <table class="table">
                        <tbody>
                            <tr>
                                <td style="line-height: 25px;">
                                    <span for="name" class=""><b>Full Name</b></span>
                                </td>
                                <td>
                                    <input type="text" required="" name="name" class="form-control woocommerce-Input woocommerce-Input--email input-text" value="" style="height: 10%;">
                                </td>
                            </tr>
                            <tr>
                                <td style="line-height: 25px;">
                                    <span for="name" class=""><b>Email Address</b></span>
                                </td>
                                <td>
                                    <input type="email" required="" name="email" class="form-control woocommerce-Input woocommerce-Input--email input-text" value="" style="height: 10%;">
                                </td>
                            </tr>
                            <tr>
                                <td style="line-height: 25px;">
                                    <span for="name" class=""><b>Contact No.</b></span>
                                </td>
                                <td>
                                    <input type="tel" required="" name="contact_no" class="form-control woocommerce-Input woocommerce-Input--email input-text" value="" style="height: 10%;">
                                </td>
                            </tr>
                            <tr>
                                <td style="line-height: 25px;">
                                    <span for="name" class=""><b>Address</b></span>
                                </td>
                                <td>
                                    <input type="text" required="" name="address1" class="form-control woocommerce-Input woocommerce-Input--email input-text" value="" style="height: 10%;">
                                </td>
                            </tr>

                            <tr>
                                <td style="line-height: 25px;">
                                    <span for="name" class=""><b>Landmark</b></span>
                                </td>
                                <td>
                                    <input type="text" required="" name="address2" class="form-control woocommerce-Input woocommerce-Input--email input-text" value="" style="height: 10%;">
                                </td>
                            </tr>
                            <tr>
                                <td style="line-height: 25px;">
                                    <span for="name" class=""><b>Town/City</b></span>

                                </td>
                                <td>
                                    <input type="hidden" required="" name="state" class="form-control woocommerce-Input woocommerce-Input--email input-text" value="" style="height: 10%;">




                                    <input type="hidden" required="" name="country" class="form-control" value="" style="height: 10%;">


                                    <input type="text" required="" name="city" class="form-control woocommerce-Input woocommerce-Input--email input-text" value="" style="height: 10%;">
                                </td>
                            </tr>
                            <tr>
                                <td style="line-height: 25px;" colspan="2">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="zipcode"> Please check if address belongs to Tsim Sha Tsui

                                        </label>
                                    </div>
                                 

                                </td>
                            </tr>


                        </tbody>
                    </table>


                </div>
                <div class="modal-footer">
                    <button type="submit" name="add_address" class="btn btn-primary btn-small" style="color: white">Add Address</button>
                </div>
            </div>
        </form>
    </div>
</div>








<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/productController.js"></script>
<script>
        var avaiblecredits = 0;
</script>

<?php
$this->load->view('layout/footer', array('custom_item' => 0, 'custom_id' => 0));
?>