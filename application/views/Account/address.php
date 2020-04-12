<?php
$this->load->view('layout/header');
?>


<style>
    .cartbutton{
        width: 100%;
        padding: 6px;
        color: #fff!important;
    }
    .noti-check1{
        background: #f5f5f5;
        padding: 25px 30px;
       
        font-weight: 600;
        margin-bottom: 30px;
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

    

    .cartdetail_small {
        float: left;
        width: 203px;
    }

</style>

<div class="inner-page-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb-area">
                    <h1>My Addresses</h1>
                    <ul>
                        <li><a href="#">Home</a> /</li>
                        <li>Account</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Content -->
<div id="content"  class="my-account-page-area"> 

    <!-- Blog -->
    <section class="new-main blog-posts ">
        <div class="container"> 

            <!-- News Post -->
            <div class="news-post">
                <div class="row"> 

                    <?php
                    $this->load->view('Account/sidebar');
                    ?>


                    <div class="col-md-9" style="margin-top:20px">
                        <!-- Address Details -->
                        <div class="col-md-12">
                            <div class="">
                                <h6>Addresses <button class="btn btn-small btn-primary" data-toggle="modal" data-target="#changeAddress" style="margin-left: 20px;padding: 5px 11px;color:white;"><i class="fa fa-plus"></i> Add New</button></h6>
                            </div>
                            <div class="noti-check1" style="#f5f5f5">  
                                <div class="row">
                                   <?php
                                    if (count($user_address_details)) {
                                        ?>
                                        <?php
                                        foreach ($user_address_details as $key => $value) {
                                            ?>
                                            <div class="col-md-12">
                                                <?php if ($value['status'] == 'default') { ?> 
                                                    <div class="checkcart <?php echo $value['status']; ?> ">
                                                        <i class="fa fa-check fa-2x"></i>
                                                    </div>
                                                <?php } ?> 
                                                <div class=" address_block <?php echo $value['status']; ?> ">
                                                    <p>
                                                        <?php echo $value['address1']; ?>,<br/>
                                                        <?php echo $value['address2']; ?>,<br/>
                                                        <?php echo $value['city']; ?>
                                                    </p>
                                                    <?php if ($value['status'] != 'default') { ?> 
                                                        <a href="<?php echo site_url("Account/address/?setAddress=" . $value['id']); ?>" class="btn btn-default btn-small address_button">Set As Default</a>
                                                    <?php } ?> 
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    } else {
                                        ?>
                                        <h4><i class="fa fa-warning"></i> Please Add Shipping Address</h4>

                                        <?php
                                    }
                                    ?>
                                </div>                            

                            </div>
                        </div>
                    </div>



                </div>
                </section>
            </div>
            <!-- End Content --> 


            <!-- Modal -->
            <div class="modal  fade" id="changeAddress" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="    z-index: 20000000;">
                <div class="modal-dialog modal-sm woocommerce" role="document">
                    <form action="#" method="post">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel" style="font-size: 15px">Add Address</h4>
                            </div>
                            <div class="modal-body checkout-form">

                                <table class="table">
                                    <tbody>
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

           

            <?php
            $this->load->view('layout/footer');
            ?>
 <script>
            $(function(){
                $(".woocommerce-MyAccount-navigation-link--dashboard").removeClass("active");
                $(".address_page").addClass("active");
            })
            </script>