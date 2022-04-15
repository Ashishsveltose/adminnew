<?php //$this->load->view('adminnew/nav'); ?>



  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

    <?php 
   // echo '<pre>';print_r($product_data);die;
    if(!empty($product_data)) { 
      ?>
        <h1>Edit video</h1>
      <?php 
        }
        else
        {
      ?>
        <h1>Add video</h1>
      <?php 
        }
      ?>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>adminnew/dashboard"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class=""><a href="<?php echo base_url()?>adminnew/VendorsCtegorylist">VendorsCtegorylist</a></li>
      </ol>
    </section>



    <!-- Main content -->

    <section class="content">



      <!-- SELECT2 EXAMPLE -->

      <div class="box box-default">

        

        <!-- /.box-header -->

        <div class="box-body">

          <div class="row">

          <?php 

            if(isset($success) && !empty($success)){

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

              <?php 
            }
          ?>

          <form role="form" enctype="multipart/form-data" method="post" action="">
              <div class="col-md-6">
                  

                  <div class="form-group">
                    <label>Video Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo (!empty($product_data) && !empty($product_data['name']) ? $product_data['name'] : "" )?>" required>
                  </div>
                  
                  <?php 
                  if(!empty($product_data))
                  {
                  ?>
                    <div class="form-group">
                      <img src="<?php echo base_url()?>uploads/category/<?php echo (!empty($product_data['category_image']) ? $product_data['category_image'] : "default.png")?>">
                    </div>

                  <?php 
                  }
                  ?>
                  <div class="form-group">
                    <label>video</label>
                    <input type="file" class="form-control" name="category_image">
                  </div>

                  <!-- <div class="form-group">
                    <label>Product description</label>
                    <input type="text" class="form-control" name="description" value="">
                  </div> -->
                  
            </div>
            <div class="col-md-12 mt-5">
              <input type="hidden" name="id" value="<?php echo (!empty($product_data) && !empty($product_data['id']) ? $product_data['id'] : "" )?>">
               <button type="submit" name="submit"  class="btn btn-primary">Save</button>
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
  