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