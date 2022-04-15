
<!DOCTYPE html>
<html lang="en">


<!-- tables-basic23:59-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Preclinic - Medical & Hospital - Bootstrap 4 Admin Template</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>home/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>home/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>home/assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
    <div class="main-wrapper">
       
<?php
include('header.php');

?>
      
        <?php
include('sidebar.php');
        ?>
      
        <div class="page-wrapper">
            <div class="content">
              
            <a href="https://ezheal.in/new_medical/unit" class="btn btn-primary float-right btn-rounded"><i class="fa fa-plus"></i> Add Unit</a>
            
                    <div class="col-lg-6">
                        <div class="card-box">
                            <div class="card-block">
                                <h4 class="card-title">Unit Tables</h4>
                                <div class="table-responsive">
                                <table id="categorytable" class="table table-bordered table-hover">
              <thead>
          <tr>
                  <th>S.no.</th>
                  <th>Name</th>
                  <th>Unit</th>
                   <th>Created Date</th> 
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
                      <td><?php  echo (!empty($getdata['unit'])?$getdata['unit']:'none'); ?></td>
                      <td><?php  echo (!empty($getdata['create_date'])?$getdata['create_date']:'none'); ?></td>
                     
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
