
  <style type="text/css">
  .mt-4, .my-4 {
      margin-top: 1.5rem!important;
  }
  .bg-white{
      background-color: #fff!important;
  }
  *, ::after, ::before {
      box-sizing: border-box;
  }
  .form-box-title {
    border-bottom: 1px solid #eee;
    font-size: 15px;
    font-weight: 500;
    background: #f8f8f8;
   }
   .p-3 {
      padding: 1rem!important;
  }
  .m-10{
      margin: 10px;
  }
  .bgp{
    background-color: #f3f3f3;
  }
</style>

<!------ Include the above in your HEAD tag ---------->
<style>

    img{ max-width:100%;}
    .inbox_people {
      background: #f8f8f8 none repeat scroll 0 0;
      float: left;
      overflow: hidden;
      width: 40%; border-right:1px solid #c4c4c4;
    }
    .inbox_msg {
      border: 17px solid #c4c4c4;
      clear: both;
      overflow: hidden;
    }
    .top_spac{ margin: 20px 0 0;}


    .recent_heading {float: left; width:40%;}
    .srch_bar {
      display: inline-block;
      text-align: right;
      width: 60%; padding:
    }
    .headind_srch{ padding:10px 29px 10px 20px; overflow:hidden; border-bottom:1px solid #c4c4c4;}

    .recent_heading h4 {
      color: #05728f;
      font-size: 21px;
      margin: auto;
    }
    .srch_bar input{ border:1px solid #cdcdcd; border-width:0 0 1px 0; width:80%; padding:2px 0 4px 6px; background:none;}
    .srch_bar .input-group-addon button {
      background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
      border: medium none;
      padding: 0;
      color: #707070;
      font-size: 18px;
    }
    .srch_bar .input-group-addon { margin: 0 0 0 -27px;}

    .chat_ib h5{ font-size:15px; color:#464646; margin:0 0 8px 0;}
    .chat_ib h5 span{ font-size:13px; float:right;}
    .chat_ib p{ font-size:14px; color:#989898; margin:auto}
    .chat_img {
      float: left;
      width: 11%;
    }
    .chat_ib {
      float: left;
      padding: 0 0 0 15px;
      width: 88%;
    }

    .chat_people{ overflow:hidden; clear:both;}
    .chat_list {
      border-bottom: 1px solid #c4c4c4;
      margin: 0;
      padding: 18px 16px 10px;
    }
    .inbox_chat { height: 550px; overflow-y: scroll;}

    .active_chat{ background:#ebebeb;}

    .incoming_msg_img {
      display: inline-block;
      width: 6%;
    }
    .received_msg {
      display: inline-block;
      padding: 0 0 0 10px;
      vertical-align: top;
      width: 92%;
     }
     .received_withd_msg p {
      background: #ebebeb none repeat scroll 0 0;
      border-radius: 3px;
      color: #646464;
      font-size: 14px;
      margin: 0;
      padding: 5px 10px 5px 12px;
      width: 100%;
    }
    .time_date {
      color: #747474;
      display: block;
      font-size: 12px;
      margin: 8px 0 0;
    }
    .received_withd_msg { width: 57%;}
    .mesgs {
      float: left;
      padding: 30px 15px 0 25px;
      width: 100%;
    }

     .sent_msg p {
      background: #05728f none repeat scroll 0 0;
      border-radius: 3px;
      font-size: 14px;
      margin: 0; color:#fff;
      padding: 5px 10px 5px 12px;
      width:100%;
    }
    .outgoing_msg{ overflow:hidden; margin:26px 0 26px;}
    .sent_msg {
      float: right;
      width: 46%;
    }
    .input_msg_write input {
      background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
      border: medium none;
      color: #4c4c4c;
      font-size: 15px;
      min-height: 48px;
      width: 100%;
    }

    .type_msg {border-top: 1px solid #c4c4c4;position: relative;}
    .msg_send_btn {
      background: #05728f none repeat scroll 0 0;
      border: medium none;
      border-radius: 50%;
      color: #fff;
      cursor: pointer;
      font-size: 17px;
      height: 33px;
      position: absolute;
      right: 0;
      top: 11px;
      width: 33px;
    }
    .messaging { padding: 0 0 50px 0;}
    .msg_history {
      height: 516px;
      overflow-y: auto;
    }
</style>
<div class="content-wrapper">
<?php 
  $info_data = customerdata(customersessionid());
  $id = base64_decode($_GET['ticket_id']);
?>
<section>
<div class="container-fluid pt-10 bgp">
    <div class="row content m-10" style="padding: 0px";>
      
      <div class="col-sm-12 col-lg-12">
        <h3> <img src="<?php echo base_url().'common_assets/images/user.png';?>" style="width: 30px">Ticket ID: <?php echo $id?></h3>
        <h3 class=" text"><?php echo (isset($info_data['ticket_id']) ? $info_data['ticket_id'] : '');?></h3>
          <div class="messaging">
            <div class="inbox_msg">
              
              <div class="mesgs">
                <div class="msg_history">
                  <?php //krsort($support); ?>
                  <?php if(isset($support) && !empty($support)){ ?>
                  <?php foreach($support as $supportarray){ ?>

                      <?php if($supportarray['user_type'] == "admin"){ ?>
                        <div class="incoming_msg">
                          <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                          <div class="received_msg">
                            <div class="received_withd_msg">
                              <p><?php echo (isset($supportarray['message']) && !empty($supportarray['message']) ? $supportarray['message'] : ''); ?></p>
                              <span class="time_date"><?php echo (isset($supportarray['create_date']) && !empty($supportarray['create_date']) ? $supportarray['create_date'] : ''); ?></span></div>
                          </div>
                        </div>
                      <?php } ?>
                      <?php if($supportarray['user_type'] == "customer"){ ?>
                        <div class="outgoing_msg">
                          <div class="sent_msg">
                            <p><?php echo (isset($supportarray['message']) && !empty($supportarray['message']) ? $supportarray['message'] : ''); ?></p>
                            <span class="time_date"> <?php echo (isset($supportarray['create_date']) && !empty($supportarray['create_date']) ? $supportarray['create_date'] : ''); ?></span> 
                          </div>
                        </div>
                    <?php } ?>
                  <?php } }  ?> 
                  
                </div>

                 
                <div class="type_msg">
                  <div class="input_msg_write">
                  <form action ="" method ="post" id ="support_chat_form" enctype="multipart/form-data">
                    <input type="hidden" class="" name="ticket_id" id ="ticket_id" value="<?php echo $_GET['ticket_id']; ?>">
                    <input type="text" class="write_msg" name="message" placeholder="Type a message" />
                    <button class="msg_send_btn" type="button" id="message" name="message" value="message"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                  </form>
                  </div>
                </div>
                
              </div>
            </div>    
          </div>
      </div>
      
    </div>
</div>
</section>
</div>

<script>
  $( "#support_chat_form" ).submit(function( event ) {
    // alert( "Handler for .submit() called." );
    event.preventDefault();
    var form = $("#support_chat_form")[0];
    // alert(form);
    var data = new FormData(form);
      // alert(data);

    $.ajax({
    enctype: 'multipart/form-data',
    processData: false,  // Important!
    contentType: false,
    cache: false,
    type: "POST",
    dataType: "html",
    url: "<?php echo base_url()?>adminnew/submitmessage",
    data:data,
    success : function(data){
      // alert(data);
      // $.notify(data, "success");
      support_chat_message($("#ticket_id").val());
    },
    error: function(data) {
    //$(".detail_submit_btn").removeAttr('disabled');
    // $.notify("Oops something went wrong please try again", "error");
    // alert("error");
    },
    });
  });

  $(document).on("click", "#message", function(){
      $( "#support_chat_form" ).submit();
  });

  function support_chat_message(ticket_id){
    // alert(ticket_id);
    $.ajax({
    type: "POST",
    data:{"ticket_id":ticket_id},
    url: "<?php echo base_url()?>adminnew/support_chat_message",
    dataType: "html",
    success : function(data){
      // alert(data);
      // $.notify(data, "success");
      $('.msg_history').html(data);
    },
    error: function(data) {
    //$(".detail_submit_btn").removeAttr('disabled');
    // $.notify("Oops something went wrong please try again", "error");
    // alert("error");
    },
    });
  }
</script>  