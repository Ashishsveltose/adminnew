
<!-- iCheck -->
<script src="../common_assets/validatorjs/jquery.validate.min.js"></script>
<script src="../common_assets/validatorjs/validator.min.js"></script>
<script src="../common_assets/\notify/notify.js"></script>
<script src="../backend_assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#loginform").validator().on("submit", function (event){
        if (event.isDefaultPrevented()) {
            // console.log(event.isDefaultPrevented());
        } else {
            // everything looks good!
            event.preventDefault();
            loginform();
        }
    });

    function loginform(){
        $("#loginform .detail_submit_btn").attr('disabled', true);
        // Initiate Variables With Form Content
        var mobile_no = $("#mobile_no").val();
        var password = $("#password").val();
        var href = "<?php echo base_url()?>deliveryboy/loginajax";

        $.ajax({
            type: "POST",
            dataType: "json",
            url: href,
            data: { 
                    mobile_no:mobile_no,
                    password:password
                },
            success : function(data){
                if (data.status == 1){
                    $.notify(data.msg, "success");
                     setTimeout(function(){window.location.href="<?php echo base_url();?>deliveryboy"},1000);


                } else {
                    $.notify(data.msg, "error");
                }
            },
            error: function(data) {
                $.notify(data.msg, "Oops Something went wrong");
            },
        });
    } 
});
</script>
</body>
</html>