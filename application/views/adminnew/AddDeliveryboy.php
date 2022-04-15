<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <?php if($customer_data) {  ?>
      <h1>Edit Delivery Boy</h1>
    <?php } else{ ?>
      <h1>Add Delivery Boy</h1>
    <?php } ?>
    <ol class="breadcrumb">
    	<li><a href="<?php echo base_url()?>admin"><i class="fa fa-dashboard"></i> Home</a></li>
    	<li class=""><a href="<?php echo base_url()?>adminnew/deliveryBoylist">Add Delivery Boy</a></li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
  	<div class="box box-default">
  		<!-- /.box-header -->
  	  <div class="box-body">
  		  <div class="row" style="margin: 0px">
          <?php if(isset($success) && !empty($success)){ ?>
             <div class="alert alert-success" align="center">
             		<strong><?php echo $success; ?></strong>
             </div>
  				<?php }if(isset($error) && !empty($error)){ ?>

  				  <div class="alert alert-danger" align="center">
  				  	<strong><?php echo $error; ?></strong>
  				  </div>
  				<?php } ?>
          <?php //print_r($customer_data);?>
  				<form role="form" enctype="multipart/form-data" method="post" action="">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#activity" data-toggle="tab">Delivery Boy Detail</a></li>
                <li><a href="#addbank" data-toggle="tab">Bank Detail</a></li>
              </ul>
              <div class="tab-content" style="padding: 0px">
                <div class="active tab-pane" style="margin: 10px" id="activity">
        					<div class="col-md-6">
        							<div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo (!empty($customer_data) && !empty($customer_data['name']) ? $customer_data['name'] : "" )?>" required>
                      </div>
                      <div class="form-group">
                        <label>Email-ID</label>
                        <input type="email" class="form-control" name="email" value="<?php echo (!empty($customer_data) && !empty($customer_data['email']) ? $customer_data['email'] : "" )?>" required>
                        
                      </div>
                      <div class="form-group">
          								<label>Password</label>
          								<input type="password" class="form-control" name="password">
          						</div>
          						<?php if(!empty($customer_data['image'])){ ?>
          								<div class="form-group">
          									<img src="<?php echo base_url()?>uploads/deliveryboy_images/<?php echo $customer_data['image'];?>" class="img-responsive">
          								</div>
          						<?php } ?>
          						<div class="form-group">
          							<label>User Image</label>
          							<input type="file" name="image" class="form-control">
          						</div>
        			    </div>
        					<div class="col-md-6">
        						<div class="form-group">
              	       <label>Phone Number</label>
              	       <input type="text" class="form-control" name="mobile_no" value="<?php echo (!empty($customer_data) && !empty($customer_data['mobile_no']) ? $customer_data['mobile_no'] : "" )?>" required>
                       <?php if(isset($error_email) && !empty($error_email)){echo "<span class='error'>$error_email</span>";}?>
                    </div>
                    <div class="form-group">
                      <label>pincode</label>
                      <input type="text" class="form-control" name="zipcode" value="<?php echo (!empty($customer_data) && !empty($customer_data['zipcode']) ? $customer_data['zipcode'] : "" )?>" required>
                    </div>
                    <div class="form-group">
                        <label>Address proof  (265 * 165 px ) </label>
                        <input type="file" name="adhar_image" class="form-control">
                    </div>
                    <?php if(!empty($customer_data['adhar_image'])){ ?>
                        <div class="form-group">
                          <img src="<?php echo base_url()?>uploads/deliveryboy_images/adhar_image/<?php echo $customer_data['adhar_image'];?>" class="img-responsive">
                        </div>
                    <?php } ?>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-3" style="padding: 0px">
                    <label>ID Proof Type</label>
                      <select name="id_proof_type" class="form-control">
                        <option value="">Select Id Proof</option>
                        <?php $id_proof_types = $this->Common_model->getwhere('id_proof_type',array(1=>1)); 
                          foreach ($id_proof_types as $id_proof_typesa) {
                        ?>
                        <option value="<?php echo $id_proof_typesa['option_name']?>" <?php echo (isset($customer_data['id_proof_type']) && $customer_data['id_proof_type'] == $id_proof_typesa['option_name'] ? 'selected' : ''); ?>><?php echo $id_proof_typesa['option_value']?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <label>ID Proof Number</label>
                      <input name="id_proof_id" class="form-control"  value="<?php echo (!empty($customer_data) && !empty($customer_data['id_proof_id']) ? $customer_data['id_proof_id'] : "" )?>"  >
                    </div>
                    <div class="col-md-6">
                      <!-- <label>ID Proof Image</label>
                      <input name="id_proof_id" class="form-control"  value="<?php echo (!empty($customer_data) && !empty($customer_data['id_proof_id']) ? $customer_data['id_proof_id'] : "" )?>"  > -->
                      <div class="form-group">
                          <label>Id proof Image (265 * 165 px ) </label>
                          <input type="file" name="id_proof_image" class="form-control">
                      </div>
                      <?php if(!empty($customer_data['id_proof_image'])){ ?>
                          <div class="form-group">
                            <img src="<?php echo base_url()?>uploads/deliveryboy_images/id_proof_image/<?php echo $customer_data['id_proof_image'];?>" class="img-responsive">
                          </div>
                      <?php } ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Address</label>
                      <input name="address" class="form-control"  value="<?php echo (!empty($customer_data) && !empty($customer_data['address']) ? $customer_data['address'] : "" )?>"  >
                    </div>
                  </div>
                  
                </div>
                <div class="tab-pane" id="addbank" style="margin: 10px">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>BANK NAME</label>
                      <input type="text" class="form-control" name="bank_name" value="<?php echo (!empty($customer_data) && !empty($customer_data['bank_name']) ? $customer_data['bank_name'] : "" )?>" >
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Account Number</label>
                      <input type="text" class="form-control" name="bank_acc_no" value="<?php echo (!empty($customer_data) && !empty($customer_data['bank_acc_no']) ? $customer_data['bank_acc_no'] : "" )?>" >
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>IfSC CODE</label>
                      <input type="text" class="form-control" name="bank_ifsc_code" value="<?php echo (!empty($customer_data) && !empty($customer_data['bank_ifsc_code']) ? $customer_data['bank_ifsc_code'] : "" )?>" >
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Branch</label>
                      <input type="text" class="form-control" name="bank_branch" value="<?php echo (!empty($customer_data) && !empty($customer_data['bank_branch']) ? $customer_data['bank_branch'] : "" )?>" >
                    </div>
                  </div>
                  <?php if(isset($customer_data['cancel_check_images']) && !empty($customer_data['cancel_check_images'])){ ?>
                      <div class="col-md-12">
                        <img src="<?php echo base_url()?>uploads/deliveryboy_images/cancel_check_images/<?php echo $customer_data['cancel_check_images'];?>" class="img-responsive">
                      </div>
                    <?php  } ?>
                    <div class="col-md-12">
                      <label>Cancel Check Image</label>
                      <input type="file" name="cancel_check_images" class="form-control">
                    </div>

                  

                  </div>
                </div>
                
              </div>
              <div class="col-md-12 mt-5">
                <?php if(isset($customer_data['id']) && !empty($customer_data['id'])){ ?>
                        <input type="hidden" name="id" value="<?php echo (!empty($customer_data) && !empty($customer_data['id']) ? $customer_data['id'] : "" )?>">
                        <button type="submit" name="update"  class="btn btn-primary pull-right floatright">Submit</button>
                <?php }else{ ?>
                      <button type="submit" name="submit"  class="btn btn-primary pull-right floatright">Submit</button>
                <?php } ?>
              </div>
            </div>
          </form>
  			<!-- /.col -->
  			</div>
  			<!-- /.row -->
  		</div>
  		<!-- /.box-body -->
  	</div>
  </section>
	<!-- /.content -->
</div>
