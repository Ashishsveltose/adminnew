<style type="text/css">
  .fa-toggle-on{
    color: #00a65a;
    font-size: 24px;
  }
  .fa-toggle-off{
    font-size: 24px;
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
              <h3 class="box-title" style="padding-bottom: 10px;"><i class="fa fa-question-circle"></i> All Tickets</h3>
                <div class="row">
                    <form >
                        <!-- <div class="col-md-12" style="margin-bottom: 16px;">
                            <div class="col-md-12">
                                <a href="<?php echo base_url().'shop/addproduct'?>" class="btn btn-success pull-right" >Add Product</a>
                            </div>
                        </div> -->
                    </form>
                </div>
                <table id="examples1" class="table table-striped table-condensed table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                    <thead>
                      <tr>
                        <th>Ticket Id</th>
                        <th>message</th>
                        <th>Status</th>
                        <th>Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php if(isset($support) && !empty($support)){ ?>
                      <?php foreach($support as $supportarray){ ?>
                        <tr>
                          <td><?php echo (isset($supportarray['ticket_id']) && !empty($supportarray['ticket_id']) ? $supportarray['ticket_id'] : ''); ?></td>
                          <!-- <td><?php echo $supportarray['user_id']; ?></td> -->
                          <td><?php echo (isset($supportarray['query']) && !empty($supportarray['query']) ? $supportarray['query'] : '');?></td>
                          <td><?php if($supportarray['status']==0){echo "Close";}
                                if($supportarray['status']==1){echo "Open";}
                              ?>
                          </td>
                          <!-- <td><?php echo (isset($supportarray['create_date']) && !empty($supportarray['create_date']) ? $supportarray['create_date'] : ''); ?></td> -->
                          <!-- <td><?php echo (isset($supportarray['ticket_reg_id']) && !empty($supportarray['ticket_reg_id']) ? $supportarray['ticket_reg_id'] : '');?></td> -->
                          <td>
                            
                            <a class="dropdown-item" href="<?php echo base_url().'adminnew/shop_chat?ticket_id='.base64_encode($supportarray['ticket_id']); ?>" title="view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            <?php if($supportarray['status']==0){?>
                            <a href="javascript:void(0)" href-data="<?php echo  $supportarray['ticket_id']; ?>" class="activearea" title="Change status"><i class="fa fa-toggle-off" aria-hidden="true"></i></a>
                            <?php } if($supportarray['status']==1){?>
                            <a href="javascript:void(0)" href-data="<?php echo  $supportarray['ticket_id']; ?>" class="deactive" title="Change status"><i class="fa fa-toggle-on" aria-hidden="true"></i></a>
                            <?php }?>
                            <a href="javascript:void(0)" href-id="<?php echo  $supportarray['ticket_reg_id']; ?>" class="ticket_delete" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
  $('.ticket_delete').click(function(){
        var val = confirm("Sure you want to Delete ?");
        var id = $(this).attr("href-id");
        // alert(id);
        $.ajax({
            type: 'POST',
            url:"<?php echo base_url()?>adminnew/deleteRecord",
            data:{id:id,table:'support_ticket',colwhr:'ticket_reg_id'},
            dataType: 'json',
            success : function(data){
                if (data.status == 1){
                    //formSuccess();
                    // submitMSG(true,'Success');
                    setTimeout(function(){ window.location.reload(); },1000);
                    $.notify({
                        icon: 'ti-gift',
                        message: data.msg
                    },{type: 'success',timer: 1000});
                } else {
                    $.notify({
                        icon: 'ti-info-alt',
                        message: data.msg
                    },{type: 'danger',timer: 1000});                    
                }
            },
            error: function(data) {
                $.notify({
                        icon: 'ti-info-alt',
                        message: data.msg
                    },{type: 'danger',timer: 1000});
            },

        });
    });
  
  $(".deactive").click(function(e){
        var val = confirm("Sure you want to Deaactive ?");
        //e.preventDefault(); 
        var id = $(this).attr("href-data");
        //alert(href);
        //var btn = this;
        if(val){
            $.ajax({
              type: "POST",
              url: "<?php echo base_url();?>adminnew/change_status",
              data:{tablename:'support_ticket',id:id,status:0,whrcol:'ticket_id',whrstatuscol:'status',action:"Deactive"},
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
    var val = confirm("Sure you want to active ?");
    var id = $(this).attr("href-data");
    if(val){
      $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>adminnew/change_status",
        data:{tablename:'support_ticket',id:id,status:1,whrcol:'ticket_id',whrstatuscol:'status',action:"Active"},
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