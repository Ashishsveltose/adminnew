  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
<style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
  .row.content {min-height: 550px}
  
  /* Set gray background color and 100% height */
  .sidenav {
    background-color: #f1f1f1;
    height: 100%;
  }
      
  /* On small screens, set height to 'auto' for the grid */
  @media screen and (max-width: 767px) {
    .row.content {height: auto;} 
  }

  /*dashbord css*/
  
  .dashboard-widget {
      /*background: #fff;*/
      padding: 20px 15px;
      border-radius: 5px;
      box-shadow: 0 5px 10px rgba(0,0,0,0.02);
      transition: all 0.3s;
      -webkit-transition: all 0.3s;
  }
  .c-pointer {
      cursor: pointer;
  }
  .dashboard-widget a, .dashboard-widget a:hover {
      color: #fff;
  }
  .d-block {
    display: block!important;
  }
  .dashboard-widget i {
    width: 44px;
    height: 44px;
    line-height: 46px;
    background: rgba(255, 255, 255, .3);
    border-radius: 50%;
    font-size: 16px;
    margin-bottom: 15px;
    color: #fff;
  }
  .fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
  }
  .dashboard-widget .title {
      font-size: 15px;
      font-weight: 700;
  }
  .d-block {
      display: block!important;
  }
  .text-center {
      text-align: center!important;
  }
  .fltn{
    float: none !important;
  }
  .page-title {
      position: relative;
  }
  .btn-secondary {
    background-color: #124b56!important;
  }
  .btn-secondary:hover {
    background-color: #124b56 !important;
  }
  .btn-secondary:not([disabled]):not(.disabled).active, .btn-secondary:not([disabled]):not(.disabled):active, .show>.btn-secondary.dropdown-toggle {
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
    <div class="col-sm-12 col-lg-12">
      <div class="page-title">
        <div class="row">
          <h3 style="font-weight: 600">Support history</h3 style="font-weight: 600">
            <div class="col-md-12">
                <!-- <a href="<?php echo base_url().'shop/addproduct'?>" class="btn btn-success pull-right" >Add New</a> -->
                <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary pull-right" style="background-color: #124b56!important;" data-toggle="modal" data-target="#basicExampleModall">
                Add New 
              </button>

              <!-- Modal -->
              <div class="modal fade" id="basicExampleModall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-md" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="basicExampleModalalLabell" style="padding-bottom: 10px;">&nbsp &nbsp <label>Message</label></h5>
                      
                    </div>
                      <form action="" method="post" id="support_message_formm"  enctype="multipart/form-data">
                        <div class="modal-body">
                          <div class="col-md-12">
                            <textarea rows="3" cols="100" name="query" id="query" type="text" placeholder="Enter your query here..." class="form-control input-lg" required/></textarea> 
                          </div>  
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-info" data-dismiss="modal" style="margin: 10px;">Close</button>
                          <button type="button" class="btn btn-primary" style="background-color: #124b56!important; margin-right: 20px;" name="support_messagee" id="support_messagee" value="support_messagee">Submit</button>
                        </div>
                      </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
      <!-- dashboard box start -->
      <div class="row" style="background-color: #fff;border-radius: 0.25rem;margin-top: 10px">
        <div class="table-responsive">          
          <table class="table">
            <thead>
              <tr>
                <th>Ticket Id</th>
                <th>message</th>
                <th>Status</th>
                <th>Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php if(isset($support) && !empty($support)){ ?>
              <?php foreach($support as $supportarray){ ?>
                <tr>
                  <td><?php echo (isset($supportarray['ticket_reg_id']) && !empty($supportarray['ticket_reg_id']) ? $supportarray['ticket_reg_id'] : ''); ?></td>
                  <!-- <td><?php echo $supportarray['user_id']; ?></td> -->
                  <td><?php echo (isset($supportarray['query']) && !empty($supportarray['query']) ? $supportarray['query'] : '');?></td>
                  <!-- <td>
                    <?php 
                    if(isset($supportarray['status']) && $supportarray['status'] == 3){
                    ?>
                      <button type="button" class="btn btn-info"><?php echo (isset($supportarray['status']) && !empty($supportarray['status']) ? $supportarray['status'] : '');?></button>
                    <?php } ?>
                    <?php 
                    if(isset($supportarray['status']) && $supportarray['status'] == 1){
                    ?>
                      <button type="button" class="btn btn-success"><?php echo (isset($supportarray['status']) && !empty($supportarray['status']) ? $supportarray['status'] : '');?></button>
                    <?php } ?>
                  </td> -->
                  <td><?php if($supportarray['status']==0){echo '<button type="button" class="btn btn-warning">Close</button>';}
                          if($supportarray['status']==1){echo '<button type="button" class="btn btn-success">Open</button>';}
                      ?>
                  </td>
                  <td><?php echo (isset($supportarray['create_date']) && !empty($supportarray['create_date']) ? dateformatedmy($supportarray['create_date']) : ''); ?></td>
                  <!-- <td><?php echo (isset($supportarray['ticket_reg_id']) && !empty($supportarray['ticket_reg_id']) ? $supportarray['ticket_reg_id'] : '');?></td> -->
                  <td>
                    <div class="dropdown show">
                      <a class="btn btn-secondary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding: 8px 8px">
                        <i class="fa fa-ellipsis-v"></i>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo base_url().'deliveryboy/support?ticket_id='.base64_encode($supportarray['ticket_id']); ?>">chat</a>
                        <!-- <a class="dropdown-item" href="javascript:void(0)" href-id="<?php echo $supportarray['ticket_id']?>">Delete</a> -->
                      </div>
                    </div>
                  </td>
                  
                </tr>
            <?php } }  ?>
            </tbody>
          </table>
        </div>
      </div>
      <!-- dashboard box End -->
    </div>
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
  // $(".delete").click(function(e){
  //   var val = confirm("Sure you want to Delete Product ?");
  //   var id = $(this).attr("href-id");
  //   if(val){
  //     $.ajax({
  //       type: "POST",
  //       url: "<?php echo base_url();?>shop/change_status",
  //       data:{tablename:'product',id:id,status:3,whrcol:'product_id',whrstatuscol:'status',action:"Delete"},
  //       dataType:'json',
  //       success: function(response) {
  //         if (response.status == 1){
  //           $.notify(response.msg, "success");
  //           setTimeout(function(){location.reload()},1000);
  //         }else{
  //           $.notify(response.msg, "error");
  //         }
  //       }
  //     });
  //   }
  // });

  $(".pulish_status").click(function(e){
        var val = confirm("Sure you want to Publised Product ?");
        var id = $(this).attr("href-id");
        if(val){
          $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>deliveryboy/change_status",
            data:{tablename:'product',id:id,status:1,whrcol:'product_id',whrstatuscol:'status',action:"Publised"},
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
    $(".un_pulish_status").click(function(e){
        var val = confirm("Sure you want to Un Publised Product ?");
        var id = $(this).attr("href-id");
        if(val){
          $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>deliveryboy/change_status",
            data:{tablename:'product',id:id,status:0,whrcol:'product_id',whrstatuscol:'status',action:"Un Publised"},
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

    $(".featured_status").click(function(e){
        var val = confirm("Sure you want to Featured Product ?");
        var id = $(this).attr("href-id");
        if(val){
          $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>deliveryboy/change_status",
            data:{tablename:'product',id:id,status:1,whrcol:'product_id',whrstatuscol:'featured_status',action:"Featured"},
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

    $(".un_featured_status").click(function(e){
        var val = confirm("Sure you want to Un Featured Product ?");
        var id = $(this).attr("href-id");
        if(val){
          $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>deliveryboy/change_status",
            data:{tablename:'product',id:id,status:0,whrcol:'product_id',whrstatuscol:'featured_status',action:"Featured"},
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