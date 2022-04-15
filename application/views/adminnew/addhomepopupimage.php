<?php //$this->load->view('adminnew/nav'); ?>



  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

    <?php if($popup_data) { 

      ?>

      <h1>Edit Image</h1>

      <?php 

        }

        else

        {

      ?>

      <h1>Add Image</h1>

      <?php 

        }

      ?>

      <ol class="breadcrumb">

        <li><a href="<?php echo base_url()?>adminnew/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>

        <li class=""><a href="<?php echo base_url()?>adminnew/homebannersliderfourth">Homeslider Banners</a></li>

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

            if(isset($success) && !empty($success))

            {

              ?>

              <div class="alert alert-success" align="center">

              <strong><?php echo $success; ?></strong>

              </div>



              <?php   

              

            }

            if(isset($error) && !empty($error))

            {

              ?>

                <div class="alert alert-danger" align="center">

                  <strong><?php echo $error; ?></strong>

                </div>

              <?php 

            }

              // print_r($popup_data);
              

          ?>

          <form role="form" enctype="multipart/form-data" method="post" action="">
              <div class="col-md-6">
                  

                  <!-- <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" value="<?php echo (!empty($popup_data) && !empty($popup_data['title']) ? $popup_data['title'] : "" )?>" required>
                  </div> -->
                  <div class="form-group">
                    <label>Link</label>
                    <input type="text" class="form-control" name="link" value="<?php echo (!empty($popup_data) && !empty($popup_data['link']) ? $popup_data['link'] : "" )?>" required>
                  </div>
                  <?php 
                  if(!empty($popup_data))
                  {
                  ?>
                    <div class="form-group">
                      <img src="<?php echo base_url()?>uploads/homepopupimage/<?php echo (!empty($popup_data['image']) ? $popup_data['image'] : "default.png")?>">
                    </div>

                  <?php 
                  }
                  ?>
                  <div class="form-group">
                    <label>Popup Image (Type : jpg/png)</label>
                    <input type="file" class="form-control" name="image">
                  </div>
                   
            </div>
            <div class="col-md-6">
                  <!-- <div class="form-group">
                    <label>Create Date</label>
                    <input type="date" class="form-control" name="create_date" value="<?php echo (!empty($popup_data) && !empty($popup_data['create_date']) ? $popup_data['create_date'] : "" )?>">
                  </div> -->
                  <!-- <div class="form-group">
                    <label>End Date</label>
                    <input type="date" class="form-control" name="end_date" value="<?php echo (!empty($popup_data) && !empty($popup_data['end_date']) ? $popup_data['end_date'] : "" )?>">
                  </div> -->
                  <!-- <div class="form-group">
                    <label>Price</label>
                    <input type="number" class="form-control" name="price" step="0.01" value="<?php echo (!empty($popup_data) && !empty($popup_data['price']) ? $popup_data['price'] : "" )?>">
                  </div> -->
            </div>
            <div class="col-md-12 mt-5">
              <input type="hidden" name="id" value="<?php echo (!empty($popup_data) && !empty($popup_data['id']) ? $popup_data['id'] : "" )?>">
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
