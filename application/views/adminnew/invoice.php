<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Invoice
        <small><?php echo (isset($orderdata) ? $orderdata['invoice_no']: ''); ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>deliveryboy"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url()?>deliveryboy/orderhistory">Orderhistory</a></li>
        <li class="active">Invoice</li>
      </ol>
    </section>
    <?php 
      // $shop_data = $this->Common_model->getSingleRecordById('shops',array('shop_id' => $orderdata['seller_id']));

      $shippingifo = json_decode($orderdata['shipping_address'],true);
    ?>
    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> <?php echo getWebOptionValue('site_title');?>
            <small class="pull-right">Date: <?php echo dateformatedmy($orderdata['create_date']); ?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>

      <div class="row">
        <div class="col-md-3"><a href="javascript:void(0)" class="btn btn-danger deleteselected"> <i class="fa fa-ban" aria-hidden="true"></i>&nbsp; Cancel Selected Order</a></div>
        <div class="col-md-3"><a href="javascript:void(0)" class="btn btn-warning returnselected"> <i class="fa fa-ban" aria-hidden="true"></i>&nbsp; Return Selected Order</a></div>
        <div class="col-md-3"><a href="javascript:void(0)" class="btn btn-success completeselected"> <i class="fa fa-success" aria-hidden="true"></i>&nbsp; Complete Selected Order</a></div>

        <input type="hidden" class="form-control" id="o_id" name="o_id" value="<?php echo $orderdata['id']; ?>">
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <!-- <div class="col-sm-4 invoice-col">
          From
          <address>
            <strong><?php echo $shop_data['shop_name'];?></strong><br>
            <?php echo $shop_data['shop_address'];?><br>
            Phone: <?php echo base64_decode($shop_data['mobile_no']); ?><br>
            Email: <?php echo $shop_data['email']; ?>
          </address>
        </div> -->
        <!-- /.col -->
        <div class="col-sm-6 invoice-col">
          To
          <address>
            <strong><?php echo $shippingifo['name']; ?></strong><br>
            <?php echo $shippingifo['address']; ?><br>
            <?php echo $shippingifo['postal_code']; ?><br>
            Phone: <?php echo $shippingifo['phone']; ?><br>
            Email: <?php echo $shippingifo['email']; ?>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-6 invoice-col">
          <b>Invoice NO. <?php echo (isset($orderdata) ? $orderdata['invoice_no']: ''); ?></b><br>
          <br>
          <b>Payment status:</b> <?php echo $orderdata['payment_status']; ?><br>
          <b>Deliery status:</b> <?php echo $orderdata['delivery_status_name']; ?>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th><input type="checkbox" id="checkAl" style="display: block;"></th>
              <th>Item Id</th>
              <th>Shop Id</th>
              <th class="product-name">Product</th>
              <th class="product-name">Variations</th>
              <th class="product-price d-lg-table-cell">MRP </th>
              <th class="product-price d-lg-table-cell">Discount</th>
              <th class="product-price d-lg-table-cell">Price</th>
              <th class="product-quanity d-md-table-cell">QTY</th>
              <th class="product-total">Total</th>
              <th class="product-total">Delivery status</th>
              <th class="product-remove"></th>
            </tr>
            </thead>
            <tbody>
            <?php 
              $spdata = $product= $this->Common_model->getWhereData("order_products",array('order_id'=>$orderdata['id']));
              $subtotal = array();
              $s = 1;
            ?>
              <?php if(isset($spdata) && !empty($spdata)){ 
                      $pi = 0;
              ?>
              <?php foreach($spdata as $key=>$spdataarray){ 
                  $product= $this->Common_model->getSingleRecordById("product",array('product_id'=>$spdataarray['product_id']));
                  if(isset($spdataarray['variations']) && !empty($spdataarray['variations'])){
                    $product_variation = json_decode($spdataarray['variations'],true);
                  }
                  // print_r($product_variation);
              ?>
                  <tr class="cart-item">
                      <td><input type="checkbox" id="checkItem" name="check" value="<?php echo $spdataarray["id"]; ?>"></td>
                      <td class="product-image">
                        <?php echo $spdataarray['id']; ?>
                      </td>
                      <td class="product-image">
                        <?php echo get_shop_reg_id_by_shop_id($spdataarray['shop_id']); ?>
                      </td>
                      <td class="product-name">
                          <span class="pr-4 d-block"><?php echo $spdataarray['product_name']; ?></span>
                      </td>

                      <td class="product-name">
                        <?php if(isset($spdataarray['color']) && !empty($spdataarray['color'])){?>
                              <p><span class="pr-4 d-block"></span> <span><?php echo " COLOR : ".getcolornamebyid($spdataarray['color']); ?></span></p>
                        <?php }?>
                        <?php if(isset($product_variation) && !empty($product_variation)){ 
                                foreach($product_variation as $kv=>$product_variation_array){
                                  foreach($product_variation_array as $kv2=>$product_variation_array2)
                          ?>
                            <p><span class="pr-4 d-block"></span> <span><?php echo $kv2 ." : ".$product_variation_array2; ?></span></p>
                          <?php } } ?>
                      </td>

                      <td class="product-price d-lg-table-cell">
                          <span class="pr-3 d-block"><?php echo $spdataarray['mrp_price']; ?></span>
                      </td>
                      <td class="product-price d-lg-table-cell">
                          <span class="pr-3 d-block"><?php echo $spdataarray['discount'] . (isset($spdataarray['discount_type']) && $spdataarray['discount_type'] == 1 ? '%' :'' ); ?></span>
                      </td>
                      <td class="product-price d-lg-table-cell">
                          <span class="pr-3 d-block"><?php echo $spdataarray['price']; ?></span>
                      </td>
                      <td class="product-quantity  d-md-table-cell"><span class="pr-3 d-block"><?php echo $spdataarray['quantity']?></span>
                      </td>
                      <td class="product-total">
                          <span><?php echo $spdataarray['subtotal_price'];?></span>
                      </td>
                      <td class="product-total">
                          <span><?php echo deliveystatusnamebyid($spdataarray['product_delivery_status']);?></span>
                      </td>
                      <td class="product-remove">
                          <a href="#" onclick="removeFromCartView(event,<?php echo $key; ?>" class="text-right pl-4">
                              <i class="la la-trash"></i>
                          </a>
                      </td>
                  </tr>
              <?php $subtotal[] = $spdataarray['subtotal_price'];
                    $discount_amount[] = (isset($spdataarray['discount_amount']) ? $spdataarray['discount_amount'] : 0);
                    $s++; 
              } ?>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
          <p class="lead">Payment Methods: <b><?php echo $orderdata['payment_type']; ?></b></p>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <!-- <p class="lead">Amount Due 2/22/2014</p> -->

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Subtotal:</th>
                <td><?php echo CURRENCY ." ".array_sum($subtotal); ?></td>
              </tr>
              
              <tr>
                <th>Coupon Discount</th>
                <td><?php echo CURRENCY ." ".$orderdata['coupon_discount']; ?></td>
              </tr>
              <tr>
                <th>Shipping Charge</th>
                <td><?php echo CURRENCY ." ".$orderdata['shipping_charge']; ?></td> 
              </tr>
              <tr>
                <th>Total:</th>
                <td><?php echo CURRENCY ." ".$orderdata['grand_total']; ?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <div class="row" style="padding: 10px">
          <div class="col-md-12" style="height: 243px;" id="gmap"></div>
          <input type="hidden" id="fromlatitude" value="<?php echo (isset($shop_data['latitude']) ? $shop_data['latitude'] : '');?>">
            <input type="hidden" id="fromlongitude" value="<?php echo (isset($shop_data['longitude']) ? $shop_data['longitude'] : '');?>">

          <div id="infowindow-content">
            <img src="" width="16" height="16" id="place-icon">
            <input type="hidden" id="latitude" value="<?php echo (isset($shippingifo['latitude']) ? $shippingifo['latitude'] : '');?>">
            <input type="hidden" id="longitude" value="<?php echo (isset($shippingifo['longitude']) ? $shippingifo['longitude'] : '');?>">


            <!-- <span id="place-name"  class="title">Indore</span><br> -->
            <span id="place-address"><?php echo (!empty($shippingifo) && !empty($shippingifo['address']) ? $shippingifo['address'] : ""); ?></span>
          </div>
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="javascript:void(0)" target="_blank" class="btn btn-default printinvoice"><i class="fa fa-print"></i> Print</a>
          <?php if($orderdata['delivery_status'] == 1){ ?>
            <a href="javascript:void(0)" href-id="<?php echo $orderdata['id']?>" class="btn btn-success accept_order" href-status="0" > <span>Accept</span> </a>
          <?php  } ?>
          <?php if($orderdata['delivery_status'] == 2){ ?>
            <a href="javascript:void(0)" href-id="<?php echo $orderdata['id']?>" class="btn btn-success received_order" href-status="0" > <span>Received Order </span> </a>
          <?php  } ?>
          <?php if($orderdata['delivery_status'] == 3){ ?>
            <a href="javascript:void(0)" href-id="<?php echo $orderdata['id']?>" class="btn btn-success confirm_order" href-status="0" > <span>Confirm Order </span> </a>
          <?php  } ?>
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
</div>
<script type="text/javascript">
  $('a.printinvoice').click(function(){
             window.print();
             return false;
  });
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlk9jl3b8NvuKXQm6rft78c5T_PLe7gRg&libraries=places&callback=initMap" async defer></script>

<script type="text/javascript">
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

// function initMap() {
//     var directionsDisplay = new google.maps.DirectionsRenderer;
//     var directionsService = new google.maps.DirectionsService;
//     var map = new google.maps.Map(document.getElementById('gmap'), {
//       zoom: 14,
//       //center: {lat: 37.77, lng: -122.447}
//     });
//     directionsDisplay.setMap(map);

//     calculateAndDisplayRoute(directionsService, directionsDisplay);
//     /*document.getElementById('mode').addEventListener('change', function() {
//       calculateAndDisplayRoute(directionsService, directionsDisplay);
//     });*/
//     var latitude = ($("#fromlatitude").val() != "")? parseFloat($("#fromlatitude").val()) : 22.71720790;
//     var longitude = ($("#fromlongitude").val() != "")? parseFloat($("#fromlongitude").val()) : 75.86841130;

//     alert(latitude);

//     var post = "Dirver last position.";
//     var e = new google.maps.LatLng(latitude, longitude);
//     marker = new google.maps.Marker({position: e, map: map});
//     //map.streetViewControl = !1;
    
//     infowindow = new google.maps.InfoWindow({content: post});

//     google.maps.event.addListener(marker, 'click', function() {
//         /*infowindow = new google.maps.InfoWindow({
//             content: 'Hello, World!!'
//         });*/
//         infowindow.open(map, marker);
//     });
// }

// function calculateAndDisplayRoute(directionsService, directionsDisplay) 
// {
  
//   var from_lat = ($("#fromlatitude").val() != "")? parseFloat($("#fromlatitude").val()) : 22.71720790;
//   var from_long = ($("#fromlongitude").val() != "")? parseFloat($("#fromlongitude").val()) : 75.86841130;

//   var to_lat = ($("#latitude").val() != "")? parseFloat($("#latitude").val()) : 22.71720790;
//   var to_long = ($("#longitude").val() != "")? parseFloat($("#longitude").val()) : 75.86841130;
//   alert(from_long);
//   directionsService.route({
//     origin: {lat: from_lat, lng: from_long},  // Haight.
//     destination: {lat: to_lat, lng: to_long},  // Ocean Beach.
//     // Note that Javascript allows us to access the constant
//     // using square brackets and a string value as its
//     // "property."
//     travelMode: google.maps.TravelMode['DRIVING']
//   }, function(response, status) {
//     if (status == 'OK'){
//       directionsDisplay.setDirections(response);
//     }
//   });
// }
</script>
<script>
$("#checkAl").click(function () {
$('input:checkbox').not(this).prop('checked', this.checked);
});

$(".deleteselected").click(function(e){
    // alert("hi");
    var ids = new Array();
    var o_id = $("#o_id").val();
    // alert(o_id); 
    $("input:checkbox[name=check]:checked").each(function () {
      ids.push($(this).val());
        // alert(" Value: " + $(this).val());
    });
    if(ids.length > 0){
      console.log(ids);
      $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>adminnew/ChangeMultipleOrderStatus",
        data:{table:'orders',pid:ids,o_id:o_id,action:"cancel",dstatus:5},
        dataType:'json',
        success: function(response) {
          if (response.status == 1){
            $.notify(response.msg, "success");
            setTimeout(function(){location.reload()},1000);
          }else{
            $.notify(response.msg, "error");
          }
        }
      });
    }else{
      alert('please select any one product.');
    }
});

$(".returnselected").click(function(e){
    // alert("hi");
    var ids = new Array();
    var o_id = $("#o_id").val();
    // alert(o_id); 
    $("input:checkbox[name=check]:checked").each(function () {
      ids.push($(this).val());
        // alert(" Value: " + $(this).val());
    });
    if(ids.length > 0){
      console.log(ids);
      $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>adminnew/ChangeMultipleOrderStatus",
        data:{table:'orders',pid:ids,o_id:o_id,action:"Return",dstatus:6},
        dataType:'json',
        success: function(response) {
          if (response.status == 1){
            $.notify(response.msg, "success");
            setTimeout(function(){location.reload()},1000);
          }else{
            $.notify(response.msg, "error");
          }
        }
      });
    }else{
      alert('please select any one product.');
    }
});

$(".completeselected").click(function(e){
    // alert("hi");
    var ids = new Array();
    var o_id = $("#o_id").val();
    // alert(o_id); 
    $("input:checkbox[name=check]:checked").each(function () {
      ids.push($(this).val());
        // alert(" Value: " + $(this).val());
    });
    if(ids.length > 0){
      console.log(ids);
      $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>adminnew/ChangeMultipleOrderStatus",
        data:{table:'orders',pid:ids,o_id:o_id,action:"complete",dstatus:4},
        dataType:'json',
        success: function(response) {
          if (response.status == 1){
            $.notify(response.msg, "success");
            setTimeout(function(){location.reload()},1000);
          }else{
            $.notify(response.msg, "error");
          }
        }
      });
    }else{
      alert('please select any one product.');
    }
});
</script>