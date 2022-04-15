<?php //$this->load->view('adminnew/nav'); ?>
<!-- <script src="<?php echo base_url();?>backend_assets/ckeditor/ckeditor.js"></script>
 -->  <!-- Content Wrapper. Contains page content -->
<!--   <script src="http://tinymce.cachefly.net/4.0/tinymce.min.js"></script>
 -->
    <script src="https://cdn.tiny.cloud/1/kp9nhskj9fc3d75ve7vi72bc7gn2xc921i2zr8eyuv3y495k/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
   <?php if(!empty($faq_data)) { 
      ?>
      <h1>Edit FAQ</h1>
      <?php 
        }
        else
        {
      ?>
      <h1>Add FAQ</h1>
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
                    <input type="text" class="form-control" value="<?php if(!empty($faq_data['ans'])){echo $faq_data['ans'];}else{echo '';}?>" name="title"  required autofocus/>
                    <div class="help-block with-errors">
                    </div>
                </div>
            </div>
            
            <div class="col-md-12">
                <label>Description &nbsp;<b style="color:#ff0000;">*</b></label>
                <div class="form-group">
                    <textarea rows="10" cols="180" name="editor1" id="NoTinyMCE" ><?php if(!empty($faq_data['qustion'])){echo $faq_data['qustion'];}else{echo "";}?>
                    </textarea>
                    <div class="help-block with-errors">
                    </div>
                </div>
            </div>
            <br>
          <!--  <label>Add Hindi</label>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Title &nbsp;<b style="color:#ff0000;">*</b></label>                 
                    <input type="text" class="form-control" name="ans_hindi" value="<?php if(!empty($faq_data['ans_hindi'])){echo $faq_data['ans_hindi'];}else{echo '';}?>" required autofocus/>
                    <div class="help-block with-errors">
                    </div>
                </div>
            </div>
            
            <div class="col-md-12">
                    <label>Description &nbsp;<b style="color:#ff0000;">*</b></label>
                <div class="form-group">
                                
                    <textarea rows="10" cols="180" name="qustion_hindi" id="NoTinyMCE2"><?php if(!empty($faq_data['qustion_hindi'])){echo $faq_data['qustion_hindi'];}else{echo "";}?>
                    </textarea>
                    <div class="help-block with-errors">
                        
                    </div>
                </div>
            </div>
            <br> -->
            <div class="col-md-12 mt-5">
              <input type="hidden" name="id" value="<?php if(!empty($faq_data['id'])){echo $faq_data['id'];}else{echo "";}?>">
               <button type="submit" name="submit"  class="btn btn-primary">Save</button>
                      <!-- <button type="reset" class="btn btn-primary">Reset</button> -->
            </div>
          </form>         
            <script>
                    //CKEDITOR.replace( 'editor1' );
                    //CKEDITOR.replace( 'qustion_hindi' );
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
    // tinymce.init({
    //   selector:'#NoTinyMCE'
    // });
    // tinymce.init({
    //   selector:'#NoTinyMCE2'
    // });
     tinymce.init({
      selector:'#NoTinyMCE',
      height: 500,
      menubar: false,
      toolbar:'formatselect| bold italic | alignleft aligncenter ' +
      'alignright alignjustify | bullist numlist| '
    });
    tinymce.init({
      selector:'#NoTinyMCE2',
      height: 500,
      menubar: false,
      toolbar:'formatselect| bold italic | alignleft aligncenter ' +
      'alignright alignjustify | bullist numlist| '
    });
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