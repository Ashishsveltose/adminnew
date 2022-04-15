<?php //$this->load->view('adminnew/nav'); ?>



  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

    <?php if($gst_data) { 

      ?>

      <h1>Edit GST</h1>

      <?php 

        }

        else

        {

      ?>

      <h1>Add GST</h1>

      <?php 

        }

      ?>

    </section>



    <!-- Main content -->

    <section class="content">



      <!-- SELECT2 EXAMPLE -->

      <div class="box box-default">

        

        <!-- /.box-header -->

        <div class="box-body">

          <div class="row">

          <?php 

            if(isset($success) && !empty($success))

            {

              ?>

              <div class="alert alert-success" align="center">

              <strong><?php echo $success; ?></strong>

              </div>
            <?php   
            }
            if(isset($error) && !empty($error)){
            ?>
              <div class="alert alert-danger" align="center">
                <strong><?php echo $error; ?></strong>
                </div>
            <?php } ?>
          <form role="form" enctype="multipart/form-data" method="post" action="">
            <div class="col-md-6">
              <div class="form-group">
                <label>GST </label>
                <!--<input type="hidden" name="gst_id" value="<?php echo (isset($gst_data['gst_id']) && !empty($gst_data['gst_id']) ? $gst_data['gst_id'] : '' )?>">-->
                <input type="text" class="form-control" name="amount" value="<?php echo (!empty($gst_data) && !empty($gst_data['amount']) ? $gst_data['amount'] : "" )?>" required>
              </div>
            </div>
            <div class="col-md-12 mt-5">
              <input type="hidden" name="gst_id" value="<?php echo (!empty($gst_data) && !empty($gst_data['gst_id']) ? $gst_data['gst_id'] : "" )?>">
               <button type="submit" name="submit"  class="btn btn-primary">Save</button>
                      <!-- <button type="reset" class="btn btn-primary">Reset</button> -->
            </div>
          </form>

          <!-- /.col -->

          </div>

          <!-- /.row -->

        </div>

        <!-- /.box-body -->

      </div>

      <!-- /.box -->





    </section>

    <!-- /.content -->

  </div>

//   <script type="text/javascript">
//     $('#shop_id').change(function(){
//     var shop_id = $(this).val();    
//     if(shop_id){
//         $.ajax({
//           type:"POST",
//           url:"<?php echo base_url()?>adminnew/GetParentCategories",
//           data:{shop_id:shop_id},
//           success:function(res){               
//             if(res){

//                 $("#parent_id").html(res);
           
//             }else{
//               $("#parent_id").empty();
//             }
//           }
//         });
//     }else{
//         $("#parent_id").empty();
//     }      
//   });
//   </script>