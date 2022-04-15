<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
<!-- <p><button onclick="getLocation()">Get My Location</button></p>
<p id="demo"></p>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBlk9jl3b8NvuKXQm6rft78c5T_PLe7gRg"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript">
var x=document.getElementById("demo");
function getLocation(){
    if (navigator.geolocation){
        navigator.geolocation.getCurrentPosition(showPosition,showError);
    }
    else{
        x.innerHTML="Geolocation is not supported by this browser.";
    }
}

function showPosition(position){
    lat=position.coords.latitude;
    lon=position.coords.longitude;
    displayLocation(lat,lon);
}

function showError(error){
    switch(error.code){
        case error.PERMISSION_DENIED:
            x.innerHTML="User denied the request for Geolocation."
        break;
        case error.POSITION_UNAVAILABLE:
            x.innerHTML="Location information is unavailable."
        break;
        case error.TIMEOUT:
            x.innerHTML="The request to get user location timed out."
        break;
        case error.UNKNOWN_ERROR:
            x.innerHTML="An unknown error occurred."
        break;
    }
}

function displayLocation(latitude,longitude){
    var geocoder;
    geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(latitude, longitude);

    geocoder.geocode(
        {'latLng': latlng}, 
        function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                if (results[0]) {
                    var add= results[0].formatted_address ;
                    var  value=add.split(",");

                    count=value.length;
                    country=value[count-1];
                    state=value[count-2];
                    city=value[count-3];
                    x.innerHTML = "city name is: " + "202, 2nd Floor, Inspire Building, 6/1, Opposite Union Bank Of India, Ushaganj, Chhawni, Indore, Madhya Pradesh 452001";
                }
                else  {
                    x.innerHTML = "address not found";
                }
            }
            else {
                x.innerHTML = "Geocoder failed due to: " + status;
            }
        }
    );
}
</script> -->

    <?php if($customer_data) {  ?>
      <h1>Edit Customer</h1>
    <?php } else{ ?>
      <h1>Add User</h1>
    <?php } ?>
    <ol class="breadcrumb">
    	<li><a href="<?php echo base_url()?>admin"><i class="fa fa-dashboard"></i> Home</a></li>
    	<li class=""><a href="<?php echo base_url()?>adminnew/Customerslist">Users</a></li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
  	<div class="box box-default">
  		<!-- /.box-header -->
  	  <div class="box-body">
  		  <div class="row">
          
  				<?php if(isset($error) && !empty($error)){ ?>

  				  <div class="alert alert-danger" align="center">
  				  	<strong><?php echo $error; ?></strong>
  				  </div>
  				<?php } ?>
          <?php if(isset($success) && !empty($success)){ 
             echo '<div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-close"></i></button><h4><i class="fa fa-spinner fa-spin"></i>'.$success.'</h4></div>';
            echo '<meta http-equiv="refresh" content="2;url='.base_url('adminnew/Customerslist').'">';
            } ?>
  				<form role="form" enctype="multipart/form-data" method="post" action="">
  					<div class="col-md-6">
  							<div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="first_name" value="<?php echo (!empty($customer_data) && !empty($customer_data['first_name']) ? $customer_data['first_name'] : "" )?>" required>
                </div>
                <div class="form-group">
                  <label>Email-ID</label>
                  <input type="email" class="form-control" name="email" value="<?php echo (!empty($customer_data) && !empty($customer_data['email']) ? $customer_data['email'] : "" )?>" required>
                  <?php if(isset($error_email) && !empty($error_email)){echo "<span class='error'>$error_email</span>";}?>
                </div>
                <div class="form-group">
    								<label>Password</label>
    								<input type="password" class="form-control" name="password">
    						</div>
    						<?php if(!empty($customer_data['image'])){ ?>
    								<div class="form-group">
    									<img src="<?php echo base_url()?>uploads/user_images/<?php echo $customer_data['image'];?>" class="img-responsive">
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
        	       <input type="tel" class="form-control" name="mobile_no" pattern="[0-9]{3}[0-9]{3}[0-9]{4}"  value="<?php echo (!empty($customer_data) && !empty($customer_data['mobile_no']) ? $customer_data['mobile_no'] : "" )?>" required>
              </div>
              <div class="form-group">
                <label>pincode</label>
                <input type="text" class="form-control" pattern="[0-9]{6}" name="zipcode" value="<?php echo (!empty($customer_data) && !empty($customer_data['zipcode']) ? $customer_data['zipcode'] : "" )?>" required>
              </div>
               <div class="form-group">
                <label>Select Area</label>
                <select name="area_id" class="form-control">
                	<option value="">Select Any Area</option>
                	<?php if(isset($arealist) && !empty($arealist)){ 
                								foreach($arealist as $areaarray){
                	?>
                			<option value="<?php echo $areaarray['area_id']; ?>" <?php echo (isset($customer_data['area_id']) && $customer_data['area_id'] == $areaarray['area_id'] ? "selected" : '')?> ><?php echo $areaarray['area_name']; ?></option>
                	<?php } } ?>
                </select>
              </div> 
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Address</label>
                <input name="address" class="form-control"  id="pac-input"  value="<?php echo (!empty($customer_data) && !empty($customer_data['address']) ? $customer_data['address'] : "" )?>"  >
              </div>
            </div>
           
            <div class="col-md-12" style="height: 243px;" id="gmap"></div>
            <div id="infowindow-content">
              <img src="" width="16" height="16" id="place-icon">
              <!-- <span id="place-name"  class="title">Indore</span><br> -->
              <span id="place-address"><?php echo (!empty($customer_data) && !empty($customer_data['address']) ? $customer_data['address'] : " " )?></span>
            </div>
            <div class="col-md-12 mt-5">
            	<?php if(isset($customer_data['id']) && !empty($customer_data['id'])){ ?>
                      <input type="hidden" name="id" value="<?php echo (!empty($customer_data) && !empty($customer_data['id']) ? $customer_data['id'] : "" )?>">
                      <button type="submit" name="update" value="update"  class="btn btn-primary pull-right floatright">Submit</button>
              <?php }else{ ?>
                    <button type="submit" name="submit"  class="btn btn-primary pull-right floatright">Submit</button>
              <?php } ?>
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

<script type="text/javascript">
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
    console.log(map);
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

// $("#pac-input").on('keyup',function(){
//     alert();
   
//   });
</script>