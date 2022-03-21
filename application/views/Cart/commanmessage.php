<style>
    .tablemessageblock{

    }
    .tablemessageblock td{
        padding:10px;
    }

    .tablemessageblock_td{
        font-size: 15px;
        padding:10px;
        padding: 5px!important;
    }
    .tablemessageblock_td:first-child{
        border-bottom:  1px solid lightgray;
    }

</style>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card card-default ">
        <div class="card-heading change-color-gradiant" role="tab" id="headingOne" >
            <h4 class="card-title " style="font-size: 20px; margin: 7px 0px;  margin: 0; text-align: center; ">

                <table class='tablemessageblock' style="    display: inline-block">
                    <tr>
                        <td rowspan="5"> <i class="fa fa-truck fa-3x blink_me" ></i></td>

                    </tr>
                    <tr>
                        <td rowspan="5" class="blink_me">Delivery Charges:</td>

                    </tr>
                    <tr>
                        <td class="text-left tablemessageblock_td">Free Delivery In Tsim Sha Tsui</td>
                    </tr>
                    <tr>
                        <td class="text-left tablemessageblock_td">Free Delivery In Other Location (On Order value > $<?php echo SHPPING_MINVALUE_VIEW; ?>)</td>
                    </tr>
                    <tr>
                        <td class="text-left tablemessageblock_td">$<?php echo SHPPING_PRICE; ?> In Other Location ( On Order value < $<?php echo SHPPING_MINVALUE_VIEW; ?>)</td>
                    </tr>
                </table>

                <br/>

            </h4>
            <?php
            if(isset($showdeliverynote)){
            ?>
            <h4 class="text-center blink_me" >
                <hr/>
                {{globleCartData.nearpricenote}}
            </h4>
            <?php
            }
            ?>
        </div>
    </div>
</div>