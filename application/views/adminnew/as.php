 public function SaveRequest(){
        // $data1=array();
        //	if(isset($_POST) &&  !empty($_POST)){
        $session_userdata = $this->session->userdata(USER_SESSION);
        $data['user_id'] = $session_userdata['subscriber_id'];
        $isert = array();
        
        $product_id = !empty($_POST['name']) ? $_POST['name'] : '';
            if (!empty($product_id)){
                $productname = $this->Common_model->getSingleRecordById('topcategory', array("id" => $product_id));
            
               
               
            }
        
        
        $isert['shop_category_id'] = !empty($_POST['id']) ? $_POST['id'] : '';
        if ($isert['shop_category_id'] == 11) {
            $isert['vehical'] = !empty($_POST['name']) ? $_POST['name'] : '';
            $isert['vehical_type'] = !empty($_POST['brand_name']) ? $_POST['brand_name'] : '';
            $isert['need_driver'] = !empty($_POST['dirver']) ? $_POST['dirver'] : '';
            $isert['description'] = !empty($_POST['description']) ? $_POST['description'] : '';
            $isert['source'] = !empty($_POST['sourcer']) ? $_POST['sourcer'] : '';
            $isert['destination'] = !empty($_POST['destination']) ? $_POST['destination'] : '';
            $isert['nums_of_days'] = !empty($_POST['no_of_days']) ? $_POST['no_of_days'] : '';
            $isert['nums_of_people'] = !empty($_POST['no_of_peaople']) ? $_POST['no_of_peaople'] : '';
        } else if ($isert['shop_category_id'] != 9 && $isert['shop_category_id'] != 10 && $isert['shop_category_id'] == 12 || $isert['shop_category_id'] == 13 && $isert['shop_category_id'] != 11 && $isert['shop_category_id'] != 14) {
            $isert['service_type'] = !empty($_POST['name']) ? $_POST['name'] : '';
            $isert['date'] = !empty($_POST['datepr']) ? $_POST['datepr'] : '';
        } else if ($isert['shop_category_id'] == 14 && $isert['shop_category_id'] != 10 && $isert['shop_category_id'] != 9 && $isert['shop_category_id'] != 7) {
            $isert['service_type'] = !empty($_POST['name']) ? $_POST['name'] : '';
            $isert['duration'] = !empty($_POST['duration']) ? $_POST['duration'] : '';
        } else if ($isert['shop_category_id'] == 10 && $isert['shop_category_id'] != 9){
            $isert['service_type'] = !empty($_POST['name']) ? $_POST['name'] : '';
        } else if ($isert['shop_category_id'] == 9 && $isert['shop_category_id'] != 8 && $isert['shop_category_id'] != 7) {
            $isert['medicine'] = !empty($_POST['medicine']) ? $_POST['medicine'] : '';
            $isert['dosage'] = !empty($_POST['dosage']) ? $_POST['dosage'] : '';
            $isert['quantity'] = !empty($_POST['quantity']) ? $_POST['quantity'] : '';
            $isert['medicine'] = !empty($_POST['medicine']) ? $_POST['medicine'] : '';
        } else if ($isert['shop_category_id'] == 8 && $isert['shop_category_id'] != 9 && $isert['shop_category_id'] != 7) {
            $isert['room_type'] = !empty($_POST['name']) ? $_POST['name'] : '';
            $isert['occupancy'] = !empty($_POST['brand_name']) ? $_POST['brand_name'] : '';
            $isert['checking_date'] = !empty($_POST['Checkin_date']) ? $_POST['Checkin_date'] : '';
            $isert['checkingout_date'] = !empty($_POST['Checkout_date']) ? $_POST['Checkout_date'] : '';
            $isert['nums_of_rooms'] = !empty($_POST['no_of_room']) ? $_POST['no_of_room'] : '';
            $isert['nums_of_guest'] = !empty($_POST['no_of_guest']) ? $_POST['no_of_guest'] : '';
            $isert['nums_of_guest'] = !empty($_POST['no_of_guest']) ? $_POST['no_of_guest'] : '';
            
        
        } else if ($isert['shop_category_id'] == 7) {
            $isert['product'] = !empty($_POST['name']) ? $_POST['name'] : '';
            $isert['brand'] = !empty($_POST['brand_name']) ? $_POST['brand_name'] : '';
            $isert['model'] = !empty($_POST['model']) ? $_POST['model'] : '';
        } else {
         $isert['product'] = !empty($productname['title']) ? $productname['title'] : '';
         
          $brand_id = !empty($_POST['brand_name']) ? $_POST['brand_name'] : '';
          if (!empty($brand_id)){
                $brandname = $this->Common_model->getSingleRecordById('subcategory', array("id" => $brand_id));
        

            $isert['brand'] = !empty($brandname['title']) ? $brandname['title'] : '';
        }
        }
        if ($isert['shop_category_id'] != 9 && $isert['shop_category_id'] == 8 || $isert['shop_category_id'] != 11 || $isert['shop_category_id'] == 12 || $isert['shop_category_id'] == 13 || $isert['shop_category_id'] == 10) {
            $isert['price'] = !empty($_POST['price']) ? $_POST['price'] : '';
        }
        
        $shop_id = $this->Common_model->GetWhere('shops', array('1' => '1'));
           
        $isert['city_id'] = !empty($_POST['city']) ? $_POST['city'] : '';
       // $isert['city'] = $_POST['city'];
        $isert['user_id'] = $data['user_id'];
        $isert['area'] = $_POST['area_name'];
        $isert['seller_id'] = $_POST['shop_id'];
        $isert['role_re'] = 'shop';
        $isert['created_date'] = date("Y-m-d H:i:s");
        $isert['request_date'] = date("Y-m-d");
        $isert['timer'] = date('Y-m-d H:i:s');
        $isert['request_time'] = time() * 1000 + 19800000;
        $isert['expiry_quote'] = time() * 1000 + 21600000;
        $result = $this->Common_model->addRecords('globalcategory', $isert);
        // $dummy=array();
        // $pname=!empty($_POST['name']) ? $_POST['name'] : '';
        //  $pcat_id=!empty($_POST['id']) ? $_POST['id'] : '';
        // $usr_by_pro = $this->Common_model->GetWhere('topcategory', array('title'=>$pname,'cat_id'=>$pcat_id));
        // $usr_by_shop = $this->Common_model->GetWhere('shops', array('user_id!='=>'','status'=>'1'));
        //if(!empty($usr_by_pro)){
        //   $uers=array();
        //  if(!empty($usr_by_shop)){
        //     foreach($usr_by_shop as $key=> $value){
        //       $uers[$key]['user_id']=$value['user_id'];
        //  }
        //   }
        $uers[]['user_id'] = $data['user_id'];
        $userss = array();
        if (!empty($uers)) {
            foreach ($uers as $key => $vl) {
                $userss[] = $vl['user_id'];
            }
        }
        $uniquusersas = array_unique($userss);
        $user_id = implode(',', $uniquusersas);
        $usrssid = str_replace(",,", ",", $user_id);
        $dummy['user_id'] = $user_id;
        $dummy['shop_category_id'] = !empty($_POST['id']) ? $_POST['id'] : '';
        $result_id = $this->Common_model->updateRecords('shops', $dummy, array('shop_category_id' => $_POST['id']));
        $sql = "SELECT * FROM shops WHERE user_id IN ($usrssid) AND shop_category_id=" . $_POST['id'];
        $query = $this->db->query($sql);
        $darashops = $query->result_array();
        //if(!empty($darashops)){
        $sellers = array();
        if (!empty($darashops)) {
            foreach ($darashops as $key => $value) {
                $sellers[$key]['seller_id'] = $value['shop_id'];
            }
        }
        // $sellress=array();
        //if(!empty($sellers)){
        // foreach($sellers as $key=> $vl){
        //  $sellress[]=$vl['seller_id'];
        //  $isert['seller_id']=$vl['seller_id'];
        //  $result = $this->Common_model->addRecords('globalcategory', $isert);
        //  }
        //  }
        // $seller_id=implode(',',$sellress);
        // $isert['seller_id']=$seller_id;
        // $sqlquery=$this->db->query("SELECT *, MAX(request_time) as request_time FROM globalcategory WHERE request_time < (now() - interval 30 minute) AND shop_category_id=".$_POST['id']);
        // $usr_by_req_global=$sqlquery->row_array();
        //  $usr_by_req_shop = $this->Common_model->GetWhere('globalcategory', array('user_id='=>$data['user_id'],'shop_category_id'=>$_POST['id'],'role_re'=>'shop'));
        //$usr_by_req_global = $this->Common_model->GetWhere('globalcategory', array('user_id='=>$data['user_id'],'shop_category_id'=>$_POST['id'],'role_re'=>'global'));
        // if(empty($usr_by_req_shop))
        // {
        if (!empty($result)) {
            $data1 = array("satus" => 1, "msg" => "Message send successfully");
        } else {
            $data1 = array("status" => 0, "msg" => "Message not send, please try again");
        }
        // }else{
   