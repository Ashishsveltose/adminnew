
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header"><h1>Testimonial <small>List</small></h1></section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header col-md-6" style="float: left;">
            <h3 class="box-title">
                <a href="<?php echo base_url();?>adminnew/add_testimonial" class="btn btn-primary pull-right">Add New </a>
            </h3>
          </div>
          <div class="box-header" style="float: right">
          </div>
          <div class="clearfix"></div>
          <!-- /.box-header -->
          <div class="box-body table-responsive">
            <table id="categorytable" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>S.no.</th>
                  <th>Name</th>
                  <th>Image</th>
                  <th>Description</th>
                  <!-- <th>Status</th> -->
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

                <?php $count = 1; 
                  if(!empty($area_data)){
                    foreach ($area_data as $getdata) { 
                  ?>
                    <tr>
                      <td><?php echo $count; ?></td>
                      <td><?php  echo (!empty($getdata['name'])?$getdata['name']:'none'); ?></td>
                      <td><?php  echo (!empty($getdata['image'])?$getdata['image']:'none'); ?></td>
                      <td><?php  echo (!empty($getdata['description'])?$getdata['description']:'none'); ?></td>
                      <!-- <td><?php if($getdata['status']==0){echo "Deactive";}
                                if($getdata['status']==1){echo "Active";}
                          ?>
                      </td> -->
                     <!--  <td>
                        <a href="<?php echo base_url() ?>adminnew/addarea/<?php echo  $getdata['area_id']; ?>" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 

                        <?php if($getdata['status']==0){?>
                          <a href="javascript:void(0)" href-data="<?php echo  $getdata['area_id']; ?>" class="activearea" title="Change status"><i class="fa fa-toggle-off" aria-hidden="true"></i></a>
                        <?php } if($getdata['status']==1){?>
                          <a href="javascript:void(0)" href-data="<?php echo  $getdata['area_id']; ?>" class="deactive" title="Change status"><i class="fa fa-toggle-on" aria-hidden="true"></i></a>
                        <?php }?>
                          <a href="javascript:void(0)" href-data="<?php echo  $getdata['area_id']; ?>" class="delete" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                      </td>  -->
                      <td>
                        &nbsp;
                        <a href="<?php echo base_url() ?>adminnew/add_testimonial/<?php echo $getdata['id']; ?>" title="Edit"><i class="fa   fa-pencil-square-o" aria-hidden="true"></i></a> 
                        &nbsp; 
                       <!--  &nbsp;
                        <a href="<?php echo base_url() ?>adminnew/add_testimonial/<?php echo $getdata['id']; ?>" title="Edit Brand"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 
                        &nbsp; -->
                        <!-- <?php if($ul['status'] == 1){ ?>
                              <a href="javascript:void(0)" href-status="0" href-role="2"  href-id="<?php echo $ul['id']?>" href-act="Disable" class="user_status" title="Disable User"><i class="fa fa-ban" aria-hidden="true"></i></a>
                              &nbsp;
                        <?php }else{ ?>
                              <a href="javascript:void(0)" href-status="1" href-role="2"  href-id="<?php echo $ul['id']?>" href-act="Enable" class="user_status"  title="Enable User"><i class="fa fa-check-square" aria-hidden="true"></i></a>
                              &nbsp;
                          <?php } ?>   -->

                          <!-- <a href="javascript:void(0)" href-status="3" href-role="2" href-id="<?php echo $getdata['id']?>" href-act="deleteRecord" class="btn_delete" title="Delete Testimonial"><i class="fa fa-trash-o" aria-hidden="true"></i></a> -->
                          <a href="javascript:void(0)" class="btn_delete" href-id="<?php echo $getdata['id']?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                      </td>
                    </tr>
                <?php $count++; 
                  }
                }
                ?>  
              </tbody>
            </table>
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
<!-- /.content-wrapper -->
<script type="text/javascript">

    $('.btn_delete').click(function(){
        var val = confirm("Sure you want to Delete ?");
        var id = $(this).attr("href-id");
        //alert(id);
        $.ajax({
            type: 'POST',
            url:"<?php echo base_url()?>adminnew/deleterecord",
            data:{id:id,table:'testimonial',colwhr:'id'},
            dataType: 'json',
            success : function(data){
              if (data.status == 1){
                $.notify(data.msg, "success");
                setTimeout(function(){location.reload()},1000);
              }else{
                $.notify(data.msg, "error");
              }
                // if (data.status == 1){
                //     //formSuccess();
                //     // submitMSG(true,'Success');
                //     setTimeout(function(){ window.location.reload(); },1000);
                //     $.notify({
                //         icon: 'ti-gift',
                //         message: data.msg
                //     },{type: 'success',timer: 1000});
                // } else {
                //     $.notify({
                //         icon: 'ti-info-alt',
                //         message: data.msg
                //     },{type: 'danger',timer: 1000});                    
                // }
            }
            // error: function(data) {
            //     $.notify({
            //             icon: 'ti-info-alt',
            //             message: data.msg
            //         },{type: 'danger',timer: 1000});
            // },

        });
    });
</script>
<!-- <script type="text/javascript">
  $(function () {

    $('#categorytable').DataTable({

      "paging": true,

      "lengthChange": false,

      "searching": true,

      "ordering": true,

      "info": true,

      "autoWidth": false

    });
  });
  $(".delete").click(function(e){
    var val = confirm("Sure you want to Delete Area ?");
    var id = $(this).attr("href-data");
    if(val){
      $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>adminnew/change_status",
        data:{tablename:'area',id:id,status:3,whrcol:'area_id',whrstatuscol:'status',action:"Delete"},
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
        var val = confirm("Sure you want to Deaactive Area ?");
        //e.preventDefault(); 
        var id = $(this).attr("href-data");
        //alert(href);
        //var btn = this;
        if(val){
            $.ajax({
              type: "POST",
              url: "<?php echo base_url();?>adminnew/change_status",
              data:{tablename:'area',id:id,status:0,whrcol:'area_id',whrstatuscol:'status',action:"Deactive"},
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
  $(".activearea").click(function(e){
    var val = confirm("Sure you want to active Area ?");
    var id = $(this).attr("href-data");
    if(val){
      $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>adminnew/change_status",
        data:{tablename:'area',id:id,status:1,whrcol:'area_id',whrstatuscol:'status',action:"Active"},
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
</script> -->
