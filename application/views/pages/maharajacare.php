<?php
$this->load->view('layout/header');
?>


<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb-area">
                    <h1>Maharaja Care</h1>
                    <ul>
                        <li><a href="#">Home</a> /</li>
                        <li>Care</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->
<!-- Contact Us Page Area Start Here -->
<div class="contact-us-page-area" style="padding: 10px;">
    <div class="container">
        <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="">
                <div class="col-md-6">
                    <img src="<?php echo base_url(); ?>assets/images/maharajacare.png" style="height: 200px">
                   
                </div>
                <div class="col-md-6">
                     <p style="font-size: 18px;line-height: initial;">
                        An unique  and exclusive health care consultation services offered by the best in town health centers located in Mongkok and Causeway bay.
                        Providing VIP(Maharaja) services to all our customers at an exceptionally best prices. Health Packages vary from Basic, intermediate, targeted and premium. 
                    </p>
                      <hr/>
                    <h3><a href="https://wa.me/85261428189" target="_blank"><i class="fa fa-whatsapp"></i> +(852) 6142 8189</a></h3>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <a href="https://bit.ly/3AXYrcW" target="_blank" name="sendmessage" value="sendmessage" class="btn-send-message">Book Now</a>
                        </div>
                    </div>
                   
                </div>  
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="">
                <div class="contact-us-left" > 
                    <!--<img src="<?php echo base_url(); ?>assets/images/maharajacareleaflate.jpeg">\-->
                    <iframe src="<?php echo base_url(); ?>assets/block/Health-Plans-JUNE2022.pdf" width="100%" height="800px"></iframe>

                </div>
            </div>
         
        </div>


    </div>
</div>
<!-- Contact Us Page Area End Here -->






<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/productController.js"></script>


<?php
$this->load->view('layout/footer');
?>