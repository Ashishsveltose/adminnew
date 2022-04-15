<style type="text/css">
  .fa-toggle-on{
    color: #00a65a;
    font-size: 24px;
  }
  .fa-toggle-off{
    font-size: 24px;
  }
  .btn-secondary {
    background-color: #124b56!important;
  }
  .btn-secondary:hover {
    background-color: #124b56 !important;
  }
  .btn-secondary:not([disabled]):not(.disabled).active, .btn-secondary:not([disabled]):not(.disabled):active, .show>.btn-secondary.dropdown-toggle{
      background-color: #124b56 !important;
  }
</style>

<style type="text/css">
  .cont{
    margin-top: 13px;
      margin-bottom: 13px;
    background-color: #fff;
    box-sizing: border-box;
    box-shadow: 3px 9px 20px 1px #aaaaaa;
    padding: 18px 10px 10px 10px;
  }
  .img{
    width: 48px;
    height: 75px;
  }
  .ptitle{
    font-weight: 600;
    font-size: 14px;
  }
  .vartitle{
    font-size: 12px;
      font-weight: 400;
  }
  .returntext{
    font-size: 12px;
      font-weight: 400;
  }
  .returntxtdiv{
    margin-top: 10px;
      
  }
  .deliverydate{
    line-height: 10px;
  }
  ._30ud5x._3ELbo9 {
      background-color: #26a541;
      border: 2px solid #26a541;
  }
  ._30ud5x {
      height: 10px;
      width: 10px;
      border-radius: 50%;
      background-color: none;
      border: 2px solid #26a541;
      display: inline-block;
      margin-right: 8px;
  }
</style>
<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <!-- /.box -->
        <?php $msg = "status changed"; ?>
        <div class="box">
          <div class="box-body">
            <div class="row">
              <div class="col-xs-12">
                <h3 class="box-title" style="padding-bottom: 10px;color: #005551"><i class="fa fa-shopping-cart" ></i> Admin Commissions </h3>
                <!-- <div class="col-lg-3 col-md-6">
                  <div class="col-xs-12">
                      <a href="<?= base_url('adminnew/neworders') ?>">
                        <div><span class="btn btn-warning"> New Orders  <?php echo $pd =  $this->Common_model->getRecordCount('orders',array('status'=>1,'delivery_status'=>1)); ?><span></div>
                      </a>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="col-xs-12">
                    <a href="<?= base_url('adminnew/ordershistory') ?>">
                      <div><span class="btn btn-success">Complete Orders<?php echo $pd =  $this->Common_model->getRecordCount('orders',array('status'=>1,'delivery_status'=>4));?></span>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="col-xs-12">
                    <a href="<?= base_url('adminnew/cancelorders') ?>">
                      <div><span class="btn btn-danger">Cancel Orders! <?php echo $pd =  $this->Common_model->getRecordCount('orders',array('status'=>1,'delivery_status'=>5));?></span></div>
                    </a>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="col-xs-12">
                      <a href="<?= base_url('adminnew/ordershistory') ?>">
                        <div><span class="btn btn-success">Refunded Orders<?php echo $pd =  $this->Common_model->getRecordCount('orders',array('status'=>1,'delivery_status'=>6));?></span>
                        </div>
                      </a>
                    </div>
                </div> -->
              </div>
            </div>
            <br>


            <div class="clearfix"></div>
              <section class="main-container col1-layout main-container-small" >
                <!-- <div class="main container"> -->
                  <div class="col-main" style="padding-top:10px;padding-bottom: 10px;">
                      <?php if(isset($orders) && !empty($orders)){ ?>
                          <?php foreach($orders as $ordersarray){ ?>

                              <div class="row cont">
                                 <div class="col-md-12 ">
                                  
                                    <h4 style="font-weight: 600"><a href="<?php echo base_url().'adminnew/invoice?invoice='.base64_encode($ordersarray['id']); ?>"> <?php echo $ordersarray['invoice_no'];?>
                                      <div class="deliverydate" style="float: right;"></a>
                                        <div class="_30ud5x _3ELbo9"></div>
                                        <span class="ptitle"><?php echo (isset($ordersarray['delivery_status_name']) && !empty($ordersarray['delivery_status_name']) ? $ordersarray['delivery_status_name'] : ''); ?></span>
                                      </div>
                                    </h4>
                                    <?php 
                                        // $spdata = json_decode($ordersarray['prduct_details'],true);
                                        $spdata = $product= $this->Common_model->getWhereData("order_products",array('order_id'=>$ordersarray['id']));
                                        $subtotal = array();
                                        $s = 1;
                                      ?>
                                        <?php if(isset($spdata) && !empty($spdata)){ 
                                                $pi = 0;
                                        ?>
                                        <?php 
                                        foreach($spdata as $key=>$spdataarray){ 
                                            $product = $this->Common_model->getSingleRecordById("product",array('product_id'=>$spdataarray['product_id']));
                                            $shop_reg_id = $this->Common_model->getWhereDataByCol("shops",array('shop_id'=>$product['shop_id']),"shop_reg_id");

                                            if(isset($spdataarray['variations']) && !empty($spdataarray['variations'])){
                                              $product_variation = json_decode($spdataarray['variations'],true);

                                              $checkproductReviewrating = $this->Common_model->GetWhere('productreviewrating', array('user_id'=>customersessionid(),'order_id'=>$ordersarray['id'],'product_id'=>$spdataarray['product_id']));
                                            }
                                            // print_r($product_variation);
                                        ?>
                                          <div class="row">
                                            <div class="col-md-2">
                                              <img class="img" src="<?php echo base_url()?>uploads/product_images/<?php echo $spdataarray['main_image'];?>" class="img-responsive"  >
                                            </div>
                                            <div class="col-md-4">
                                              <h4 class="">Product Name</h4>
                                              <h4 class="ptitle"><?php echo $spdataarray['product_name']; ?></h4>
                                              <?php if(isset($spdataarray['color']) && !empty($spdataarray['color'])){?>
                                                        <p class="vartitle"><span class=""></span> <span><?php echo " COLOR : ".getcolornamebyid($spdataarray['color']); ?></span></p>
                                                  <?php }?>
                                              <!-- <p class="vartitle">Generic</p> -->
                                              <?php if(isset($product_variation) && !empty($product_variation)){ 
                                                          foreach($product_variation as $kv=>$product_variation_array){
                                                            foreach($product_variation_array as $kv2=>$product_variation_array2)
                                                    ?>
                                                  <p><span class="pr-4 d-block vartitle"></span> <span><?php echo $kv2 ." : ".$product_variation_array2; ?></span></p>
                                              <?php } } ?>
                                            </div>
                                            
                                            <div class="col-md-2">
                                              <h4 class="">Shop Id : <?php echo $shop_reg_id; ?></h4>
                                            </div>
                                            <div class="col-md-2">
                                              <h4 class="">Amount</h4>
                                              <p>₹: <?php echo $spdataarray['subtotal_price']; ?></p>
                                              <p>
                                              <p>Admin Comission : ₹: <?php echo (isset($spdataarray['admincommission']) ? $spdataarray['admincommission'] : 0.00); ?></p>
                                              <p>Shop Amount :   ₹: <?php echo (isset($spdataarray['shopamount']) ? $spdataarray['shopamount'] : 0.00); ?></p>
                                            </div>
                                            
                                          </div>
                                          <?php if(count($spdata) > 1){ ?>
                                            <hr>
                                          <?php } ?>
                                      <?php } } ?>
                                  
                                 </div>
                              </div>
                      <?php } } ?>
                    <!-- <div class="row cont">
                         <div class="col-md-12 ">
                          <div class="row">
                            <div class="col-md-2">
                              <img class="img" src="<?php echo base_url();?>front_assets/images/1.jpg" class="img-responsive"  >
                            </div>
                            <div class="col-md-4">
                              <h4 class="ptitle">Book for New Idea</h4>
                              <p class="vartitle">Generic</p>
                            </div>
                            <div class="col-md-2">
                              ₹:324
                            </div>
                            <div class="col-md-4">
                              <div class="deliverydate">
                                <div class="_30ud5x _3ELbo9"></div>
                                <span class="ptitle">Delivered on Jul 14</span>
                              </div>
                              <div class="returntxtdiv"><span class="returntext">Return policy ended on Jul 21</span></div>
                              <div class="returntxtdiv"> <img src="<?php echo base_url().'front_assets/images/ratingstar.svg';?>"><a href="#"> Rate & Review Product</a></div>
                              
                              
                            </div>
                          </div>
                         </div>
                    </div> -->
                <!-- </div> -->
                </div>
              </section>

          
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<script type="text/javascript">
  $(function () {

    $('#examples1').DataTable({

      "paging": false,

      "lengthChange": false,

      "searching": true,

      "ordering": true,

      "info": true,

      "autoWidth": false

    });
  });
  $(".delete").click(function(e){
    var val = confirm("Sure you want to Delete Product ?");
    var id = $(this).attr("href-id");
    if(val){
      $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>adminnew/change_status",
        data:{tablename:'product',id:id,status:3,whrcol:'product_id',whrstatuscol:'status',action:"Delete"},
        dataType:'json',
        success: function(response) {
          if (response.status == 1){
            $.notify(response.msg, "success");
            setTimeout(function(){location.reload()},1000);
          }else{
            $.notify(response.msg, "error");
          }
        }
      });
    }
  });

  $(".change_payment_status").click(function(e){
    var val = confirm("Sure you want to change payment status ?");
    var id = $(this).attr("href-id");
    var status = $(this).attr("href-status");
    if(val){
      $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>adminnew/change_status",
        data:{tablename:'orders',id:id,status:status,whrcol:'id',whrstatuscol:'payment_status',action:status},
        dataType:'json',
        success: function(response) {
          if (response.status == 1){
            $.notify(response.msg, "success");
            setTimeout(function(){location.reload()},1000);
          }else{
            $.notify(response.msg, "error");
          }
        }
      });
    }
  });
</script>