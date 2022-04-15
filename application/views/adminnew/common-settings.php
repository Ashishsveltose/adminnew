<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> <i class="fa fa-cogs"></i> Common Settings </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>admin"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Common Settings</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-warning"> <br/>
          <!-- form start -->
          <?php
			if(isset($SUCCESS) && !empty($SUCCESS))
			{
			 echo '<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-close"></i></button><h4><i class="fa fa-spinner fa-spin"></i>'.$SUCCESS.'</h4></div>';
			 echo '<meta http-equiv="refresh" content="2;url='.base_url('adminnew/commonsettings').'">';
			}			 
		   ?>
          <form role="form" action="" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group col-md-3"><label">Email Address<span style="color:#FF0000;">*</span></label>
                <input type="email" class="form-control" id="emailaddress" value="<?php echo getWebOptionValue('email');?>" name="email" placeholder="Enter Email Address" required autofocus/>
              </div>
              <div class="form-group col-md-6"><label">Address<span style="color:#FF0000;">*</span></label>
                <input type="text" class="form-control" id="pac-input" value="<?php echo getWebOptionValue('address');?>" name="address" placeholder="Address" required/>
              </div>
			 <div class="col-md-12" style="padding: 0px">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Latitude</label>
                        <input type="text" name="shop_latitude"  class="form-control" id="latitude"  value="<?php echo getWebOptionValue('shop_latitude');?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Longitude</label>
                    <input type="text" name="shop_longitude"  class="form-control" id="longitude"  value="<?php echo getWebOptionValue('shop_latitude');?>">
                    </div>
                </div>
            </div>
            <div class="col-md-12" style="height: 243px;" id="gmap"></div>  
              <div class="form-group col-md-3">
                <label>Contact Number<span style="color:#FF0000;">*</span></label>
                <input type="text" class="form-control" id="mobileno" value="<?php echo getWebOptionValue('mobile_no');?>" name="mobile_no" placeholder="Mobile Number" required>
              </div>
              <div class="form-group col-md-6">
                <label>Facebook Page URL<span style="color:#FF0000;">*</span></label>
                <input type="text" class="form-control" id="fburl" value="<?php echo getWebOptionValue('facebook_url');?>" name="facebook_url" placeholder="Facebook Page URL" required>
              </div>
              <div class="form-group col-md-6">
                <label>Linkedin Page URL<span style="color:#FF0000;">*</span></label>
                <input type="text" class="form-control" id="liurl" value="<?php echo getWebOptionValue('linkedin_url');?>" name="linkedin_url" placeholder="Linkedin Page URL" required>
              </div>
              <div class="form-group col-md-6">
                <label>Instagram Page URL<span style="color:#FF0000;">*</span></label>
                <input type="text" class="form-control" id="instaurl" value="<?php echo getWebOptionValue('instagram_url');?>" name="instagram_url" placeholder="Instagram Page URL" required>
              </div>
              <div class="form-group col-md-6">
                <label>Twitter Page URL<span style="color:#FF0000;">*</span></label>
                <input type="text" class="form-control" id="twurl" value="<?php echo getWebOptionValue('twitter_url');?>" name="twitter_url" placeholder="Twitter Page URL" required>
              </div>
             <!--  <div class="form-group col-md-6">
                <label>Shipping Minimum Amount<span style="color:#FF0000;">*</span></label>
                <input type="text" class="form-control" id="shipping_min_amount" value="<?php echo getWebOptionValue('shipping_min_amount');?>" name="shipping_min_amount" placeholder="Enter Shipping" required>
              </div>
              <div class="form-group col-md-6">
                <label>Shipping Charges<span style="color:#FF0000;">*</span></label>
                <input type="text" class="form-control" id="shipping_charge" value="<?php echo getWebOptionValue('shipping_charge');?>" name="shipping_charge" placeholder="Enter Shipping" required>
              </div> -->
              <div class="form-group col-md-3">
                <label>Admin Commision Fees<span style="color:#FF0000;">* </span>In %</label>
                <input type="text" class="form-control" id="portal_fees" value="<?php echo getWebOptionValue('portal_fees');?>" name="portal_fees" placeholder="Enter Portal Fees" required>
              </div>
              <div class="form-group col-md-3">
                <label>Front-End Logo<span style="color:#FF0000;">*</span></label>
                <input type="file" class="form-control" id="frontlogo" name="front_logo" placeholder="Front-End Logo">
                <hr/>
                <img src="<?php echo base_url();?>uploads/<?php echo getWebOptionValue('front_logo');?>"/> </div>
              <div class="form-group col-md-3">
                <label>Back-End Logo<span style="color:#FF0000;">*</span></label>
                <input type="file" class="form-control" id="backlogo" name="backlogo" placeholder="Back-End Logo">
                <hr/>
                <img src="<?php echo base_url();?>uploads/<?php echo getWebOptionValue('backlogo');?>"/> </div>

              <div class="form-group col-md-3">
                <label>Background Image<span style="color:#FF0000;">*</span></label>
                <input type="file" class="form-control" id="backgroundimage" name="backedn_login_background_image" placeholder="Background Image">
                <hr/>
                <img src="<?php echo base_url();?>uploads/<?php echo getWebOptionValue('backedn_login_background_image');?>" class="img-responsive"/> 
              </div>
              <div class="form-group col-md-3">
                <label>Android link<span style="color:#FF0000;">*</span></label>
                <input type="url" class="form-control" id="Andriodilink" name="Andriodilink" placeholder="Enter Android Link" required value="<?php echo getWebOptionValue('Andriodilink');?>">
              </div>
              <div class="form-group col-md-3">
                <label>IOS link<span style="color:#FF0000;">*</span></label>
                <input type="url" class="form-control" id="ISO" name="isolink" placeholder="Enter ISO Link" required value="<?php echo getWebOptionValue('isolink');?>">
              </div>

              <!--  <div class="form-group col-md-3">
                  <label>Background Slider Landing Page Image<span style="color:#FF0000;">*</span></label>
                  <input type="file" class="form-control" id="backedn_loginslider_background_image" name="backedn_loginslider_background_image" placeholder="Background Image">
                  <hr/>
                  <img src="<?php echo base_url();?>uploads/<?php echo getWebOptionValue('backedn_loginslider_background_image');?>" class="img-responsive"/> 
                </div> -->

              <div class="form-group col-md-12">
                <button type="submit" class="btn btn-primary pull-right" name="configure_common_settings"><i class="fa fa-refresh"></i> Configure Now</button>
              </div>
            </div>
          </form>
        </div>
        <!-- /.box -->
      </div>
      <!--/.col (left) -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1jqCFvq7QWDreBKSOQi0tgL6wYBdXbWA&libraries=places&callback=initMap" async defer></script>

<script>
    function initMap() {
    var latt = ($("#latitude").val() != "")? parseFloat($("#latitude").val()) : 22.71720790;
    var longg = ($("#longitude").val() != "")? parseFloat($("#longitude").val()) : 75.86841130;
    //console.log("latt =",latt," longg =",longg);
    //$("#latitude").val(latt);
     //$("#longitude").val(longg);
    var map = new google.maps.Map(document.getElementById('gmap'), {
      center: {lat: latt, lng: longg},
      zoom: 13
    });
    var input = document.getElementById('pac-input');
    var autocomplete = new google.maps.places.Autocomplete(input);
    console.log(map);
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