<?php //$this->load->view('adminnew/nav'); ?>



  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

    <?php if(!empty($city_data)) { 

      ?>

      <h1>Edit Users</h1>

      <?php 

        }

        else

        {

      ?>

      <h1>Add Users</h1>

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
                echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-close"></i></button><h4><i class="fa fa-spinner fa-spin"></i>'.$success.'</h4></div>';
              echo '<meta http-equiv="refresh" content="2;url='.base_url('adminnew/citylist').'">';
              ?>
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
                <label> Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo (!empty($city_data) && !empty($city_data['name']) ? $city_data['name'] : "" )?>" required>
              </div>
              <div class="form-group">
                  <label>Email-ID</label>
                  <input type="email" class="form-control" name="email" value="<?php echo (!empty($customer_data) && !empty($customer_data['email']) ? $customer_data['email'] : "" )?>" required>
                  <?php if(isset($error_email) && !empty($error_email)){echo "<span class='error'>$error_email</span>";}?>
                </div>
            </div>
             <div class="col-md-6">
              <div class="form-group">
                <label>Pincode</label>
                <input type="text" class="form-control" name="area_zipcode" value="<?php echo (!empty($area_data) && !empty($area_data['area_zipcode']) ? $area_data['area_zipcode'] : "" )?>" required>
              </div>
              
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                
            </div> 
            <div class="col-md-12 mt-5">
              <input type="hidden" name="id" value="<?php echo (!empty($city_data) && !empty($city_data['id']) ? $city_data['id'] : "" )?>">
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