
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header"><h1>Contact <small>List</small></h1></section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <!--<div class="box-header col-md-6" style="float: left;">-->
          <!--  <h3 class="box-title">-->
          <!--      <a href="<?php echo base_url();?>adminnew/add_testimonial" class="btn btn-primary pull-right">Add New </a>-->
          <!--  </h3>-->
          <!--</div>-->
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
                  <th>Email</th>
                  <th>Contact No.</th>
                  <th>Message</th>
                  <!-- <th>Status</th> -->
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

                <?php $count = 1; 
                  if(!empty($contactlist)){
                    foreach ($contactlist as $getdata) { 
                  ?>
                    <tr>
                      <td><?php echo $count; ?></td>
                      <td><?php  echo (!empty($getdata['name'])?$getdata['name']:'none'); ?></td>
                      <td><?php  echo (!empty($getdata['email'])?$getdata['email']:'none'); ?></td>
                      <td><?php  echo (!empty($getdata['number'])?$getdata['number']:'none'); ?></td>
                      <td><?php  echo (!empty($getdata['message'])?$getdata['message']:'none'); ?></td>
                      <!--<td><?php  echo (!empty($getdata['create_date'])?$getdata['create_date']:'none'); ?></td>-->
                     
                    <td>
                        
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
    

    $('.btn_delete').click(function(){
        var val = confirm("Sure you want to Delete Contact ?");
        var id = $(this).attr("href-id");
        //alert(id);
        if(val!=""){
            $.ajax({
            type: 'POST',
            url:"<?php echo base_url()?>adminnew/deleterecord",
            data:{id:id,table:'contactus',colwhr:'id'},
            dataType: 'json',
            success : function(data){
                if (data.status == 1){
                    $.notify(data.msg, "success");
                    setTimeout(function(){location.reload()},1000);
                  }else{
                    $.notify(data.msg, "error");
                  }
            //     if (data.status == 1){
            //         //formSuccess();
            //         // submitMSG(true,'Success');
            //         setTimeout(function(){ window.location.reload(); },1000);
            //         $.notify({
            //             icon: 'ti-gift',
            //             message: data.msg
            //         },{type: 'success',timer: 1000});
            //     } else {
            //         $.notify({
            //             icon: 'ti-info-alt',
            //             message: data.msg
            //         },{type: 'danger',timer: 1000});                    
            //     }
             }
            // error: function(data) {
            //     $.notify({
            //             icon: 'ti-info-alt',
            //             message: data.msg
            //         },{type: 'danger',timer: 1000});
            // },

        });
        }
            
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
