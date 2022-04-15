<style type="text/css">
	.dropzone {
	  cursor: pointer;
	  border: 2px dashed #0087F7;
	  border-radius: 5px;
	  background: #fafafa;
	  min-height: 150px;
	  padding: 54px 54px;
	  margin-bottom: 25px;
	}
	.fileupload{
	  position: absolute;
	  width: 100%;
	  height: 100%;
	  top:0;
	  right: 0;
	  cursor: pointer;
	  opacity: 0;
	}
	.bspHasModal{
	  list-style-type: none;
	}
	.mb-3{
		margin-bottom: 10px;
	}
	input:checked + .slider {
	    background-color: rgb(100, 189, 99);
	}
	.slider {
	    position: absolute;
	    cursor: pointer;
	    top: 0;
	    left: 0;
	    right: 0;
	    bottom: 0;
	    background-color: #888888;
	    -webkit-transition: .4s;
	    transition: .4s;
	}
	.slider.round {
	    border-radius: 20px;
	}
	.slider:before {
	    position: absolute;
	    content: "";
	    height: 18px;
	    width: 18px;
	    left: 0px;
	    bottom: 0px;
	    background-color: white;
	    -webkit-transition: .4s;
	    transition: .4s;
	}
	.switch {
	    position: relative;
	    display: inline-block;
	    width: 38px;
	    height: 18px;
	}
	.custom-input-file--4 + label {
	    background: transparent;
	    padding: 0;
	}
	.custom-input-file {
	    width: 0.1px;
	    height: 0.1px;
	    opacity: 0;
	    outline: none;
	    overflow: hidden;
	    position: absolute;
	    z-index: -1;
	}
	.custom-input-file + label {
	    max-width: 80%;
	    font-size: 0.875rem;
	    font-weight: 600;
	    text-overflow: ellipsis;
	    white-space: nowrap;
	    cursor: pointer;
	    display: block;
	    overflow: hidden;
	    padding: 0.625rem 1.25rem;
	    border: 1px solid #e6e6e6;
	    border-radius: 2px;
	    color: #FFF;
	    outline: none;
	}
	.custom-input-file--4+label strong {
	    color: #676767;
	    background-color: #e6e6e6;
	    font-size: 14px;
	    padding: 0.4rem 1.25rem;
	    font-weight: 400;
	}
	.custom-input-file--4 + label strong {
	    float: right;
	    height: 100%;
	    color: #000;
	    display: inline-block;
	    font-weight: 600;
	}
	label{
		font-size: 15px;
	}
	.box{
		padding: 10px;
		box-shadow: none;
	}
</style>
<style type="text/css">
  .fa-toggle-on{
    color: #00a65a;
    font-size: 26px;
  }
  .fa-toggle-off{
    font-size: 26px;
  }
  .f24{
  	color: #000;
    font-size: 24px;
    font-weight: 600;
  }
</style>
<link rel="stylesheet" href="<?php echo base_url();?>common_assets/editor/jodit.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
<style type="text/css">
	.select2-container--default .select2-selection--multiple .select2-selection__choice {
	    color: #000;
	}
</style>
<div class="content-wrapper">
	<section class="content-header">
		<h1> <img src="<?php echo base_url().'common_assets/images/productcarticon.png';?>" style="width: 30px">Product( <?php echo $product_data['product_reg_id'];?>)  Shop (<?php echo $this->Common_model->getWhereDataByCol('shops',array('shop_id'=>$product_data['shop_id']),'shop_reg_id');?>)</h1>
	</section>
	<section class="content">
	    <div class="row">
	    	<div class="col-xs-12" style="background-color: #fff">
	    		<div class="row">
			        <div class="box box-primary">
			            <input type="hidden" name="product_id" value="<?php echo (isset($product_data) && !empty($product_data['product_id']) ? $product_data['product_id'] : "" )?>">
			            <div class="col-md-6">
			            	<?php if(!empty($categorylist) ){ 
			            			//p($product_data);
			            		?>
			                  <div class="form-group">
			                    <label>Category</label>
			                    <select class="form-control" name="categories_id" id="category"  disabled>
			                      <option value="">Select Any Category</option>
			                      <?php 
			                      foreach ($categorylist as $categorylist) {
			                      ?>
			                        <option value="<?php echo $categorylist['categories_id']?>" <?php echo (isset($product_data['categories_id']) && $product_data['categories_id'] == $categorylist['categories_id'] ? "selected" : ''); ?>><?php echo $categorylist['category_name'];?></option>
			                      <?php
			                      }
			                      ?>
			                    </select>
			                  </div>
			                  <div class="form-group subcategorylist" disabled>
			                  	<?php if(isset($product_data['sub_categories_id']) && !empty($product_data['sub_categories_id'])){ 
			                  		$subcategory =  $this->Common_model->getwhere("categories",array('status'=>1,'parent_category_id'=>$product_data['categories_id']));
			                  	?>
				                  	<select class="form-control" name="sub_categories_id" id="sub_categories_id">
									  <option value="">Select Sub Category</option>
									  <?php 
									  foreach ($subcategory as $subcategory){
									  ?>
									    <option value="<?php echo $subcategory['categories_id']?>" <?php echo (isset($product_data['sub_categories_id']) && $product_data['sub_categories_id'] == $subcategory['categories_id'] ? "selected" : ''); ?> ><?php echo $subcategory['category_name'];?></option>
									  <?php
									  }
									  ?>
									</select>
								<?php } ?>
			                  </div>
							<?php } ?>
			              <div class="form-group">
			                <label>Product Name</label>
			                <input type="text" class="form-control" name="name" value="<?php echo (!empty($product_data) && !empty($product_data['name']) ? $product_data['name'] : "" )?>" disabled>
			              </div>
			              <div class="form-group">
			                <label>Description &nbsp;<b style="color:#ff0000;">*</b></label>
			                            
                            <textarea class="form-control editor" rows="5" name="description" id="description" value="<?php echo (!empty($product_data['description']))? $product_data['description']:''; ?>" > <?php echo (!empty($product_data['description']))? $product_data['description']:''; ?> </textarea>
                            <div class="help-block with-errors"></div>
			              </div>
			              <div class="form-group">
			                <label>Quantity</label>
			                <input type="number" class="form-control" name="quantity" value="<?php echo (!empty($product_data) && !empty($product_data['quantity']) ? $product_data['quantity'] : "" )?>" disabled>
			                <?php if(isset($error_email) && !empty($error_email)){echo "<span class='error'>$error_email</span>";}?>
			              </div>
			            </div>
			            <div class="col-md-6">
			              	<div class="form-group">
			                  <label>Unit Price</label>
			                  <input type="text" class="form-control" step="0.01" name="unit_price" value="<?php echo (!empty($product_data) && !empty($product_data['unit_price']) ? $product_data['unit_price'] : "" )?>" disabled>
			                </div>
			                <div class="form-group">
			                  <label>Discount</label>
			                  <input type="number" step="0.01" class="form-control" name="discount" value="<?php echo (!empty($product_data) && !empty($product_data['discount']) ? $product_data['discount'] : "" )?>" disabled>
			                </div>
			                <div class="form-group">
			                  <label>Discount Type</label>
			                  <select class="form-control" name="discount_type" disabled>
			                  	<option  value="">Select Discount Type</option>
			                  	<option value="1" <?php echo (isset($product_data['discount_type']) && $product_data['discount_type'] == 1 ? "selected" : ''); ?> >%</option>
			                  	<option value="2" <?php echo (isset($product_data['discount_type']) && $product_data['discount_type'] == 2 ? 'selected' : ''); ?> >FLAT</option>
			                  </select>
			                </div>

			                <div class="form-group">
				                <label>Return Policy &nbsp;<b style="color:#ff0000;">*</b></label>
				                            
	                            <textarea class="form-control editor" rows="5" name="return_policy" id="return_policy" value="<?php echo (!empty($product_data['return_policy']))? $product_data['return_policy']:''; ?>" > <?php echo (!empty($product_data['return_policy']))? $product_data['return_policy']:''; ?> </textarea>
	                            <div class="help-block with-errors"></div>
				              </div>
			            </div>
						<div class="col-md-12">
							<label>Main Image <small>(290x300)</small> <span class="required-star">*</span></label>
							<?php if(isset($product_data['main_image']) && !empty($product_data['main_image'])){ ?>
									<img src="<?php echo base_url().'uploads/product_images/'.$product_data['main_image']?>" class="img-responsive">
							<?php } ?>
                            
                        </div>
			            <div class="col-md-12">
							<div class="form-group" style="margin-bottom: 25px;">
								<div class="col-md-5" style="padding: 0px">
									<label>Product Images</label>
								</div>
							</div>
							<div class="clearfix"></div>
							<ul class="row first" id="product_galary_list">
								<?php if(isset($product_data['product_images']) && !empty($product_data['product_images']) && !empty($product_data['product_images'])){ 

									 $product_images = json_decode($product_data['product_images'],true);
								?>
								<?php foreach($product_images as $dgl){ ?>
								<li class="col-lg-2 col-md-4 col-sm-3 col-xs-4 col-xxs-12 bspHasModal <?php echo $dgl; ?>" data-bsp-li-index="9">
									<div class="imgWrapper">
										<!-- <input type="hidden" name="previous_photos[]" value="<?php echo $dgl; ?>"> -->
										<!-- <button type="button" class="btn btn-danger close-btn remove-files pull-right"><i class="fa fa-times"></i></button> -->
										<img alt="Cool colors" src="<?php echo base_url().'uploads/product_images/'.$dgl; ?>" class="img-responsive"></div>
								</li>
								<?php } } ?>
							</ul>
						</div>

						<div class="col-md-12 form-box bg-white mt-4">
                            <div class="form-box-title px-3 py-2">
                               <label> Customer Choice</label>
                            </div>
                            <div class="form-box-content p-3">
                                <div class="row mb-3">
                                    <div class="col-md-8 col-md-3 order-1 order-md-0">
    									<input type="text" class="form-control" value="Colors" disabled>
    								</div>
    								<div class="col-md-12 col-md-7 col-xl-8 order-3 order-md-0 mt-2 mt-md-0">
    									<select class="form-control color-var-select js-example-basic-multiple" name="colors[]" id="colors" multiple>
    										<?php if(isset($color) && !empty($color)){ 
    												foreach($color as $color){
    											?>
    												<option value="<?php echo $color['code']; ?>" <?php if(isset($product_data) && !empty($product_data) && in_array($color['code'], json_decode($product_data['colors']))) echo 'selected'?>><?php echo $color['name'];?></option>
    										<?php } } ?>
    									</select>
    								</div>
    								<div class="col-md-4 col-xl-1 col-md-2 order-2 order-md-0 text-right">
    									<label class="switch" style="margin-top:5px;padding: 0px 10px 0px 0px;">
    										<input value="1" type="checkbox" name="colors_active" <?php if(isset($product_data) && !empty($product_data) && count(json_decode($product_data['colors'])) > 0) echo "checked";?> disabled>
    										<span class="slider round"></span>
    									</label>
    								</div>
                                </div>
                                <div id="customer_choice_options">
                                	<?php if(isset($product_data['choice_options']) && !empty($product_data['choice_options'])) { 
                                			foreach(json_decode($product_data['choice_options'],true) as $key => $choice_option){

                                	?>
    									<div class="row mb-3">
    										<div class="col-8 col-md-3 order-1 order-md-0">
    											<input type="hidden" name="choice_no[]" value="<?php echo explode('_', $choice_option['name'])[1]; ?>">
    											<input type="text" class="form-control" name="choice[]" value="<?php echo $choice_option['title']; ?>" placeholder="Choice Title">
    										</div>
    										<div class="col-12 col-md-7 col-xl-8 order-3 order-md-0 mt-2 mt-md-0">
    											<input type="text" class="form-control" name="choice_options_<?php  echo explode('_', $choice_option['name'])[1];?>[]" placeholder="Enter choice values" value="<?php echo implode(',', $choice_option['options']) ?>" data-role="tagsinput" onchange="update_sku()">
    										</div>
    										<!-- <div class="col-4 col-xl-1 col-md-2 order-2 order-md-0 text-right">
                                                <button type="button" onclick="delete_row(this)" class="btn btn-link btn-icon text-danger"><i class="fa fa-trash-o"></i></button>
                                            </div> -->
    									</div>
    								<?php } } ?>
                                </div>
                               <!--  <div class="row">
                                    <div class="col-md-12">
    									<button type="button" class="btn btn-info" onclick="add_more_customer_choice_option()">'Add More Customer Choice Option</button>
    								</div>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-md-12">

                        	<?php if(isset($product_data['variations']) && !empty($product_data['variations'])){
                        			$combinations = json_decode($product_data['variations'],true);
                        			// print_r($combinations);
                        	?>
                        		<table class="table table-bordered">
										<thead>
											<tr>
												<td class="text-center">
													<label for="" class="control-label">Variant</label>
												</td>
												<td class="text-center">
													<label for="" class="control-label">Variant Price</label>
												</td>
												<td class="text-center">
													<label for="" class="control-label">SKU</label>
												</td>
												<td class="text-center">
													<label for="" class="control-label">Quantity</label>
												</td>
											</tr>
										</thead>
									<tbody>
										<?php foreach ($combinations as $key => $combination){ 

												// print_r($combination);
												// echo $combination['price'] .''.$combination['sku'];
												// echo $key;
												// echo "<br>";
												// $sku = '';
												// foreach (explode(' ', $product_name) as $key => $value) {
												// 	$sku .= substr($value, 0, 1);
												// }

												// $str = '';
												// foreach ($combination as $key => $item){
												// 	if($key > 0 ){
												// 		$str .= '-'.str_replace(' ', '', $item);
												// 		$sku .='-'.str_replace(' ', '', $item);
												// 	}
												// 	else{
												// 		if($colors_active == 1){
												// 			// $color_name = \App\Color::where('code', $item)->first()->name;
												// 			$color_name = $this->UserModel->getWhereDataByCol("colors",array("code" => $item),"name");
												// 			$str .= $color_name;
												// 			$sku .='-'.$color_name;
												// 		}
												// 		else{
												// 			$str .= str_replace(' ', '', $item);
												// 			$sku .='-'.str_replace(' ', '', $item);
												// 		}
												// 	}
												// }
											?>
												
													<tr>
														<td>
															<label for="" class="control-label"><?php echo $key; ?></label>
														</td>
														<td>
															<input type="number" name="price_<?php echo $combination['price']; ?>" value="<?php echo $combination['price']; ?>" min="0" step="0.01" class="form-control"  disabled>
														</td>
														<td>
															<input type="text" name="sku_<?php echo $combination['sku']; ?>" value="<?php echo $combination['sku']; ?>" class="form-control" disabled>
														</td>
														<td>
															<input type="number" name="qty_<?php echo $combination['qty']; ?>" value="<?php echo $combination['qty']; ?>" min="0" step="1" class="form-control"  disabled>
														</td>
													</tr>
										<?php   
											}
										?>
									</tbody>
								</table>
							<?php }
								?>
								
                        </div>
                        <div class="col-md-12">
	                        <div class="form-group">
				                <label>Tags</label>
				                <input type="text" class="form-control" name="tags" value="<?php echo (!empty($product_data) && !empty($product_data['tags']) ? $product_data['tags'] : "" )?>" placeholder="Examle : Tshir,Polotshirt,tshirt" disabled>
				             </div>
				        </div>
				        <div class="col-md-12">
	                        <div class="form-group">
				                <label>Meta Title</label>
				                <input type="text" class="form-control" name="meta_title" value="<?php echo (!empty($product_data) && !empty($product_data['meta_title']) ? $product_data['meta_title'] : "" )?>" placeholder="Examle : Polo Tshir" disabled>
				             </div>
				        </div>
				        <div class="col-md-12">
	                        <div class="form-group">
				                <label>Meta Description</label>
				                <input type="text" class="form-control" name="meta_description" value="<?php echo (!empty($product_data) && !empty($product_data['meta_description']) ? $product_data['meta_description'] : "" )?>" disabled>
				             </div>
				        </div>
                        <div class="col-md-12">
							<?php if(isset($product_data['meta_image']) && !empty($product_data['meta_image'])){ ?>
									<img src="<?php echo base_url().'uploads/product_images/'.$product_data['meta_image']?>" class="img-responsive">
							<?php } ?>
                            <!-- <label>Meta Image <small>(50*50)</small></label>
                            <div class="col-md-12" style="padding: 0px">
                                <input type="file" name="meta_image"  >
                                
                            </div> -->
                        </div>
			            <div class="col-md-12" style="margin: 10px;">
			            	<!-- <button type="submit" name="submit" value="submit" class="btn btn-primary pull-right">Submit</button> -->
		                	<?php if($product_data['status'] == 1) { ?>
                              <a href="javascript:void(0)" href-id="<?php echo $product_data['product_id']?>" class="un_pulish_status f24" href-status="0" > <span>Publised</span> &nbsp;&nbsp;<i class="fa fa-toggle-on"></i></a>
                          	<?php  } ?>
                          	<?php if($product_data['status'] == 0) { ?>
                              <a href="javascript:void(0)" href-id="<?php echo $product_data['product_id']?>" class="pulish_status f24" href-status="1" ><span>Un Publised</span> &nbsp;&nbsp;<i class="fa fa-toggle-off"></i></a>
                          	<?php } ?>

                          	<?php if($product_data['featured_status'] == 1) { ?>
                              <a href="javascript:void(0)" href-id="<?php echo $product_data['product_id']?>" class="un_featured_status f24" href-status="0"> <span>Featured</span> &nbsp;&nbsp;<i class="fa fa-toggle-on"></i></a>
                          	<?php  } ?>
                          	<?php if($product_data['featured_status'] == 0) { ?>
                              <a href="javascript:void(0)" href-id="<?php echo $product_data['product_id']?>" class="featured_status f24" href-status="1" ><span>Featured</span> &nbsp;&nbsp;<i class="fa fa-toggle-off"></i></a>
                          	<?php } ?>
			            </div>
			          </form>
			        </div>
			     </div>
	    	</div>
	    </div>
	</section>
</div>
<script src="<?php echo base_url();?>common_assets/editor/jodit.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
	    // $('.js-example-basic-multiple').select2();
	   // update_sku();
	    $('.remove-files').on('click', function(){
            $(this).parents(".imgWrapper").remove();
        });
	    $('.color-var-select').select2({
	        templateResult: colorCodeSelect,
	        templateSelection: colorCodeSelect,
	        escapeMarkup: function(m) { return m; }
	    });

	    function colorCodeSelect(state) {
	        var colorCode = $(state.element).val();
	        if (!colorCode) return state.text;
	        return  "<span class='color-preview' style='background-color:"+colorCode+";'></span>" + state.text;
	    }

		$(".demo-select2-multiple-selects").select2();

		$('.editor').each(function(el){
			var $this = $(this);
	        var buttons = $this.data('buttons');
	        buttons = !buttons ? "bold,underline,italic,hr,|,ul,ol,|,align,paragraph,|,image,table,link,undo,redo" : buttons;

			var editor = new Jodit(this, {
	            "uploader": {
	                "insertImageAsBase64URI": true
	            },
	            "toolbarAdaptive": false,
	            "defaultMode": "1",
	            "toolbarSticky": false,
	            "showXPathInStatusbar": false,
	            "buttons": buttons,
	        });
		});

		$(".pulish_status").click(function(e){
		    var val = confirm("Sure you want to Publised Product ?");
		    var id = $(this).attr("href-id");
		    if(val){
		      $.ajax({
		        type: "POST",
		        url: "<?php echo base_url();?>adminnew/change_status",
		        data:{tablename:'product',id:id,status:1,whrcol:'product_id',whrstatuscol:'status',action:"Publised"},
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
		    }
		});

		$(".un_pulish_status").click(function(e){
		    var val = confirm("Sure you want to Un Publised Product ?");
		    var id = $(this).attr("href-id");
		    if(val){
		      $.ajax({
		        type: "POST",
		        url: "<?php echo base_url();?>adminnew/change_status",
		        data:{tablename:'product',id:id,status:0,whrcol:'product_id',whrstatuscol:'status',action:"Un Publised"},
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
		    }
		});

		$(".featured_status").click(function(e){
		    var val = confirm("Sure you want to Featured Product ?");
		    var id = $(this).attr("href-id");
		    if(val){
		      $.ajax({
		        type: "POST",
		        url: "<?php echo base_url();?>adminnew/change_status",
		        data:{tablename:'product',id:id,status:1,whrcol:'product_id',whrstatuscol:'featured_status',action:"Featured"},
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
		    }
		});

		$(".un_featured_status").click(function(e){
		    var val = confirm("Sure you want to Un Featured Product ?");
		    var id = $(this).attr("href-id");
		    if(val){
		      $.ajax({
		        type: "POST",
		        url: "<?php echo base_url();?>adminnew/change_status",
		        data:{tablename:'product',id:id,status:0,whrcol:'product_id',whrstatuscol:'featured_status',action:"Featured"},
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
		    }
		});
	});
</script>

      