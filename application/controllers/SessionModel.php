<?php defined('BASEPATH') OR exit('No direct script access allowed');
class SessionModel extends CI_Model 
{
	public function __construct()
	{
	}

	public function checkadminlogin($allow)
	{
	   $f_name = $this->router->fetch_method();
       $user = $this->session->userdata(ADMIN_SESSION);
      
       if(empty($user))
       {
	   		
      	  if(in_array($f_name, $allow))		
	      {
	      	return true;
	      	exit();
	      }else
	      {
	      	redirect("/adminnew/login");
	      }
       }
	}

	public function checkshoplogin($allow)
	{
	   $f_name = $this->router->fetch_method();
       $user = $this->session->userdata(SHOP_SESSION);
      
       if(empty($user))
       {
	   		
      	  if(in_array($f_name, $allow))		
	      {
	      	return true;
	      	exit();
	      }else
	      {
	      	redirect("/shop/login");
	      }
       }
	}
	public function checkshoplogin1($allow)
	{
	   $f_name = $this->router->fetch_method();
       $user = $this->session->userdata(SHOP_SESSION);
      
       if(empty($user))
       {
	   		
      	  if(in_array($f_name, $allow))		
	      {
	      	return true;
	      	exit();
	      }else
	      {
	      	redirect("/home/vendor_registration");
	      }
       }
	}

	public function checkdeliveryboylogin($allow)
	{
	   $f_name = $this->router->fetch_method();
       $user = $this->session->userdata(DELIVERYBOY_SESSION);
      
       if(empty($user))
       {
	   		
      	  if(in_array($f_name, $allow))		
	      {
	      	return true;
	      	exit();
	      }else
	      {
	      	redirect("/deliveryboy/login");
	      }
       }
	}

	public function checkuserlogin($allow)
	{
	   $f_name = $this->router->fetch_method();
       $user = $this->session->userdata(USER_SESSION);
      
       if(empty($user))
       {
	   		
      	  if(in_array($f_name, $allow))		
	      {
	      	return true;
	      	exit();
	      }else
	      {
	      	redirect("/home");
	      }
       }
	}

}

?>