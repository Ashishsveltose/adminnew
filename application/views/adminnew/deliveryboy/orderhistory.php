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
<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <!-- /.box -->
        <?php $msg = "status changed"?>
        <div class="box">
          <div class="box-body">
            <div class="table-responsive">
              <h3 class="box-title" style="padding-bottom: 10px;"><i class="fa fa-question-circle"></i> All Orders</h3>
                <!-- <div class="row">
                    <form >
                        <div class="col-md-12" style="margin-bottom: 16px;">
                            <div class="col-md-12">
                                <a href="<?php echo base_url().'shop/addproduct'?>" class="btn btn-success pull-right" >Add Product</a>
                            </div>
                        </div>
                    </form>
                </div> -->
                <table id="examples1" class="table table-striped table-condensed table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                    <thead>
                        <tr>
                            <th>Invoice Id</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Delivery Status</th>
                            <th>Payment Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php if(isset($orders) && !empty($orders)){ ?>
                      <?php foreach($orders as $ordersarray){ ?>
                        <tr>
                          <td><a href="javasript:void(0)" style="color: #124b56;font-weight: 600;"><?php echo (isset($ordersarray['invoice_no']) && !empty($ordersarray['invoice_no']) ? $ordersarray['invoice_no'] : ''); ?></a></td>
                          <td><?php echo (isset($ordersarray['create_date']) && !empty($ordersarray['create_date']) ? $ordersarray['create_date'] : ''); ?></td>
                          <td><?php echo $ordersarray['grand_total']; ?></td>
                          <td><?php echo (isset($ordersarray['delivery_status']) && !empty($ordersarray['delivery_status']) ? $ordersarray['delivery_status'] : ''); ?></td>
                          <td><?php echo (isset($ordersarray['payment_status']) && !empty($ordersarray['payment_status']) ? $ordersarray['payment_status'] : ''); ?></td>
                          <td>
                            <div class="dropdown">
                              <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">Select Action
                              <span class="caret"></span></button>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo base_url().'deliveryboy/invoice?invoice='.base64_encode($ordersarray['id']); ?>">view</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Delete</a>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                      <?php } }  ?>
                    </tbody>
                </table>
                <div class="pagination col-sm-12 text-right"><p><?php echo $links;?></p></div>
          </div>
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
  $(".delete").click(function(e){
    var val = confirm("Sure you want to Delete Product ?");
    var id = $(this).attr("href-id");
    if(val){
      $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>shop/change_status",
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
</script>