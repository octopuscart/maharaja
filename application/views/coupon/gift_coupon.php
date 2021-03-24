<?php
$this->load->view('layout/header');
?>

<style>
    footer{
        position: inherit!important;
    }
    .checkbox-coupon{
        height: 28px;
        float: left;
        width: 20px;
        margin-top: 10px

    }
    .coupon-imgage-payment{
        float: left;
        width: 120px;
    }



</style>



<!-- Inner Page Banner Area Start Here -->
<section id="page-title" class="page-title-parallax page-title-center border-bottom" style="background-image: url('<?php echo base_url(); ?>assets/theme2/res/images/sections/wall2.jpg');   margin-top: -30px;    padding: 50px 0px;    background-position: -471px -230px;" data-center="" data-top-bottom="">
    <div class="container clearfix">
        <h1 class="font-secondary capitalize ls0 text-white" style="font-size: 62px;">Gift Coupon</h1>
    </div>
</section>
<!-- Inner Page Banner Area End Here -->


<section id="content" style="overflow: visible; margin-bottom: 192px!important;">
    <div class="content-wrap1 charity-block">
        <div class="section nomargin clearfix" style="padding: 10px 0; background: #fcb316;border-top:none;">
            <div class="container clearfix">

                <div class="row clearfix">
                    <div class="row clearfix" style="    width: fit-content;">


                        <div class='col-md-8'>
                            <img src="https://manager2.woodlandshk.com/assets/images/coupon100.jpg">
                        </div>
                        <div class='col-md-4'>
                            <div class="p-5rounded bg-white" style="  padding: 15px;">
                                <h3 class="font-secondary h1 color"></h3>

                                <div class=" mt-4 mt-lg-0" >
                                    <div class="form-result"></div>
                                    <form class="mb-0 row"  action="#" method="post" >
                                        <div class="form-process"></div>
                                        <div class="col-sm-6 mb-3">
                                            <input type="text" id="template-contactform-name" name="name" value="" class="form-control border-form-control required" placeholder="Name" required="">
                                        </div>
                                        <div class="col-sm-6 mb-3">
                                            <input type="text" id="template-contactform-phone" name="contact_no" value="" class="form-control border-form-control required" placeholder="Contact No." required="">
                                        </div>

                                        <div class="clear"></div>
                                        <div class="col-sm-12 mb-3">
                                            <input type="email" id="template-contactform-email" name="email" value="" class="required email form-control border-form-control" placeholder="Email Address" required="">
                                        </div>


                                        <div class="col-sm-12 mb-3">
                                            <p class="text-center">Choose Payment Method</p>
                                            <div class="col-md-6 pull-left">
                                                <label class="radio-inline">
                                                    <input type="radio"  name="payment_type" value="ALIPAY" class="checkbox-coupon  form-control border-form-control" checked=true required="">
                                                    <img src="<?php echo base_url(); ?>assets/paymentstatus/alipay.jpg" class="coupon-imgage-payment">
                                                </label>
                                            </div>

                                            <div class="col-md-6 pull-left">
                                                <label class="radio-inline">
                                                    <input type="radio"  name="payment_type" value="WECHAT" class="checkbox-coupon  form-control border-form-control"  checked=false required="">
                                                    <img src="<?php echo base_url(); ?>assets/paymentstatus/wechat.jpg" class="coupon-imgage-payment">
                                                </label>
                                            </div>
                                        </div>


                                        <div class="clear"></div>
                                        <div class="col-12 nobottommargin" style='    text-align: center;'>
                                            <button class="button button-circle button-large text-white ml-0 mt-3 colordarkgreen" type="submit" name="submit_now" value="submit">Buy Now</button>
                                        </div>
                                        <div class="clear"></div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Content -->

    <section style="overflow: visible;">


        <?php
        $this->load->view('layout/contactfooter');
        ?>
    </section>

    <?php
    $this->load->view('layout/footer');
    ?>