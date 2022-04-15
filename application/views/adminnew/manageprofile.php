<div class="content-wrapper">
  <section class="content-header">
    <h1><i class="fa fa-cogs"></i> Manage your information</h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>admin" class="btn bg-navy"><i class="fa fa-home"></i> Go Home</a></li>
    </ol>
  </section>
  <section class="content" style="padding-top:3%;">
    <div class="row">
      <div class="col-md-12">
        <?php if(isset($success) && !empty($success)){ ?>
        <div class="alert alert-success alert-dismissible"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><i class="fa fa-spinner fa-spin"></i> <?php echo $success;?><?php echo '<meta http-equiv="refresh" content="2;url='.base_url().'adminnew/manageprofile">';?> </div>
        <?PHP } ?>
        <?php if(isset($error) && !empty($error)){ ?>
        <div class="alert alert-danger alert-dismissible"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><i class="fa fa-exclamation-triangle"></i> <?php echo $error;?> </div>
        <?PHP } ?>
      </div>
      <div class="col-md-4">
        <!-- Horizontal Form -->
        <div class="box box-warning">
          <div class="box-body">
            <h4 class="box-title" style="padding-bottom: 10px;"><i class="fa fa-info-circle"></i> Manage your profile</h4>
            <form action="" method="post">
              <div class="row">
                <div class="col-sm-12">
                  <fieldset class="form-group">
                  <label for="">First Name<span style="color:#FF0000;">*</span></label>
                  <input name="yourfirstname" type="text" value="<?php echo $admin_information['first_name'];?>" class="form-control" placeholder="First Name" autofocus required/>
                  </fieldset>
                </div>
                <div class="col-sm-12">
                  <fieldset class="form-group">
                  <label for="">Last Name<span style="color:#FF0000;">*</span></label>
                  <input name="yourlastname" type="text" value="<?php echo $admin_information['last_name'];?>" class="form-control" placeholder="Last Name" required/>
                  </fieldset>
                </div>
                <div class="col-sm-12">
                  <fieldset class="form-group">
                  <label for="">Email-ID<span style="color:#FF0000;">*</span></label>
                  <input name="youremailid" type="email" value="<?php echo $admin_information['email'];?>" class="form-control" placeholder="Email-ID" required/>
                  </fieldset>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <button type="submit" class="btn btn-warning btnSubmit" name="changeprofileinformation" style="height: 40px;line-height: 27px;"><i class="fa fa-refresh"></i> Update Now</button>
                </div>
              </div>
            </form>
          </div>
          <!--/.col (right) -->
        </div>
      </div>
      <div class="col-md-4">
        <!-- Horizontal Form -->
        <div class="box box-info">
          <div class="box-body">
            <h4 class="box-title" style="padding-bottom: 10px;"><i class="fa fa-key"></i> Change your password</h4>
            <form action="" method="post">
              <div class="row">
                <div class="col-sm-12">
                  <fieldset class="form-group">
                  <label for="">Current Password<span style="color:#FF0000;">*</span></label>
                  <input name="current_password" type="password" class="form-control" placeholder="Current Password" autofocus required/>
                  </fieldset>
                </div>
                <div class="col-sm-12">
                  <fieldset class="form-group">
                  <label for="">New Password<span style="color:#FF0000;">*</span></label>
                  <input name="new_password" type="password" class="form-control" placeholder="New Password" required/>
                  </fieldset>
                </div>
                <div class="col-sm-12">
                  <fieldset class="form-group">
                  <label for="">Re-Enter Password<span style="color:#FF0000;">*</span></label>
                  <input name="re_enter_password" type="password" class="form-control" placeholder="Re-Enter Password" required/>
                  </fieldset>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <button type="submit" class="btn btn-info btnSubmit" name="changenormalpassword" style="height: 40px;line-height: 27px;"><i class="fa fa-refresh"></i> Update Password</button>
                </div>
              </div>
            </form>
          </div>
          <!--/.col (right) -->
        </div>
      </div>
      
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
