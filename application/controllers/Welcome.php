<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	 
	 function __construct()

	{

		parent::__construct();
		$this->load->database('admin');
     	$this->load->helper('url');
     		$this->load->model('Common_model');


	//	$this->SessionModel->checkadminlogin(array("login","loginajax"));

	}

	public function index()
	{
		if($this->input->post('login'))
		{
			$e=$this->input->post('email_id');
			$p=$this->input->post('pass');
	
			$que=$this->db->query("select * from admin where email_id='".$e."' and password='$p'");
			$row = $que->num_rows();
			if($row)
			{
			redirect('https://ezheal.in/admin/welcome');
			}
			else
			{
		$data['error']="<h3 style='color:red'>Invalid login details</h3>";
			}	
		}
		$this->load->view('login',@$data);		
	}

		
		
		
	
	
	    
	    public function process()  
    {  
        $user = $this->input->post('user');  
        $pass = $this->input->post('pass');  
        if ($user=='admin@admin.com' && $pass=='123456')   
        {  
            //declaring session  
            $this->session->set_userdata(array('user'=>$user));  
            $this->load->view('welcome');  
        }  
        else{  
            $data['error'] = 'Your Account is Invalid';  
            $this->load->view('login', $data);  
        }  
    }  

	
	
	public function welcome()
	{
	     //$this->load->view('sidebar');
		$this->load->view('welcome_message');
	}
	
	
	
	
	
	public function doctor()
	{
		$this->load->view('doctor');
	}

	public function blog()
	{
		$this->load->view('blog');
	}
	public function banner()
	{
		$this->load->view('banner');
	}
	public function addbanner()
	{
		$this->load->view('addbanner');
	}
	public function unit()
	{


        $data=array();
    	if(!empty($_POST)){
    		$data['name']=$_POST['name'];
    		$data['unit']=$_POST['unit'];
    		$data['create_date']=date('Y-m-d H:i:s');
    		$result = $this->Common_model->addRecords('unit',$data);
    		if(!empty($result)){
    			$data['success']="unit add successfully";
    			redirect('https://ezheal.in/admin/unitlist');
    		}else{
    			$data['error']="unit  not add, please try again";
    		}
    	}
        

		$this->load->view('unit');
	}
	
	
	
	
	public function notification()
	{


        $data=array();
    	if(!empty($_POST)){
    		$data['user_type']=$_POST['user_type'];
    		$data['username']=$_POST['username'];
    		$data['title']=$_POST['title'];
    		$data['message']=$_POST['message'];
    		$data['create_date']=date('Y-m-d H:i:s');
    		$result = $this->Common_model->addRecords('notification',$data);
    		if(!empty($result)){
    			$data['success']="notification add successfully";
    			redirect('https://ezheal.in/admin/notificationlist');
    		}else{
    			$data['error']="notification  not add, please try again";
    		}
    	}
        

		$this->load->view('notification');
	}
	
	public function notificationlist()

	{

		$data = array();

		$data['notificationlist'] = $this->Common_model->getWhereData('notification',$data);

		$this->load->view('notificationlist',$data);

		

	}

	
	
	
		public function clinician()
	{


        $data=array();
    	if(!empty($_POST)){
    		$data['user_type']=$_POST['user_type'];
    		$data['clinician_name']=$_POST['clinician_name'];
    		$data['qualification']=$_POST['qualification'];
    		$data['experience']=$_POST['experience'];
    		$data['description']=$_POST['description'];
    		$data['pimage']=$_POST['pimage'];
    		$data['gender']=$_POST['gender'];
    		$data['password']=$_POST['password'];
    		
    		$data['specializaition']=$_POST['specializaition'];
    		$data['phone']=$_POST['phone'];
    		$data['email_id']=$_POST['email_id'];
    	//	$data['document_status']=$_POST['document_status'];
    		$data['doucment_name']=$_POST['doucment_name'];
    		$data['doucment']=$_POST['experience'];
    		$data['experience']=$_POST['experience'];
    		$data['experience']=$_POST['experience'];
    		
    		$data['create_date']=date('Y-m-d H:i:s');
    		$result = $this->Common_model->addRecords('Clinician',$data);
    		if(!empty($result)){
    			$data['success']="unit add successfully";
    			redirect('https://ezheal.in/admin/clinicianlist');
    		}else{
    			$data['error']="unit  not add, please try again";
    		}
    	}
        

		$this->load->view('clinician');
	}

	public function addtax()
	{


        $data=array();
    	if(!empty($_POST)){
    		$data['name']=$_POST['name'];
    	
    		$data['percentage']=$_POST['percentage'];
			$data['create_date']=date('Y-m-d H:i:s');
    		$result = $this->Common_model->addRecords('tax',$data);
    		if(!empty($result)){
    			$data['success']="tax add successfully";
    			redirect('https://ezheal.in/admin/tax');
    		}else{
    			$data['error']="tax  not add, please try again";
    		}
    	}
        

		$this->load->view('addtax');
	}
		public function customers($id = "")
	{


        $data=array();
        	
    	if(!empty($_POST)){
    	
    			$data['name']=$_POST['name'];
    			$data['email']=$_POST['email'];
    			$data['mobile_no']=$_POST['mobile_no'];
    			$data['city']=$_POST['city'];
    			$data['address']=$_POST['address'];
    	    	$data['age']=$_POST['age'];
			$data['create_date']=date('Y-m-d H:i:s');
    		$result = $this->Common_model->addRecords('customers',$data);
    		if(!empty($result)){
    			$data['success']="tax add successfully";
    			redirect('https://ezheal.in/admin/customerlist');
    		}else{
    			$data['error']="tax  not add, please try again";
    		}
    	}
    			$this->load->view('customers');

	}
       	public function transation()
	{


        $data=array();
        	
    	if(!empty($_POST)){
    
    			$data['customer_id']=$_POST['customer_id'];
    			$data['purpose']=$_POST['purpose'];
    			$data['transaction_id']=$_POST['transaction_id'];
    		
    			$data['amount']=$_POST['amount'];
    	    
			$data['create_date']=date('Y-m-d H:i:s');
    		$result = $this->Common_model->addRecords('customer_transation',$data);
    		if(!empty($result)){
    			$data['success']="Transation add successfully";
    			redirect('https://ezheal.in/admin/transationlist');
    		}else{
    			$data['error']="Transation  not add, please try again";
    		}
    	}
    			$this->load->view('transation');

	}
     
	
	public function clinicianlist()

	{

		$data = array();

		$data['clinicianlist'] = $this->Common_model->getWhereData('Clinician',$data);
		$this->load->view('clinicianlist',$data);

	}

	//code by leastcode
	public function unitlist()

	{

		$data = array();

		$data['contactlist'] = $this->Common_model->getWhereData('unit',$data);

		$this->load->view('unitlist',$data);

		

	}

//code by leastcode
	
	
	
	
	
	
	
	
	public function tax()
	{
     	$data = array();

		$data['taxlist'] = $this->Common_model->getWhereData('tax',$data);

		$this->load->view('tax',$data);

	}


	public function customerlist()
	{
     	$data = array();

		$data['customer_list'] = $this->Common_model->getWhereData('customers',$data);

		$this->load->view('customerlist',$data);

	}
	
	public function transationlist()
	{
     	$data = array();

		$data['transationlist'] = $this->Common_model->getWhereData('customer_transation',$data);

		$this->load->view('transationlist',$data);

	}
	
	public function deleteRecord()   
    {
    
        $id = $_POST['id'];

        $table = $_POST['table'];

        $colwhr = $_POST['colwhr'];

      	$this->Common_model->deleteRecords($table,array($colwhr=>$id));
      	
      	$msg = array('status'=>1, 'msg'=>'Deleted successfully!');

		echo json_encode($msg);

		exit();

     	// redirect(base_url().'adminnew/Service_list', 'refresh');

    }
    public function deletedata()
{
  $id=$this->input->get('user_id');
  $response=$this->Common_model->deleterecords($id);
  if($response==true){
    echo "Data deleted successfully !";
}
  else{
    echo "Error !";
  }
}

 
  public function change_status(){

        $tablename = $_POST['tablename'];

        $status = $_POST['status'];

        $id = $_POST['id'];

        $action = $_POST['action'];

        $whrcol = $_POST['whrcol'];

        $whrstatuscol = $_POST['whrstatuscol'];

        $res = $this->Common_model->updateRecords($tablename, array($whrstatuscol=>$status), array($whrcol => $id));

        // $resp = array('code'=>SUCCESS,'message'=>'Record has been '.$action.'successfully');

        // echo json_encode($resp);

        $msg = array('status'=>1, 'msg'=>'Record has been '.$action.' successfully');

		echo json_encode($msg);

		exit();

    }
    public function store() {
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;
        $config['max_width'] = 1500;
        $config['max_height'] = 1500;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('files/upload_form', $error);
        } else {
            $data = array('image_metadata' => $this->upload->data());

            $this->load->view('files/upload_result', $data);
        }
    }
    
    public function category()
	{


        $data=array();
    	if(!empty($_POST)){
    	    $data['specialztion']=$_POST['specialztion'];
    		$data['name']=$_POST['name'];
    		$filearray = array();
			if (isset($_FILES)) {
			    //echo '<pre>';print_r($_FILES);die();
			    foreach ($_FILES as $key => $value){
			        //print_r($value['size']);
			        if($value['size'] > 0) {
						$filearraydata = $this->uploadcategoryfile($key);
			            $filearray[$key] = $filearraydata;
			        }else{
			            $this->session->set_flashdata('error_fileupload', 'File size is empty!');
			        }
			    }
			}

			if(isset($filearray['image'])){
				 $data['image']=$filearray['image'];
			}

			
    	    
    		
			$data['create_date']=date('Y-m-d H:i:s');
    		$result = $this->Common_model->addRecords('category',$data);
    		if(!empty($result)){
    			$data['success']="category add successfully";
    			redirect('https://ezheal.in/admin/categorylist');
    		}else{
    			$data['error']="category  not add, please try again";
    		}
    	}
        

		$this->load->view('category');
	}
	


	public function login()
	{
		$this->load->view('login');
	}
	
	public function categorylist()
	{
     	$data = array();

		$data['categorylist'] = $this->Common_model->getWhereData('category',$data);

		$this->load->view('categorylist',$data);

	}

public function clinicdetails()
	{


        $data=array();
    	if(!empty($_POST)){
    		$data['usertype']=$_POST['usertype'];
    	
    		$data['username']=$_POST['username'];
    			$data['address']=$_POST['address'];
    			$data['image']=$_POST['image'];
			$data['create_date']=date('Y-m-d H:i:s');
    		$result = $this->Common_model->addRecords('clinicdetails',$data);
    		if(!empty($result)){
    			$data['success']="clinic add successfully";
    			redirect('https://ezheal.in/admin/cliniclist');
    		}else{
    			$data['error']="clinic  not add, please try again";
    		}
    	}
        

		$this->load->view('clinicdetails');
	}
	
	public function cliniclist()
	{
     	$data = array();

		$data['cliniclist'] = $this->Common_model->getWhereData('clinicdetails',$data);

		$this->load->view('cliniclist',$data);

	}

	public function wallethistory()
	{
     	$data = array();

		$data['wallethistory'] = $this->Common_model->getWhereData('wallet_history',$data);

		$this->load->view('wallet_history',$data);

	}
public function request()
	{
     	$data = array();

		$data['requestlist'] = $this->Common_model->getWhereData('request',$data);

		$this->load->view('request',$data);

	}
public function earning()
	{
     	$data = array();

		$data['earninglist'] = $this->Common_model->getWhereData('earning',$data);

		$this->load->view('earning',$data);

	}

	
    
	
}
