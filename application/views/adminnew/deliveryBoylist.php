<div class="content-wrapper">
  <section class="content-header">
    <h1> <img src="<?php echo base_url().'common_assets/images/deliveryboy.png';?>" style="width: 30px">DeliveryBoys<small></small></h1>
  </section>
  <section class="content">
    <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header col-md-6" style="float: left;">
          <h3 class="box-title"><a href="<?php echo base_url();?>adminnew/AddDeliveryboy" class="btn btn-primary">Add Delivery Boy</a></h3>
        </div>
        <div class="box-header col-md-6" style="float: right"></div>
        <div class="clearfix"></div>
        <div class="box-body table-responsive">
          <table id="customertable" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>S.no.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile_no</th>
                <th>Address</th>
                <th>Date</th>
                <th>Status</th>
                <th>Action</th>                
              </tr>
            </thead>
            <tbody>
              <?php $count = 1; 
                if(!empty($customer_data)){
                  foreach ($customer_data as $getdata){ 
              ?>
              <tr>
                <td><?php echo $count; ?></td>
                <td><?php  echo (!empty($getdata['name'])?$getdata['name']:'none'); ?></td>
                <td><?php  echo (!empty($getdata['email'])?$getdata['email']:'none'); ?></td>
                <td><?php  echo (!empty($getdata['mobile_no'])?$getdata['mobile_no']:'none'); ?></td>
                <td><?php  echo (!empty($getdata['address'])?$getdata['address']:'none'); ?></td>
                <td><?php  echo (!empty($getdata['create_date'])?$getdata['create_date']:'none'); ?></td>
                <td><?php if($getdata['status']==0){echo '<button type="button" class="btn btn-warning">Deactive</button>';}
                          if($getdata['status']==1){echo '<button type="button" class="btn btn-success">Active</button>';}
                      ?>
                </td>
                <td><a href="<?php echo base_url() ?>adminnew/AddDeliveryboy/<?php echo  $getdata['id']; ?>" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 

                  <?php if($getdata['status']==0){?>
                    <a href="javascript:void(0)" href-data="<?php echo  $getdata['id']; ?>" class="useractive" title="Change status"><i class="fa fa-toggle-off" aria-hidden="true"></i></a>

                  <?php } if($getdata['status']==1){?>
                    <a href="javascript:void(0)" href-data="<?php echo  $getdata['id']; ?>" class="deactive" title="Change status"><i class="fa fa-toggle-on" aria-hidden="true"></i></a>

                  <?php }?>
                    <a href="javascript:void(0)" href-data="<?php echo  $getdata['id']; ?>" class="delete" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                </td>
              </tr>

             <?php $count++; } } ?>  
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
    </div>
    </div>
  </section>
</div>
<script type="text/javascript">
  $(function () {

    $('#customertable').DataTable({

      "paging": true,

      "lengthChange": false,

      "searching": true,

      "ordering": true,

      "info": true,

      "autoWidth": false

    });
  });
  $(".delete").click(function(e){
    var val = confirm("Sure you want to Delete User ?");
    var id = $(this).attr("href-data");
    if(val){
      $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>adminnew/change_status",
        data:{tablename:'deliveryboys',id:id,status:3,whrcol:'id',whrstatuscol:'status',action:"Delete"},
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
  $(".deactive").click(function(e){
        var val = confirm("Sure you want to Deaactive user ?");
        //e.preventDefault(); 
        var id = $(this).attr("href-data");
        //alert(href);
        //var btn = this;
        if(val){
            $.ajax({
              type: "POST",
              url: "<?php echo base_url();?>adminnew/change_status",
              data:{tablename:'deliveryboys',id:id,status:0,whrcol:'id',whrstatuscol:'status',action:"Deactive"},
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
  $(".useractive").click(function(e){
    var val = confirm("Sure you want to active user ?");
    var id = $(this).attr("href-data");
    if(val){
      $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>adminnew/change_status",
        data:{tablename:'deliveryboys',id:id,status:1,whrcol:'id',whrstatuscol:'status',action:"Active"},
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