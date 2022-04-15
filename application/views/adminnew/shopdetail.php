<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Vendore Detail
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <!-- <li><a href="#">Examples</a></li>
        <li class="active">User profile</li> -->
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url().'uploads/shop_images/shop_owner_images/'.$shop_data['owner_image'];?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo (isset($shop_data['owner_name']) ? $shop_data['owner_name'] : '')?></h3>

              <p class="text-muted text-center"><?php echo (isset($shop_data['shop_name']) ? $shop_data['shop_name'] : '')?> </p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Shop Id</b> <a class="pull-right"><?php echo (isset($shop_data['shop_reg_id']) ? $shop_data['shop_reg_id'] : '')?></a>
                </li>
                <!-- <li class="list-group-item">
                  <b>Registration No. </b> <a class="pull-right"><?php echo (isset($shop_data['shop_registration_no']) ? $shop_data['shop_registration_no'] : '')?></a>
                </li> -->
                <!-- <li class="list-group-item">
                  <b>GST NO.</b> <a class="pull-right"><?php echo (!empty($shop_data) && !empty($shop_data['gst_number']) ? base64_decode($shop_data['gst_number']) : "" );?></a>
                </li> -->
                <li class="list-group-item">
                  <b>Tax identification number</b> <a class=""><?php echo (!empty($shop_data) && !empty($shop_data['pan_no']) ? base64_decode($shop_data['pan_no']) : "" );?></a>
                </li>
                <li class="list-group-item">
                  <b>Years in business</b> <a class="pull-right"><?php echo (isset($shop_data['year_business']) ? $shop_data['year_business'] : '')?></a>
                </li>
                <li class="list-group-item">
                  <b>Short description of nature of business</b> <a class="pull-right"><?php echo (isset($shop_data['desc']) ? $shop_data['desc'] : '')?></a>
                </li>
                <!-- <li class="list-group-item">
                  <b>Shop Type.</b> <a class="pull-right"><?php echo (!empty($shop_data) && !empty($shop_data['shop_type_id']) ? shoptypebytid($shop_data['shop_type_id']) : "" );?></a>
                </li> -->
              </ul>

              <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Contact Info</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- <strong><i class="fa fa-book margin-r-5"></i> Education</strong> -->
              <p class="text-muted">
                <i class="fa fa-envelope margin-r-5"></i> <b>Email</b> <a class="pull-right"><?php echo (isset($shop_data['email']) ? $shop_data['email'] : '')?></a>
              </p>
              <p class="text-muted">
                <i class="fa fa-phone margin-r-5"></i>  <b>Mobile Number</b> <a class="pull-right"><?php echo (isset($shop_data['mobile_no']) && isset($shop_data['country_code']) ? $shop_data['country_code'].$shop_data['mobile_no'] : '')?></a>
              </p>
              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
              <p class="text-muted"><?php echo $shop_data['shop_address']; ?></p>
              <p style="height: 243px;" id="gmap"></p>
              <div id="infowindow-content">
                <img src="" width="16" height="16" id="place-icon">
                <!-- <span id="place-name"  class="title">Indore</span><br> -->
                <span id="place-address"><?php echo (!empty($shop_data) && !empty($shop_data['shop_address']) ? $shop_data['shop_address'] : "Indore Railway Station, Chhoti Gwaltoli, Indore, Madhya Pradesh, India" )?></span>
              </div>
              <!-- <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                <span class="label label-danger">UI Design</span>
                <span class="label label-success">Coding</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">Node.js</span>
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p> -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Vendore Detail</a></li>
              <li><a href="#timeline" data-toggle="tab">Bank Detail </a></li>
              <!-- <li><a href="#idproof" data-toggle="tab">Id Proof</a></li> -->
              <li><a href="#pandetail" data-toggle="tab">Tax identification Detail</a></li>
             <!--  <li><a href="#gumasta" data-toggle="tab">Employer Registration Number</a></li> -->
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <div class="row">
                 <!--  <div class="col-md-6">
                    <p><b>shop Image For Desktop (265 * 165 px )</b></p>
                    <?php if(!empty($shop_data['shop_image_desktop'])){ ?>
                      <div class="form-group">
                        <img src="<?php echo base_url()?>uploads/shop_images/shop_image_desktop/<?php echo $shop_data['shop_image_desktop'];?>" class="img-responsive">
                      </div>
                    <?php } ?>
                  </div> -->
                  <div class="col-md-6">
                    <p><b>Shop Image (265 * 100 px ) </b></p>
                    <?php if(!empty($shop_data['shop_image_mobile'])){ ?>
                      <div class="form-group">
                        <img src="<?php echo base_url()?>uploads/shop_images/shop_image_mobile/<?php echo $shop_data['shop_image_mobile'];?>" class="img-responsive">
                      </div>
                    <?php } ?>
                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <?php if(!empty($shop_data['owner_name'])){ ?>
                              <div class="form-group">
                                <b>Owner Name</b>&nbsp;&nbsp;<a class="pull-right"><?php echo (isset($shop_data['owner_name']) ? $shop_data['owner_name'] : '')?></a>
                              </div>
                            <?php } ?>
                        </li>
                    </ul?
                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                          <b>Vendore Categories</b> <a class="pull-right"><?php echo (isset($shop_data['shopcetegory_type_id']) ? $shop_data['shopcetegory_type_id'] : '')?></a>
                        </li>
                    </ul>
                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                          <b>Chain (owned . operated by parent company)</b> <a class="pull-right"><?php echo (isset($shop_data['chain']) ? $shop_data['chain'] : '')?></a>
                        </li>
                    </ul>
                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                          <b>Franchise (corporate brand)</b> <a class="pull-right"><?php echo (isset($shop_data['franchise']) ? $shop_data['franchise'] : '')?></a>
                        </li>
                    </ul>
                     <p><b>Owner Image </b></p>
                      <?php if(!empty($shop_data['owner_image'])){ ?>
                        <div class="form-group">
                          <img src="<?php echo base_url()?>uploads/shop_images/shop_owner_images/<?php echo $shop_data['owner_image'];?>" class="img-responsive">
                        </div>
                      <?php } ?>
                  </div>
                  <!-- <div class="row"> -->
                    <div class="col-md-6">
                      <p><b>Employer Identification number </b> :  <span><?php echo base64_decode($shop_data['adhar_no']); ?></span></p>
                        <?php if(!empty($shop_data['adhar_image'])){ ?>
                          <div class="form-group">
                            <img src="<?php echo base_url()?>uploads/shop_images/adhar_image/<?php echo $shop_data['adhar_image'];?>" class="img-responsive">
                          </div>
                        <?php } ?>
                        <?php if(!empty($shop_data['adhar_back_image'])){ ?>
                          <div class="form-group">
                            <img src="<?php echo base_url()?>uploads/shop_images/adhar_image/<?php echo $shop_data['adhar_back_image'];?>" class="img-responsive">
                          </div>
                        <?php } ?>
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                  <b>Shop Name</b> <a class="pull-right"><?php echo (isset($shop_data['shop_name']) ? $shop_data['shop_name'] : '')?></a>
                                </li>
                            </ul>
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                  <b>MemberShip</b> <a class="pull-right"><?php echo (isset($shop_data['membership-duration']) ? $shop_data['membership-duration'] : '')?></a>
                                </li>
                            </ul>
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                  <b>business registered in </b> <a class="pull-right"><?php echo (isset($shop_data['business-registerd']) ? $shop_data['business-registerd'] : '')?></a>
                                </li>
                            </ul>
                    </div>
                     
                </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                <div class="row">
                  <div class="col-md-6">
                    <ul class="list-group list-group-unbordered">
                        <!-- <li class="list-group-item">
                          <b>Bank Name</b> <a class="pull-right"><?php echo (isset($shop_data['bank_name']) ? $shop_data['bank_name'] : '')?></a>
                        </li> -->
                        <li class="list-group-item">
                          <b>Account Number </b> <a class="pull-right"><?php echo (isset($shop_data['bank_acc_no']) ? $shop_data['bank_acc_no'] : '')?></a>
                        </li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                          <b>Account Holder Name</b> <a class="pull-right"><?php echo (isset($shop_data['account_holder_name']) ? $shop_data['account_holder_name'] : '')?></a>
                        </li>
                        <li class="list-group-item">
                          <b>Routing number</b> <a class="pull-right"><?php echo (isset($shop_data['routing-number']) ? $shop_data['routing-number'] : '')?></a>
                        </li>
                    </ul>
                  </div>
                  <!-- <?php if(isset($shop_data['cancel_check_image']) && !empty($shop_data['cancel_check_image'])){ ?>
                      <div class="col-md-12">
                        <img src="<?php echo base_url()?>uploads/shop_images/cancel_check_images/<?php echo $shop_data['cancel_check_image'];?>" class="img-responsive">
                      </div>
                    <?php  } ?> -->
                </div>
              </div>
              <!-- /.tab-pane -->

             <!--  <div class="tab-pane" id="idproof">
                <div class="row">
                  <div class="col-md-6">
                    <p><b>Id Proof Number </b> :  <span><?php echo base64_decode($shop_data['adhar_no']); ?></span></p>
                    <?php if(!empty($shop_data['adhar_image'])){ ?>
                        <div class="form-group">
                          <img src="<?php echo base_url()?>uploads/shop_images/adhar_image/<?php echo $shop_data['adhar_image'];?>" class="img-responsive">
                        </div>
                    <?php } ?>
                  </div>
                 
                </div>
              </div> -->
              <div class="tab-pane" id="pandetail">
                <div class="row">
                  <div class="col-md-6">
                    <p><b>Tax identification number </b> :  <span class="pull-right"><?php echo base64_decode($shop_data['pan_no']); ?></span></p>
                      <?php if(!empty($shop_data['pan_image'])){ ?>
                        <div class="form-group">
                          <img src="<?php echo base_url()?>uploads/shop_images/pan_image/<?php echo $shop_data['pan_image'];?>" class="img-responsive">
                        </div>
                      <?php } ?>
                  </div>
                </div>
              </div>
             <!--  <div class="tab-pane" id="gumasta">
                <div class="row">
                  <div class="col-md-6">
                    <p><b>Employer Registration Number</b></p>
                      <?php if(!empty($shop_data['gumasta_image'])){ ?>
                        <div class="form-group">
                          <img src="<?php echo base_url()?>uploads/shop_images/gumasta_images/<?php echo $shop_data['gumasta_image'];?>" class="img-responsive">
                        </div>
                      <?php } ?>
                  </div>
                </div>
              </div> -->
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>

<input type="hidden" name="shop_address" class="form-control"  id="pac-input" value="<?php echo (!empty($shop_data) && !empty($shop_data['shop_address']) ? $shop_data['shop_address'] : "Indore Railway Station, Chhoti Gwaltoli, Indore, Madhya Pradesh, India" )?>"  >
<input type="hidden" name="shop_latitude"  class="form-control" id="latitude"  value="<?php echo (!empty($shop_data) && !empty($shop_data['shop_latitude']) ? $shop_data['shop_latitude'] : "22.71720790" )?>">
<input type="hidden" name="shop_longitude"  class="form-control" id="longitude"  value="<?php echo (!empty($shop_data) && !empty($shop_data['shop_longitude']) ? $shop_data['shop_longitude'] : "75.86841130" )?>">
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlk9jl3b8NvuKXQm6rft78c5T_PLe7gRg&libraries=places&callback=initMap" async defer></script>

<script type="text/javascript">
  $(document).ready(function(){
        $('#basicExample').timepicker({
          timeFormat: 'HH:mm',
          startTime: '07:00',
          minTime: '07:00', // 11:45:00 AM,
          maxHour: 23,
          interval: 30 
        });

        $('#basicExampleclose').timepicker({
          timeFormat: 'H:mm',
          startTime: '07:00',
          minTime: '07:00', // 11:45:00 AM,
          maxHour: 23,
          interval: 30 
        });
  });

  function initMap() {
      var latt = ($("#latitude").val() != "")? parseFloat($("#latitude").val()) : 22.71720790;
      var longg = ($("#longitude").val() != "")? parseFloat($("#longitude").val()) : 75.86841130;
      console.log("latt =",latt," longg =",longg);
      var map = new google.maps.Map(document.getElementById('gmap'), {
        center: {lat: latt, lng: longg},
        zoom: 13
      });
      var input = document.getElementById('pac-input');
      var autocomplete = new google.maps.places.Autocomplete(input);
      // Bind the map's bounds (viewport) property to the autocomplete object,

      // so that the autocomplete requests use the current map bounds for the

      // bounds option in the request.

      autocomplete.bindTo('bounds', map);
      var infowindow = new google.maps.InfoWindow();
      var infowindowContent = document.getElementById('infowindow-content');
      infowindow.setContent(infowindowContent);
      var marker = new google.maps.Marker({
        map: map,
        position : new google.maps.LatLng(latt, longg),
      });
      infowindow.open(map, marker);
      google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map, marker);
      });
      autocomplete.addListener('place_changed', function() {
        infowindow.close();
        marker.setVisible(false);
        var place = autocomplete.getPlace();
        if (!place.geometry) {
          // User entered the name of a Place that was not suggested and
          // pressed the Enter key, or the Place Details request failed.
          window.alert("No details available for input: '" + place.name + "'");
          return;
        }
        $("#latitude").val(place.geometry.location.lat().toFixed(8));
        $("#longitude").val(place.geometry.location.lng().toFixed(8));
        // If the place has a geometry, then present it on a map.
        if (place.geometry.viewport) {
          map.fitBounds(place.geometry.viewport);
        } else {

          map.setCenter(place.geometry.location);

          map.setZoom(17);  // Why 17? Because it looks good.

        }

        marker.setPosition(place.geometry.location);

        marker.setVisible(true);



        var address = '';

        if (place.address_components) {

          address = [

            (place.address_components[0] && place.address_components[0].short_name || ''),

            (place.address_components[1] && place.address_components[1].short_name || ''),

            (place.address_components[2] && place.address_components[2].short_name || '')

          ].join(' ');

        }



        infowindowContent.children['place-icon'].src = place.icon;

        infowindowContent.children['place-name'].textContent = place.name;

        infowindowContent.children['place-address'].textContent = address;

        infowindow.open(map, marker);

      });
  }
</script>