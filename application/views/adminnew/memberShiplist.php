
<div class="content-wrapper">
<section class="content-header"><h1>MemberShip</h1></section>
    <section class="content">
<div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header col-md-6" style="float: left;">
            <h3 class="box-title">
                <a href="<?php echo base_url();?>adminnew/MemberShip" class="btn btn-primary pull-right">Add MemberShip</a>
            </h3>
            &nbsp;<a href="javascript:void(0)" href-id="" class="faq_delete_all" title="Delete" data_id=""><i class="fa fa-trash" aria-hidden="true"></i></a>&nbsp;&nbsp;Delete Selcted
          </div>
          <div class="box-header" style="float: right">
          </div>
          <div class="clearfix"></div>
          <!-- /.box-header -->
          <div class="box-body table-responsive">
            <div class="container">
               <table id="examples1" class="table table-striped table-condensed table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                    <thead>
                        <tr>
                           <th><input type="checkbox" id="all-check"></th>
                            <th style="width: 20px;">S.NO</th>
                            <td>Title</td>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Duration</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                           $count = 1; 
                          if(!empty($support)){
                            foreach ($support as $key => $value) {
                                ?>
                                    <tr>
                                      <td><input type="checkbox" name="chkboxshopid" class="check" id="<?php echo $value['id']; ?>" value="<?php echo $value['id']; ?>"></td>
                                        <td><?php echo $count++; ?></td>
                                          <td><a href="<?php echo base_url() ?>adminnew/MemberShip/<?php echo  $value['id']; ?>" title="Edit"><?php if(!empty($value['title'])){echo $value['title'];} ?></a></td>
                                          <td><a ><?php if(!empty($value['description'])){echo $value['description']; }?></a></td>
                                        <td><?php echo $value['price']; ?></td>
                                        <td><?php echo $value['duration']; ?></td>
                                        <td><?php echo $value['create_date']; ?></td>
                                    </tr>

                                <?php
                            }
                          }
                         ?>
                    </tbody>
                </table>
            </div>    
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    </section>
</div>
<script>
    /*$('.ubea-accordion-heading').on('click', function (event) {
        $(this).each(function(e,i){
            var value=$(this).attr("data_val");
             var $this = $(this);
             $("#icon_"+value).removeClass("fa fa-caret-down");
             $this.closest('.ubea-accordion').find('.ubea-accordion-content_'+value).slideToggle(400);
            if ($this.closest('.ubea-accordion').hasClass('active')) {
                $("#icon_"+value).addClass("fa fa-caret-up");
                $this.closest('.ubea-accordion').removeClass('active');
            } else {
                $("#icon_"+value).removeClass("fa fa-caret-up");
                $("#icon_"+value).addClass("fa fa-caret-down");
                $this.closest('.ubea-accordion').addClass('active');
            }
            event.preventDefault();
        });
    });*/
    $(function () {

    $('#examples1').DataTable({

      "paging": true,

      "lengthChange": false,

      "searching": true,

      "ordering": true,

      "info": true,

      "autoWidth": false

    });
  });
  $("#all-check").click(function () {
    $(".check").attr('checked', this.checked);
  });
  $(".faq_delete_all").click(function(){
      var queryArr = [];
      $("input:checkbox[name=chkboxshopid]:checked").each(function(){
          queryArr.push($(this).val());
      });
      if(confirm("Sure you want to delete MemberShip ?") && queryArr.length !== 0)
      {
         $.ajax({
            type: 'POST',
            url:"<?php echo base_url()?>adminnew/deleteAll",
            data:{table:'members',id:queryArr,colwhr:'id'},
            dataType: 'json',
            success : function(data){
                if (data.status == 1){
                    setTimeout(function(){ window.location.reload(); },1000);
                    $.notify(data.msg, "success");  
                }
            },
            error: function(data) {
                $.notify(data.msg, "error");
            },
          });
      }else{
         $.notify("Please select any one.", "error");
      }
  });
</script>