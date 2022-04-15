 <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

    <?php if(!empty($faq_data)) { 

      ?>

      <h1>Edit MemberShip</h1>

      <?php 

        }

        else

        {

      ?>

      <h1>Add MemberShip</h1>

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
                <label>Title</label>
                <input type="text" class="form-control" name="title" value="<?php echo (!empty($faq_data) && !empty($faq_data['title']) ? $faq_data['title'] : "" )?>" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control" name="description" value="<?php echo (!empty($faq_data) && !empty($faq_data['description']) ? $faq_data['description'] : "" )?>" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Price</label>
                <input type="number" class="form-control" name="price" value="<?php echo (!empty($faq_data) && !empty($faq_data['price']) ? $faq_data['price'] : "" )?>" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Duration</label>
                <input type="text" class="form-control" name="duration" value="<?php echo (!empty($faq_data) && !empty($faq_data['duration']) ? $faq_data['duration'] : "" )?>" required>
              </div>
            </div>
            <div class="col-md-12 mt-5">
              <input type="hidden" name="id" value="<?php echo (!empty($faq_data) && !empty($faq_data['id']) ? $faq_data['id'] : "" )?>">
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

  <script type="text/javascript">
    $('#shop_id').change(function(){
    var shop_id = $(this).val();    
    if(shop_id){
        $.ajax({
           type:"POST",
           url:"<?php echo base_url()?>adminnew/GetParentCategories",
           data:{shop_id:shop_id},
           success:function(res){               
            if(res){

                $("#parent_id").html(res);
           
            }else{
               $("#parent_id").empty();
            }
           }
        });
    }else{
        $("#parent_id").empty();
    }      
   });
  </script>