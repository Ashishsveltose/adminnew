<?php //$this->load->view('adminnew/nav'); ?>

<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

   <?php if($seller_data) { 

      ?>

      <h1>Edit About us</h1>

      <?php 

        }

        else

        {

      ?>

      <h1>Add About us</h1>

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
            
            
            <div class="col-md-12">
                <div class="form-group">
                    <label>Title &nbsp;<b style="color:#ff0000;">*</b></label>        
                    
                    <input type="text" class="form-control" value="<?php echo (isset($seller_data['title']) ?  $seller_data['title'] : '');?>" name="title"  required autofocus/>
                    <div class="help-block with-errors">
                        
                    </div>
                </div>
            </div>
            
            <div class="col-md-12">
                <div class="form-group">
                    <label>Description &nbsp;<b style="color:#ff0000;">*</b></label>
                                
                    <textarea rows="10" cols="180" name="editor1" value="<?php echo (isset($seller_data['editor1']) ?  $seller_data['editor1'] : '');?>" ><?php echo (isset(
                            $seller_data['editor1']) ?  $seller_data['editor1'] : '');?>
                    </textarea>
                    <div class="help-block with-errors">
                        
                    </div>
                </div>
            </div>
            
            <div class="col-md-12 mt-5">
              <input type="hidden" name="id" value="<?php echo (!empty($seller_data) && !empty($seller_data['id']) ? $seller_data['id'] : "" )?>">
               
               <button type="submit" name="submit"  class="btn btn-primary">Save</button>
                      <!-- <button type="reset" class="btn btn-primary">Reset</button> -->
            </div>
          </form>
          
            <script>
                     CKEDITOR.replace( 'editor1' );
            </script>

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
    var val = confirm("Sure you want to Delete ?");
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