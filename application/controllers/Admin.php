<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Admin extends CI_Controller {

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

	public function __construct(){
		parent::__construct();
	}
	
	public function createExcel() {
		$fileName = 'employee.xlsx';  
		$employeeData = $this->db->get("seodata")->result_array();
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
       	$sheet->setCellValue('A1', 'PageName');
        $sheet->setCellValue('B1', 'SEOTitle');
        $sheet->setCellValue('C1', 'SEODescription');
        $sheet->setCellValue('D1', 'SEOKeywords');       
        $rows = 2;
        foreach ($employeeData as $val){
            $sheet->setCellValue('A' . $rows, $val['pagename']);
            $sheet->setCellValue('B' . $rows, $val['seotitle']);
            $sheet->setCellValue('C' . $rows, $val['seodiscr']);
            $sheet->setCellValue('D' . $rows, $val['seokeyword']);
            $rows++;
        } 
        $writer = new Xlsx($spreadsheet);
		
		$writer->save("uploads/".$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."/uploads/".$fileName);              
    }    
	public function createCSV() {
		$fileName = 'employee.csv';  
		$employeeData = $this->db->get("seodata")->result_array();
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
       	$sheet->setCellValue('A1', 'PageName');
        $sheet->setCellValue('B1', 'SEOTitle');
        $sheet->setCellValue('C1', 'SEODescription');
        $sheet->setCellValue('D1', 'SEOKeywords');       
        $rows = 2;
        foreach ($employeeData as $val){
            $sheet->setCellValue('A' . $rows, $val['pagename']);
            $sheet->setCellValue('B' . $rows, $val['seotitle']);
            $sheet->setCellValue('C' . $rows, $val['seodiscr']);
            $sheet->setCellValue('D' . $rows, $val['seokeyword']);
            $rows++;
        } 
        $writer = new Xlsx($spreadsheet);

		$writer->save("uploads/".$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."/uploads/".$fileName);              
    }    
	public function index()
	{
		$get_data=$this->db->query("select browser,count(ip_address) as ip from visitor_count group by browser order by browser")->result_array();
		$page_data['visit_data']=$get_data;
		if($this->input->post()){
			$email = $this->input->post('email_id');
			$password=sha1($this->input->post('Password'));
			$result=$this->db->get_where('registered_data',array('email_id'=>$email,'password'=>$password))->result_array();
			$uid=$result[0]['id'];
			$first_name=$result[0]['first_name'];
			$last_name=$result[0]['last_name'];
			$email=$result[0]['email_id'];
			$user_role=$result[0]['role'];

			$this->session->set_userdata('login_uid',$uid);
			$this->session->set_userdata('login_first_name',$first_name);
			$this->session->set_userdata('login_last_name',$last_name);
			$this->session->set_userdata('login_email',$email);
			$this->session->set_userdata('login_role',$user_role);
			
			if ($this->session->userdata['login_role']){
				$page_data['page_title']="NXG Market Admin Panel";
				if ($this->session->userdata['login_role']=="Admin"){
					$page_data['page']='dashboard';
				}else{
					$page_data['page']='dashboard';
				}
				$this->load->view('admin/section/header', $page_data);
				$this->load->view('admin/index', $page_data);
				$this->load->view('admin/section/footer', $page_data);
				}
			if (!$result){
				echo "Wrong ID or Password";
			}
		}
		else {
			if ($this->session->userdata['login_role']){
				$page_data['page_title']="NXG Market Admin Panel";
				if ($this->session->userdata['login_role']=="Admin"){
					$page_data['page']='dashboard';
				}else{
					$page_data['page']='dashboard';
				}
				$this->load->view('admin/section/header', $page_data);
				$this->load->view('admin/index', $page_data);
				$this->load->view('admin/section/footer', $page_data);
			}else{
				$page_data['page_title']="Login Page";
				$page_data['page']='login';
				// $this->load->view('admin/section/header1', $page_data);
				$this->load->view('admin/login', $page_data);
			}
		}
	}
	public function captchaCheck($str){
		if ($str == 'Invalid Captcha')
		{	$this->form_validation->set_message('captchaCheck', 'Invalid Captcha');
			return FALSE;
		}elseif($str == ''){
			$this->form_validation->set_message('captchaCheck', 'Fill Captcha');
		}
		else{return TRUE;}
	}
	
	public function paneluser($action, $id=false){
		switch($action){
			case "view";
			// if ($this->session->userdata['login_email']){
				$team_data= $this->db->get("registered_data")->result_array();
				
				$page_data['page_title']="Panel User";
				$page_data['users']=$team_data;
				$page_data['page']='viewusers';
				$this->load->view('admin/section/header', $page_data);
				$this->load->view('admin/index', $page_data);
				$this->load->view('admin/section/footer', $page_data);
			// }
			break;
			case "add";
			if ($this->input->post()){
				$this->load->library('form_validation');
				$this->load->helper(array('form', 'url'));
				$this->form_validation->set_rules('first_name', 'first_name', 'required',array('required' => '-Missing First Name!'));
				$this->form_validation->set_rules('last_name', 'last_name', 'required',array('required' => '-Missing Last Name!'));
				$this->form_validation->set_rules('mobile', 'mobile', 'required',array('required' => '-Missing mobile number!'));
				$this->form_validation->set_rules('email_id', 'email_id', 'required',array('required' => '-Missing email id!'));
				$this->form_validation->set_rules('password', 'password', 'required',array('required' => '-Missing password!'));
				$this->form_validation->set_rules('inputMatchPassword', 'inputMatchPassword', 'required',array('required' => '-Missing re-enter password!'));
				$this->form_validation->set_rules('keycaptcha', 'keycaptcha', 'callback_captchaCheck');
				
				$captcha_stat=$this->input->post('keycaptcha');
				$first_name = $this->input->post('first_name');
				$last_name = $this->input->post('last_name');
				$email = $this->input->post('email_id');
				$pass_len=strlen($this->input->post('password'));
				$password=$this->input->post('password');
				$password_match=$this->input->post('inputMatchPassword');
				$mobile= $this->input->post('mobile');
				$user_role= "User"; //$this->input->post('role');
				$otp=$this->input->post('OTP');
				$otp1=$this->input->post('OTP1');
				$get_data=$this->db->get_where('registered_data',array('email_id'=>$email))->result_array();
				$get_data_mobile=$this->db->get_where('registered_data',array('mobile'=>$mobile))->result_array();
				$login_stat=0;

				//Check validations
				if ($this->session->userdata['singup_first_name'] and $otp==""){
					$login_stat=2;
				}
				elseif ($password!=$password_match){
					$page_data['message']="Password Mismatch!";
					$login_stat=1;
				}
				elseif ($get_data or $get_data_mobile){
					$page_data['message']="Email ID or mobile number Already Exist!";
					$login_stat=1;
				}elseif($captcha_stat!="Matched"){
					$page_data['message']="Invalid Captcha!";
					$login_stat=1;}
				elseif($pass_len<8){
					if ($this->session->userdata['singup_first_name']){
						$page_data['message']="Got It in session";
					}else{
						$page_data['message']="Password must be 8 character long";
					}
					$login_stat=1;
				}elseif($otp==""){
					$page_data['message']="Enter OTP sent via email";
					$login_stat=2;
				}elseif($otp1!=$otp){
					$page_data['message']="OTP Mismatch";
					$login_stat=2;
				}

				//set Session
				$this->session->set_userdata('singup_first_name',$first_name);
				$this->session->set_userdata('singup_last_name',$last_name);
				$this->session->set_userdata('singup_mobile',$mobile);
				$this->session->set_userdata('singup_email',$email);
				$this->session->set_userdata('singup_role',$user_role);
				$this->session->set_userdata('singup_password',$password);
				$this->session->set_userdata('singup_password_match',$password_match);

				if ($this->form_validation->run() == FALSE){
					$page_data['message']="Please fill all fields";
					$page_data['page']='signup';
					$this->load->view('admin/signup', $page_data);
				}elseif ($login_stat==1){
					$page_data['page_title']="Register New Login";
					$page_data['page']='signup';
					// $this->load->view('admin/section/header1', $page_data);
					$this->load->view('admin/signup', $page_data);
				}elseif ($login_stat==2){
					if ($user_role=="User"){
						$otp1=$this->email_otp($email);
					}else{
						$otp1=$this->email_otp('qaim@yamarkets.com');
					}
					$this->session->set_userdata('singup_otp',$otp1);
					$page_data['page_title']="Register New Login";
					$page_data['page']='signup';
					// $this->load->view('admin/section/header1', $page_data);
					$this->load->view('admin/signup', $page_data);
				}else{
					$data=array(
						"first_name"=>$this->input->post('first_name'),
						"last_name"=>$this->input->post('last_name'),
						"email_id"=>$email,
						"password"=>sha1($this->input->post('password')),
						"role"=>$user_role,
						"mobile"=>$mobile,
						"timestamp" =>date('Y-m-d'),
						"mod_timestamp" =>date('Y-m-d')
					);
					if ($this->form_validation->run() == FALSE){
						$page_data['page']='signup';
						$this->load->view('admin/signup', $page_data);
					}else{
						if($this->db->insert('registered_data',$data)){
							//$this->email($email_id);
							// $emailto=$this->input->post('email_id');
							// $this->email($emailto);
							$page_data['message']="Successfully Registered. Login to proceed";
							redirect('admin');
						}
						else{
							$page_data['message']="Error Occur";
						}
					}
				}
			}
			else
			{
				$page_data['page_title']="Register New Login";
				$page_data['page']='signup';
				// $this->load->view('admin/section/header1', $page_data);
				$this->load->view('admin/signup', $page_data);
					//$this->index();
			}
			break;
			case "adminadd";
				if ($this->input->post()){
					$password=sha1($this->input->post('password'));
					$first_name = $this->input->post('first_name');
					$last_name = $this->input->post('last_name');
					$email = $this->input->post('email_id');
					$pass_len=strlen($this->input->post('password'));
					$password=$this->input->post('password');
					$password_match=$this->input->post('password1');
					$mobile= $this->input->post('mobile');
					$user_role=$this->input->post('role');
					$get_data=$this->db->get_where('registered_data',array('email_id'=>$email))->result_array();
					$get_data_mobile=$this->db->get_where('registered_data',array('mobile'=>$mobile))->result_array();
					$login_stat=0;
					if ($email==""){
						$page_data['message']="Enter Email Address!";
						$login_stat=1;
					}elseif ($mobile==""){
							$page_data['message']="Enter Mobile Number!";
							$login_stat=1;
					}elseif ($password!=$password_match){
						$page_data['message']="Password Mismatch!";
						$login_stat=1;
					}
					elseif ($get_data or $get_data_mobile){
						$page_data['message']="Email ID or mobile number Already Exist!";
						$login_stat=1;
					}
					elseif($pass_len<8){
						$page_data['message']="Password must be 8 character long";
						$login_stat=1;
					}
					//Make Session
					$this->session->set_userdata('singup_first_name',$first_name);
					$this->session->set_userdata('singup_last_name',$last_name);
					$this->session->set_userdata('singup_mobile',$mobile);
					$this->session->set_userdata('singup_email',$email);
					$this->session->set_userdata('singup_role',$user_role);
					$this->session->set_userdata('singup_password',$password);
					$this->session->set_userdata('singup_password_match',$password_match);

					if ($login_stat==1){
						$page_data['page_title']="Register New Login";
						$page_data['page']='adduser';
						// $this->load->view('admin/section/header', $page_data);
						// $this->load->view('admin/index', $page_data);
						// $this->load->view('admin/section/footer', $page_data);
					}else{
						$data=array(
							"first_name"=>$this->input->post('first_name'),
							"last_name"=>$this->input->post('last_name'),
							"email_id"=>$this->input->post('email_id'),
							"password"=>$password,
							"role"=>$this->input->post('role'),
							"mobile"=>$this->input->post('mobile'),
							"mod_timestamp" =>date('Y-m-d')
						);
						$this->db->insert('registered_data',$data);
						redirect('admin/paneluser/view');
					}
				}
				// $team_data=$this->db->get_where('registered_data',array('id'=>$id))->result_array();
				// $page_data['profile']=$team_data;
				$page_data['page_title']="Edit user";
				$page_data['page']="adduser";
				$this->load->view('admin/section/header', $page_data);
				$this->load->view('admin/index', $page_data);
				$this->load->view('admin/section/footer', $page_data);

			break;	
			case "edit";
			
				if ($this->input->post()){
					$password=$this->input->post('password');
					if ($password==""){
						$password=$this->input->post('1password');
					}
					$data=array(
						"first_name"=>$this->input->post('first_name'),
						"last_name"=>$this->input->post('last_name'),
						"email_id"=>$this->input->post('email_id'),
						"password"=>sha1($password),
						"role"=>$this->input->post('role'),
						"mobile"=>$this->input->post('mobile'),
						"mod_timestamp" =>date('Y-m-d')
					);
					$this->db->where('id',$id);
					$this->db->update('registered_data',$data);
					redirect('admin/paneluser/view');
				}
				$team_data=$this->db->get_where('registered_data',array('id'=>$id))->result_array();
				$page_data['profile']=$team_data;
				$page_data['page_title']="Edit user";
				$page_data['page']="adduser";
				$this->load->view('admin/section/header', $page_data);
				$this->load->view('admin/index', $page_data);
				$this->load->view('admin/section/footer', $page_data);

			break;	
			case "delete";
			if ($id){
				$this->db->where('id',$id);
				$this->db->delete('registered_data');
				redirect ("admin/paneluser/view");
			}
			break;
		}	
		}
	
	public function emailsetting(){
		// if ($this->session->userdata['login_role']){
			$page_data['page_title']="Email sent page";
			$page_data['profile']=$get_data;
			$page_data['page']='emailpage';
			$this->load->view('admin/section/header', $page_data);
			$this->load->view('admin/index', $page_data);
			$this->load->view('admin/section/footer', $page_data);
		// }else{
		// 	redirect('admin');
		// }
	}
	public function userprofile(){
		if ($this->session->userdata['login_role']){
			if ($this->input->post()){
				$id=$this->input->post('id');
				$password=$this->input->post('password');
				if ($password){
					$data=array(
						"first_name"=>$this->input->post('first_name'),
						"last_name"=>$this->input->post('last_name'),
						"email_id"=>$this->input->post('email_id'),
						"mobile"=>$this->input->post('mobile'),
						"password"=>sha1($this->input->post('password')),
						"mod_timestamp" =>date('Y-m-d')
					);
				}else{
					$data=array(
						"first_name"=>$this->input->post('first_name'),
						"last_name"=>$this->input->post('last_name'),
						"email_id"=>$this->input->post('email_id'),
						"mobile"=>$this->input->post('mobile'),
						"mod_timestamp" =>date('Y-m-d')
					);
				}
				$this->db->where('id',$id);
				$this->db->update('registered_data',$data);
				redirect(base_url('admin'));
			}
			else{
				$email=$this->session->userdata['login_email'];
				$get_data=$this->db->get_where('registered_data',array('email_id'=>$email))->result_array();
				$page_data['page_title']="User Profile";
				$page_data['profile']=$get_data;
				$page_data['page']='userprofile';
				$this->load->view('admin/section/header', $page_data);
				$this->load->view('admin/index', $page_data);
				$this->load->view('admin/section/footer', $page_data);
			}
		}else{
			redirect('admin');
		}
	}

	public function manageseo($action, $id=false){
		switch($action){
			case "view";
			// if ($this->session->userdata['login_email']){
				$seo_data= $this->db->get("seodata")->result_array();
				
				$page_data['page_title']="SEO";
				$page_data['manageseos']=$seo_data;
				$page_data['page']='viewseo';
				$this->load->view('admin/section/header', $page_data);
				$this->load->view('admin/index', $page_data);
				$this->load->view('admin/section/footer', $page_data);
			// }
			break;
			case "add";
				if ($this->input->post()){
					$data=array(
						"pagename"=>$this->input->post('pagename'),
						"seotitle"=>$this->input->post('seotitle'),	
						"seodiscr"=>$this->input->post('seodiscr'),
						"seokeyword"=>$this->input->post('seokeyword'),
					);
					
					if($this->db->insert('seodata',$data)){
						$page_data['message']="Successfully Uploaded";
						redirect('admin/manageseo/view');
					}
					else{
						$page_data['message']="Error Occur";
					}
				}
				$page_data['page_title']="Add New Page Data";
				$page_data['page']="addseo";
				$this->load->view('admin/section/header',$page_data);
				$this->load->view('admin/index',$page_data);
				$this->load->view('admin/section/footer',$page_data);
			break;
			case "edit";
				if ($this->input->post()){
					$data=array(
						"pagename"=>$this->input->post('pagename'),
						"seotitle"=>$this->input->post('seotitle'),
						"seodiscr"=>$this->input->post('seodiscr'),
						"seokeyword"=>$this->input->post('seokeyword')
					);
					$this->db->where('id',$id);
					if($this->db->update('seodata',$data)){
						$page_data['message']="Successfully Uploaded";
						redirect('admin/manageseo/view');
					}
					else{
						$page_data['message']="Error Occur";
					}
					
				}
				$seo_data=$this->db->get_where('seodata',array('id'=>$id))->result_array();
				$page_data['team_data']=$seo_data;
				$page_data['page_title']="Edit SEO";
				$page_data['page']="addseo";
				$this->load->view('admin/section/header', $page_data);
				$this->load->view('admin/index',$page_data);
				$this->load->view('admin/section/footer', $page_data);

			break;
			case "delete";
				if ($id){
					$this->db->where('id',$id);
					$this->db->delete('seodata');
					redirect ("admin/manageseo/view");
				}
			break;
		}
	}

	public function managefaq($action, $id=false){
		switch($action){
			case "view";
				$faq_data= $this->db->get("faq_desc")->result_array();
				
				$page_data['page_title']="FAQ";
				$page_data['pagefaq']=$faq_data;
				$page_data['page']='viewfaq';
				$this->load->view('admin/index', $page_data);
			break;
			case "add";
				if ($this->input->post()){
					$data=array(
						"faq_name"=>$this->input->post('faq_name'),
						"faq_name_arabic"=>$this->input->post('faq_name_arabic'),
						"faq_name_hindi"=>$this->input->post('faq_name_hindi'),

						"faq_descr"=>$this->input->post('faq_descr'),
						"faq_descr_arabic"=>$this->input->post('faq_descr_arabic'),
						"faq_descr_hindi"=>$this->input->post('faq_descr_hindi'),

						"faq_detail"=>$this->input->post('faq_detail'),
						"faq_detail_arabic"=>$this->input->post('faq_detail_arabic'),
						"faq_detail_hindi"=>$this->input->post('faq_detail_hindi')
					);
					
					if($this->db->insert('faq_desc',$data)){
						$page_data['message']="Successfully Uploaded";
						redirect('admin/managefaq/view');
					}
					else{
						$page_data['message']="Error Occur";
					}
				}
				$page_data['page_title']="Add New Page Data";
				$page_data['page']="addfaq";
				$this->load->view('admin/index',$page_data);
				

				
			break;
			case "edit";
			
				if ($this->input->post()){
					//Google Translation if Other Language's matter is not available
					//Hindi
					if ($this->input->post('faq_name_hindi')==""){
						$seltext=$this->input->post('faq_name');
						$faq_name_Hindi= $this->translateComplete($this->clean($seltext));
					}
					else{
						$faq_name_Hindi=$this->input->post('faq_name_hindi');
					}

					if ($this->input->post('faq_descr_hindi')==""){
						$seltext=$this->input->post('faq_descr');
						$faq_descr_hindi=$this->translatetext($this->clean($seltext));
					}
					else{
						$faq_descr_hindi=$this->input->post('faq_descr_hindi');
					}

					//Arabic
					if ($this->input->post('faq_name_arabic')==""){
						$seltext=$this->input->post('faq_name');
						$faq_name_arabic= $this->translatetextArabic($this->clean($seltext));
					}
					else{
						$faq_name_arabic=$this->input->post('faq_name_arabic');
					}

					if ($this->input->post('faq_descr_arabic')==""){
						$seltext=$this->input->post('faq_descr');
						$faq_descr_arabic=$this->translatetextArabic($this->clean($seltext));
					}
					else{
						$faq_descr_arabic=$this->input->post('faq_descr_arabic');
					}

					//End Google Translation
					$data=array(
						"faq_name"=>$this->input->post('faq_name'),
						"faq_name_arabic"=>$faq_name_arabic,
						"faq_name_hindi"=>$faq_name_Hindi,

						"faq_descr"=>$this->input->post('faq_descr'),
						"faq_descr_arabic"=>$faq_descr_arabic,
						"faq_descr_hindi"=>$faq_descr_hindi,

						"faq_detail"=>$this->input->post('faq_detail'),
						"faq_detail_arabic"=>$this->input->post('faq_detail_arabic'),
						"faq_detail_hindi"=>$this->input->post('faq_detail_hindi')
					);
					$this->db->where('id',$id);
					if($this->db->update('faq_desc',$data)){
						$page_data['message']="Successfully Updated";
						redirect('admin/managefaq/view');
					}
					else{
						$page_data['message']="Error Occur";
					}
					
				}
				$seo_data=$this->db->get_where('faq_desc',array('id'=>$id))->result_array();
				$page_data['team_data']=$seo_data;
				$page_data['page_title']="Edit FAQ";
				$page_data['page']="addfaq";
				$this->load->view('admin/index',$page_data);

			break;
			case "delete";
				if ($id){
					$this->db->where('id',$id);
					$this->db->delete('faq_desc');
					redirect ("admin/managefaq/view");
				}
			break;
		}
	}

	public function manageras($action, $id=false){
		switch($action){
			case "view";
				$ras_data= $this->db->get("ras_data")->result_array();
				
				$page_data['page_title']="view annual interest data";
				$page_data['pagefaq']=$ras_data;
				$page_data['page']='viewras';
				$this->load->view('admin/section/header', $page_data);
				$this->load->view('admin/index', $page_data);
				$this->load->view('admin/section/footer', $page_data);
			break;
		}
	}

	public function blog($action, $id=false){
		switch($action){
			case "view";
			// if ($this->session->userdata['login_email']){
				$this->db->order_by('date', 'DESC');
				$blog_data= $this->db->get("blogdata")->result_array();
				$page_data['page_title']="Blogs";
				$page_data['blogs']=$blog_data;
				$page_data['page']='viewblog';
				$this->load->view('admin/section/header', $page_data);
				$this->load->view('admin/index', $page_data);
				$this->load->view('admin/section/footer', $page_data);
			// }
			break;
			case "add";
			// if ($this->session->userdata['login_email']){
				$this->load->helper('date');
				if ($this->input->post()){
					if ($_FILES['blogimage']['name'] !=""){
						$upload_data= $this->do_upload(array('upload_path'=>'./uploads/images/','name'=>'blogimage'));
					}
					$data=array(
						"seodiscr"=>$this->input->post('seodiscr'),
						"seotitle"=>$this->input->post('seotitle'),
						"seokeyword"=>$this->input->post('seokeyword'),
						"blog_title"=>$this->input->post('blog_title'),
						"blog_detail"=>"",
						"blogname"=>"",
						"blogimage"=>"uploads/images/".$upload_data['file_name'],
						"author"=>$this->input->post('author'),
						"longdiscr"=>$this->input->post('longdiscr'),
						"date" =>$this->input->post('date'),
						"slugs" =>$this->input->post('slugs')
					);
					if ($this->input->post('blogimage')!=""){
					if (count($upload_data)>=1){
						$data['blogimage']="uploads/images/".$upload_data['file_name'];
					}}

					if($this->db->insert('blogdata',$data)){
						$page_data['message']="Successfully Updated";
						$team_data= $this->db->get("blogdata")->result_array();
						$page_data['page_title']="Blogs";
						$page_data['teams']=$team_data;
						$page_data['page']='viewblog';
						$this->load->view('admin/section/header',$page_data);
						$this->load->view('admin/index',$page_data);
						$this->load->view('admin/section/footer',$page_data);
					}
					else{
						echo "Error Occur";
					}
					redirect('admin/blog/view');
				}
				else {
				$team_data=$this->db->get_where('blogdata',array('id'=>$id))->result_array();
				$page_data['team_data']=$team_data;
				$page_data['page_title']="Edit Blog";
				$page_data['page']="addblog";
				$this->load->view('admin/section/header',$page_data);
				$this->load->view('admin/index',$page_data);
				$this->load->view('admin/section/footer',$page_data);
				}
			// }
			break;
			case "edit";
			// if ($this->session->userdata['login_email']){
				$this->load->helper('date');
				if ($this->input->post()){
					if ($_FILES['blogimage']['name'] !=""){
						$upload_data= $this->do_upload(array('upload_path'=>'./uploads/images/','name'=>'blogimage'));
					}
					$blogimage_add=$upload_data['file_name'];
					if ($blogimage_add==""){
						$blogimage_add=$this->input->post('blogimageexisting');
					}else{
						$blogimage_add="uploads/images/".$upload_data['file_name'];
					}
					
					$data=array(
						"seodiscr"=>$this->input->post('seodiscr'),
						"seotitle"=>$this->input->post('seotitle'),
						"seokeyword"=>$this->input->post('seokeyword'),
						"blog_title"=>$this->input->post('blog_title'),
						"blog_detail"=>"",
						"blogname"=>"",
						"blogimage"=>$blogimage_add,
						"author"=>$this->input->post('author'),
						"longdiscr"=>$this->input->post('longdiscr'),
						"date" =>$this->input->post('date'),
						"slugs" =>$this->input->post('slugs')
					);
					if ($this->input->post('blogimage')!=""){
					if (count($upload_data)>=1){
						$data['blogimage']="uploads/images/".$upload_data['file_name'];
					}}
					
					$this->db->where('id',$id);
					if($this->db->update('blogdata',$data)){
						$page_data['message']="Successfully Updated";
						$team_data= $this->db->get("blogdata")->result_array();
						$page_data['page_title']="Blogs";
						$page_data['teams']=$team_data;
						$page_data['page']='viewblog';
						$this->load->view('admin/section/header',$page_data);
						$this->load->view('admin/index',$page_data);
						$this->load->view('admin/section/footer',$page_data);
					}
					else{
						echo "Error Occur";
					}
					redirect('admin/blog/view');
				}
				else {
				$team_data=$this->db->get_where('blogdata',array('id'=>$id))->result_array();
				$page_data['team_data']=$team_data;
				$page_data['page_title']="Edit Blog";
				$page_data['page']="addblog";
				$this->load->view('admin/section/header',$page_data);
				$this->load->view('admin/index',$page_data);
				$this->load->view('admin/section/footer',$page_data);
				}
			// }
			break;
			case "delete";
				if ($id){
					$this->db->where('id',$id);
					$this->db->delete('blogdata');
					redirect ("admin/blog/view");
				}
			break;
			case "blogview";
				// if ($this->session->userdata['login_email']){
					$team_data=$this->db->get_where('blogdata',array('id'=>$id))->result_array();
					$page_data['team_data']=$team_data;
					$page_data['page_title']="Readmore";
					$page_data['page']="readmore";
					$this->load->view('frontend/index',$page_data);
				// }
			break;
		}
	}
	public function logout()
	{
		$this->session->flashdata($uid);
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function do_upload($data)
    {
		$this->load->library('image_lib');

		foreach($results as $row)
				{

		$config['image_library'] = 'gd2';
		$config['source_image'] = $data['upload_path'];
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['width']     = 75;
		$config['height']   = 50;    


		$this->image_lib->initialize($config);
		$this->image_lib->resize();
		$this->image_lib->clear();
		}

		$config['upload_path']          = $data['upload_path'];
		$config['allowed_types']        = 'gif|jpg|jpeg|png|pdf';
		$config['max_size']             = 100000;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload($data['name']))
		{
				//$error = array('error' => $this->upload->display_errors());
				return false;
				//$this->load->view('admin/pages/team/form.php', $error);
		}
		else
		{
				//$data = array('upload_data' => $this->upload->data());
				return $this->upload->data();
				//$this->load->view('upload_success', $data);
		}
    }
	
	public function email($emailto,$filename){
		$this->load->library('email');
		$this->email->attach($filename);
		$this->email->from('qaimlko@gmail.com','Ya Marktet AI');
		$this->email->to($emailto);
		$this->email->subject('Report from Ya Market AI');
		$this->email->attach(base_url('assets/images/logo-dark.png'));
		$cid=$this->email->attachment_cid(base_url('assets/images/logo-dark.png'));
		$this->email->attach(base_url('assets/images/facebook.png'));
		$cidf=$this->email->attachment_cid(base_url('assets/images/facebook.png'));
		$this->email->attach(base_url('assets/images/x.png'));
		$cidx=$this->email->attachment_cid(base_url('assets/images/x.png'));
		$this->email->attach(base_url('assets/images/instagram.png'));
		$cidi=$this->email->attachment_cid(base_url('assets/images/instagram.png'));
		$this->email->attach(base_url('assets/images/linkedin.png'));
		$cidl=$this->email->attachment_cid(base_url('assets/images/linkedin.png'));

		$data=array();
		$this->data['data'] = $data;
		$bodymsg= $this->emailbody($cid,$cidf,$cidx,$cidi,$cidl);
		// $bodymsg= $this->load->view('admin/pages/emailpage.php',$this->data,true);
		$config=array(
			'charset'=>'utf-8',
			'wordwrap'=> TRUE,
			'mailtype' => 'html'
			);
		$this->email->message($bodymsg);
		//$this->email->attach('C:\FileRecovery.log');
		if(! $this->email->send()){
			show_error($this->email->print_debugger());
			echo "email not send";
		}
		else{
			echo "email successfully sent to target email";
		}
	}

	function dropdowntesting()
 	{
  		$data['country'] = $this->Dynamic_dependent_model->fetch_country();
  		$this->load->view('admin/dropdowntesting', $data);
 	}

 	function fetch_state()
    {
        if ($this->input->post('country_id')) {
            $stateOptions = $this->Dynamic_dependent_model->fetch_state($this->input->post('country_id'));
            echo json_encode([
                'stateOptions' => $stateOptions,
                'csrfHash' => $this->security->get_csrf_hash()
            ]);
        }
    }

    function fetch_city()
    {
        if ($this->input->post('state_id')) {
            $cityOptions = $this->Dynamic_dependent_model->fetch_city($this->input->post('state_id'));
            echo json_encode([
                'cityOptions' => $cityOptions,
                'csrfHash' => $this->security->get_csrf_hash()
            ]);
        }
    }
	public function email_otp($emailto){
		$this->load->helper('string');
		$otp = rand(100000, 999999);
		$this->email->from('qaimlko@gmail.com','NXG Market');
		$this->email->to($emailto);
		$this->email->subject('OTP to create NXG Market User');
		$this->email->attach(base_url('images/nxg-logo.png'));
		$cid=$this->email->attachment_cid(base_url('assets/images/logo-dark.png'));
		$bodymsg='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
					<html xmlns="http://www.w3.org/1999/xhtml">

					<head>
					<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
					<meta name="viewport" content="width=device-width, initial-scale=1.0">
					<title>Verify your login</title>
					<!--[if mso]><style type="text/css">body, table, td, a { font-family: Arial, Helvetica, sans-serif !important; }</style><![endif]-->
					</head>

					<body style="font-family: Helvetica, Arial, sans-serif; margin: 0px; padding: 0px; background-color: #ffffff;">
					<table role="presentation"
						style="width: 100%; border-collapse: collapse; border: 0px; border-spacing: 0px; font-family: Arial, Helvetica, sans-serif; background-color: rgb(239, 239, 239);">
						<tbody>
						<tr>
							<td align="center" style="padding: 1rem 2rem; vertical-align: top; width: 100%;">
							<table role="presentation" style="max-width: 600px; border-collapse: collapse; border: 0px; border-spacing: 0px; text-align: left;">
								<tbody>
								<tr>
									<td style="padding: 40px 0px 0px;">
									<div style="text-align: left;">
										<div style="padding-bottom: 20px;"><img src="cid:'.$cid.'" alt="Company" style="width: 200px;"></div>
									</div>
									<div style="padding: 20px; background-color: rgb(255, 255, 255);">
										<div style="color: rgb(0, 0, 0); text-align: center;">
										<h1 style="margin: 1rem 0">Verification code</h1>
										<p style="padding-bottom: 16px">Please use the verification code below to sign in.</p>
										<p style="padding-bottom: 16px"><strong style="font-size: 130%">'.$otp.'</strong></p>
										<p style="padding-bottom: 16px">If you didn’t request this, you can ignore this email.</p>
										<p style="padding-bottom: 16px">Thanks,<br>Ya Market AI</p>
										</div>
									</div>
									</td>
								</tr>
								</tbody>
							</table>
							</td>
						</tr>
						</tbody>
					</table>
					</body>

					</html>';
					$this->email->message($bodymsg);
		if(! $this->email->send()){
			show_error($this->email->print_debugger());
			return false;
		}
		else{
			return $otp;
		}
	}

}
