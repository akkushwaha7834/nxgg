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

	public function __construct() {
        parent::__construct();
		// $this->load->library('session');
		// $this->load->helper('url');
    }

	public function error404(){
		$this->load->view('frontend/section/header');
		$this->load->view('404.php');
		$this->load->view('frontend/section/footer');
	}
	public function index()
	{
		$this->load->helper('url');
		$this->load->library('user_agent');
            //ipinfo grabs the ip of the person requesting
		$getloc = json_decode(file_get_contents("http://ipinfo.io/"));
		$visitor_ip= $getloc->ip;
		$country= $getloc->country;
		// $visitor_ip=$this->input->ip_address();
		$browser=$this->agent->browser();
		// $this->db->select('ip_address');
		// $this->db->from('visitor_count');
		// $this->db->where('ip_address',$visitor_ip);
		$num_results=0;
		$num_results = $this->db->count_all_results();
		$check_visitor=$this->db->get_where('visitor_count',array('ip_address'=>$visitor_ip,'visit_date'=>date('Y-m-d'),'browser'=>$browser))->result_array();
		if ($check_visitor){
			
		}
		else{
			$num_results++;
			$visit_data=array(
				"visit_date"=>date('Y-m-d'),
				"ip_address" =>date($visitor_ip),
				"browser" =>$browser,
				"platform" =>$this->agent->platform()
			);
			$this->db->insert('visitor_count',$visit_data);
		}
		$page_data['page']='home';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}
	public function account_type()
	{
		$page_data['page']='account-type';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);

		$this->load->view('frontend/section/why-nxg-markets',$page_data);
		$this->load->view('frontend/section/multi-language-assistance',$page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}
	
	public function submit_revolutionize_your_trading_experience()
	{
		if ($this->input->post('submit')){
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$contact_no=$this->input->post('contact_no');
			$location=$this->input->post('location');
			if ($name=="" or $email=="" or $contact_no=="" or $location==""){
				$page_data['message']='Please fill complete form';
			}else{
				$data=array(
					"name"=>$name,
					"email"=>$email,
					"contact_no"=>$contact_no,
					"location"=>$location
				);
				$result = $this->db->insert('revolutionize_your_trading_experience',$data);
				if ($result){
					$page_data['message']='Your Information recorded';
					redirect(base_url());
				}
			}
		}
	}
	
	public function revolutionize_your_trading_experience()
	{
		$page_data['page']='revolutionize-your-trading-experience';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);
		$this->load->view('frontend/section/why-nxg-markets',$page_data);
		$this->load->view('frontend/section/multi-language-assistance',$page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}
	
	public function blog()
	{
		$blog_data = $this->db->order_by('date', 'DESC')->get('blogdata')->result_array();
		$page_data['page_title']="Blogs";
		$page_data['blogs']=$blog_data;
		$page_data['page']='blog';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}
	public function deposit_withdrawal()
	{
		$page_data['page']='deposit-withdrawal';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);
		$this->load->view('frontend/section/why-nxg-markets',$page_data);
		$this->load->view('frontend/section/footer',$page_data);
		
	}
	public function safety_of_funds()
	{
		$page_data['page']='safety-of-funds';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);
		
		$this->load->view('frontend/section/why-nxg-markets',$page_data);
		$this->load->view('frontend/section/multi-language-assistance',$page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}
	public function forex()
	{
		$page_data['page']='forex';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);
		$this->load->view('frontend/section/why-nxg-markets',$page_data);
		$this->load->view('frontend/section/multi-language-assistance',$page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}

	public function commodities()
	{
		$page_data['page']='commodities';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);

		$this->load->view('frontend/section/why-nxg-markets',$page_data);
		$this->load->view('frontend/section/multi-language-assistance',$page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}

	public function indices()
	{
		$page_data['page']='indices';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);

		$this->load->view('frontend/section/why-nxg-markets',$page_data);
		$this->load->view('frontend/section/multi-language-assistance',$page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}

	public function stocks()
	{
		$page_data['page']='stocks';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);
		$this->load->view('frontend/section/why-nxg-markets',$page_data);
		$this->load->view('frontend/section/multi-language-assistance',$page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}

	public function cryptocurrencies()
	{
		$page_data['page']='cryptocurrencies';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);
		$this->load->view('frontend/section/why-nxg-markets',$page_data);
		$this->load->view('frontend/section/multi-language-assistance',$page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}

	public function trading_conditions()
	{
		$page_data['page']='trading-conditions';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);

		$this->load->view('frontend/section/why-nxg-markets',$page_data);
		$this->load->view('frontend/section/multi-language-assistance',$page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}
	
	public function christmas_ib_contest()
	{
	    if ($this->input->post()){
			$data=array(
				"full_name"=>$this->input->post('full_name'),
				"email"=>$this->input->post('email'),
				"contact_no"=>$this->input->post('contact_no'),
				"location"=>$this->input->post('location')
			);
			$this->db->insert('christmas_ib_contest',$data);
		}
		$page_data['page']='christmas-ib-contest';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}

	public function mt5()
	{
		$page_data['page']='mt5';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);
		$this->load->view('frontend/section/multi-language-assistance',$page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}

	public function ctrader()
	{
		$page_data['page']='ctrader';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);
		$this->load->view('frontend/section/multi-language-assistance',$page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}

	public function copytrading()
	{
		$page_data['page']='copytrading';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);
		$this->load->view('frontend/section/multi-language-assistance',$page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}
	public function trading_calculator()
	{
		$page_data['page']='trading-calculator';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);

		$this->load->view('frontend/section/why-nxg-markets',$page_data);
		$this->load->view('frontend/section/multi-language-assistance',$page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}
	public function trading_signals()
	{
		$page_data['page']='trading-signals';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);

		$this->load->view('frontend/section/why-nxg-markets',$page_data);
		$this->load->view('frontend/section/multi-language-assistance',$page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}
	public function autochartist()
	{
		$page_data['page']='autochartist';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);
		
		// Market Leading Trading Tools
		$this->load->view('frontend/section/why-nxg-markets',$page_data);
		$this->load->view('frontend/section/multi-language-assistance',$page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}
	public function videos()
	{
		$page_data['page']='videos';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);

		// <!-- Free Demo Account -->
		$this->load->view('frontend/section/free-demo-account',$page_data);

		$this->load->view('frontend/section/why-nxg-markets',$page_data);
		$this->load->view('frontend/section/multi-language-assistance',$page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}
	public function webinars()
	{
		$page_data['page']='webinars';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);

		// <!-- Free Demo Account -->
		$this->load->view('frontend/section/free-demo-account',$page_data);

		$this->load->view('frontend/section/why-nxg-markets',$page_data);
		$this->load->view('frontend/section/multi-language-assistance',$page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}
	public function seminars()
	{
		$page_data['page']='seminars';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);
		// Free Demo Account
		$this->load->view('frontend/section/free-demo-account.php',$page_data);

		$this->load->view('frontend/section/why-nxg-markets',$page_data);
		$this->load->view('frontend/section/multi-language-assistance',$page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}
	public function nxgmarketsaffiliates()
	{
		$page_data['page']='nxgmarketsaffiliates';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);
		
		$this->load->view('frontend/section/why-nxg-markets',$page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}
	public function nxgmarkets_ibs()
	{
		$page_data['page']='nxgmarkets-ibs';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);

		$this->load->view('frontend/section/why-nxg-markets',$page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}
	public function advantages()
	{
		$page_data['page']='advantages';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);

		$this->load->view('frontend/section/why-nxg-markets',$page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}
	
	public function marketing_tools()
	{
		$page_data['page']='marketing-tools';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}
	public function commission_structure()
	{
		$page_data['page']='commission-structure';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);

		$this->load->view('frontend/section/multi-language-assistance',$page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}
	public function refer_and_earn()
	{
		$page_data['page']='refer-and-earn';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}
	public function festival_fair_ib_contest()
	{
		$page_data['page']='festival-fair-ib-contest';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}
	public function refer_and_shop()
	{
		if ($this->input->post()){
			$full_name=$this->input->post('full_name');
			$email_id=$this->input->post('email_id');
			$contact_no=$this->input->post('contact_no');
			$location=$this->input->post('location');
			if ($full_name=="" or $email_id=="" or $contact_no=="" or $location==""){
				$page_data['message']='Please fill complete form';
			}else{
				$data=array(
					"full_name"=>$full_name,
					"email_id"=>$email_id,
					"contact_no"=>$contact_no,
					"location"=>$location
				);
				if ($this->db->insert('ras_data',$data)){
					$page_data['message']='Your Information recorded';
				}
			}
		}
		$page_data['page']='refer-and-shop';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}
	public function about()
	{
		$page_data['page']='about';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);
		//  What Makes Us NXG Markets
		$this->load->view('frontend/section/why-nxg-markets',$page_data);
		$this->load->view('frontend/section/multi-language-assistance',$page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}
	public function careers()
	{
		$page_data['page']='careers';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);
		// Careers Intro
		$this->load->view('frontend/section/multi-language-assistance',$page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}
	public function careerdetails()
	{
		$page_data['page']='career-details';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);
		// Careers Intro
		$this->load->view('frontend/section/multi-language-assistance',$page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}
	public function contact_us()
	{
		$page_data['page']='contact-us';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);
		$this->load->view('frontend/section/multi-language-assistance',$page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}
	public function why_trade_forex()
	{
		$page_data['page']='why-trade-forex';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);
		$this->load->view('frontend/section/why-nxg-markets.php',$page_data);
		$this->load->view('frontend/section/multi-language-assistance',$page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}
	public function regulations_licenses()
	{
		$page_data['page']='regulations-licenses';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);
		$this->load->view('frontend/section/why-nxg-markets.php',$page_data);
		$this->load->view('frontend/section/multi-language-assistance',$page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}
	public function blog_detail()
	{
		$page_data['page']='blog-detail';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}
	
	//For Footer
	public function privacy_policy()
	{
		$page_data['page']='privacy-policy';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}
	public function aml_policy()
	{
		$page_data['page']='aml-policy';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}
	public function refund_policy()
	{
		$page_data['page']='refund-policy';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}
	public function kyc_policy()
	{
		$page_data['page']='kyc-policy';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}
	public function risk_disclosure()
	{
		$page_data['page']='risk-disclosure';
		$this->load->view('frontend/section/header',$page_data);
		$this->load->view('frontend/index', $page_data);
		$this->load->view('frontend/section/footer',$page_data);
	}
	public function login()
	{
		$page_data['page']='login';
		// $this->load->view('admin/pages/login.php');
		$this->load->view('admin/index', $page_data);
	}

	public function signin()
	{
		$page_data=$this->GetPagesLanguageWise('signin');
		$footer_data=$this->GetFooterLanguageWise();
		if($this->input->post('action')=="Login"){
			$user_data = $this->session->userdata('sel_lang');
			$this->load->database();
			
			$email = $this->input->post('user_id');
			$password=sha1($this->input->post('user_password'));

			$result=$this->db->get_where('registered_data',array('user_id'=>$email,'user_password'=>$password))->result_array();
			$user_data = array(
				'login_uid' => $result[0]['id'],
				'email_address'  => $result[0]['user_id']
			);
			$uid=$result[0]['id'];
			$user_id=$result[0]['user_id'];
			$user_role=$result[0]['role'];

			$this->session->set_userdata('client_uid',$uid);
			$this->session->set_userdata('email_address',$user_id);
			$this->session->set_userdata('userrole',$user_role);

			$this->session->set_userdata('user_data', $user_data);
			if ($this->session->userdata['client_uid']){
				$page_data=$this->GetPagesLanguageWise('home');
				$page_data['page']='home';
				$this->load->view('frontend/section/header',$page_data);
				$this->load->view('frontend/index',$page_data);
				$this->load->view('frontend/section/footer',$footer_data);
				}
				else
				{
					$page_data['page_title']="Login Page";
					$page_data['page']='sign-in';
					$this->load->view('frontend/section/header',$page_data);
					$this->load->view('frontend/index', $page_data);
					$this->load->view('frontend/section/footer',$footer_data);
					echo '<script>alert("Invalid Login! Please try again with correct Email ID and Password");</script>';
				}
		}	
		elseif ($this->input->post('action')=="Forgot Password")
		{
			if ($this->input->post('user_id')==""){
				echo '<script> alert("Please enter valid user id"); </script>';
			}
			else
			{
				$email = $this->input->post('user_id');
				$result=$this->db->get_where('registered_data',array('user_id'=>$email))->result_array();
				$user_data = array(
					'login_uid' => $result[0]['id'],
					'email_address'  => $result[0]['user_id']
				);
				$uid=$result[0]['id'];
				$user_id=$result[0]['user_id'];
				if ($user_id){
					$otp=$this->email_otp($user_id);
					if($otp==false){
						echo '<script> alert("Email Not Sent! Please try again after some time"); </script>';
					}
					else{
						$email_data = array(
							'OTP' => $otp,
							'email_address'  => $user_id
						);
						$page_data=$this->GetPagesLanguageWise('forgetpass');
						$page_data['message']="Change password using OPT sent by registered email!";
						$page_data['forgot']=$email_data;
						$page_data['page_title']="Change Password";
						$page_data['page']='forgetpass';
						$this->load->view('frontend/section/header',$page_data);
						$this->load->view('frontend/index',$page_data);
						$this->load->view('frontend/section/footer',$footer_data);
					}
				}
				else {
					echo '<script> alert("Entered User ID does not matched to our record"); </script>';
				}
			}
		}
		elseif ($this->input->post('action')=="Update Password")
		{
			if ($this->input->post('password')==""){
				echo '<script> alert("Please enter valid Password"); </script>';
			}
			else{
				//$id=$this->input->post('id');
				$email = $this->input->post('email_id');
				$user_password = $this->input->post('password');
				$data=array(
					"user_id"=>$this->input->post('email_id'),
					"user_password"=>sha1($this->input->post('password')),
					"mod_timestamp" =>time()
				);
				$this->db->where('user_id',$email);
				if($this->db->update('registered_data',$data)){
					$page_data['message']="Password Changed Successfully! Login with new password";
					$page_data['page_title']="Login";
					$page_data['page']='sign-in';
					$this->load->view('frontend/section/header',$page_data);
					$this->load->view('frontend/index',$page_data);
					$this->load->view('frontend/section/footer',$footer_data);
				}
				else {
					echo '<script> alert("Error Occur"); </script>';
				}	
			}
		}
		else
		{
			$page_data['page_title']="Login";
			$page_data['page']='sign-in';
			$this->load->view('frontend/section/header',$page_data);
			$this->load->view('frontend/index',$page_data);
			$this->load->view('frontend/section/footer',$footer_data);

		}
	}

	public function readmore($action, $id=false){
		switch($action){
			case "blogview";
				$team_data=$this->db->get_where('blogdata',array('id'=>$id))->result_array();
				// $this->db->select('*');
				// $this->db->order_by('id', 'desc');  
				// $this->db->from('Item_comments');
				// $this->db->limit('5');
				$mostpopular=$this->db->query("select * from blogdata ORDER BY id DESC LIMIT 3")->result_array();
				$page_data['Blog_detail']=$team_data;
				$page_data['mostpopular']=$mostpopular;
				$page_data['page_title']="Blog Discription";
				$page_data['page']="readmore";
				$this->load->view('frontend/section/header',$page_data);
				$this->load->view('frontend/index', $page_data);
				$this->load->view('frontend/section/footer',$page_data);
				break;
		}
	}

	public function register($action, $id=false){
		switch($action){
			case "view";
				$team_data= $this->db->get("registered_data")->result_array();
				
				$page_data['page_title']="Registered Clients";
				$page_data['users']=$team_data;
				$page_data['page']='viewclients';
				$this->load->view('admin/index', $page_data);
			break;
			case "viewgoogleclient";
				// $team_data= $this->db->get("google_user")->result_array();
				
				// $page_data['page_title']="Google Clients";
				// $page_data['users']=$team_data;
				// $page_data['page']='viewgoogleclient';
				// $this->load->view('admin/index', $page_data);

				// break;
			case "add";
				// if ($this->input->post()){
				// 	$email = $this->input->post('user_id');
				// 	$user_password = $this->input->post('user_password');
				// 	$user_password1 = $this->input->post('user_password1');
				// 	if ($user_password=="" or $user_password1==""){
				// 		$page_data['message']="Blank password not allowed!";
				// 		$page_data['page_title']="Register";
				// 		$page_data['page']='register';
				// 		$this->load->view('frontend/section/header',$page_data);
				// 		$this->load->view('frontend/index', $page_data);
				// 		$this->load->view('frontend/section/header',$footer_data);
				// 	}
				// 	elseif ($user_password<>$user_password1){
				// 		$page_data['message']="Passwords does not match!";
				// 		$page_data['page_title']="Register";
				// 		$page_data['page']='register';
				// 		$this->load->view('frontend/section/header',$page_data);
				// 		$this->load->view('frontend/index', $page_data);
				// 		$this->load->view('frontend/section/footer',$footer_data);
				// 	}
				// 	else {
				// 		$result=$this->db->get_where('registered_data',array('user_id'=>$email))->result_array();
				// 		if($result){
				// 			$page_data['message']="User ID Already Exist!";
				// 			$page_data['page_title']="Register";
				// 			$page_data['page']='register';
				// 			$this->load->view('frontend/section/header',$page_data);
				// 			$this->load->view('frontend/index', $page_data);
				// 			$this->load->view('frontend/section/footer',$footer_data);
				// 		}
				// 		else {
				// 			$user_role=$this->input->post('role');
				// 			$user_id=$this->input->post('user_id');
				// 			$userPass=$this->input->post('user_password');
				// 			if ($user_role=="Admin"){
				// 				$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
				// 				$userPass=substr(str_shuffle($chars),0,8);
				// 			}
				// 			$data=array(
				// 				"user_id"=>$this->input->post('user_id'),
				// 				"user_password"=>sha1($userPass),
				// 				"Country"=>$this->input->post('country'),
				// 				"State"=>$this->input->post('state'),
				// 				"City"=>$this->input->post('city'),
				// 				"role"=>$this->input->post('role'),
				// 				"timestamp" =>time(),
				// 				"mod_timestamp" =>time()
				// 			);
							
				// 			if($this->db->insert('registered_data',$data)){
				// 				$this->email_admin('qaim@yamarkets.com',$user_id,$userPass);
				// 				$page_data['message']="Successfully Register. Login Now";
				// 				$page_data['page_title']="Login";
				// 				$page_data['page']='sign-in';
				// 				$this->load->view('frontend/section/header',$page_data);
				// 				$this->load->view('frontend/index', $page_data);
				// 				$this->load->view('frontend/section/footer',$footer_data);
								
				// 			}
				// 			else{
				// 				$page_data['message']="Error Occur. Please contact to system admin";
				// 				$page_data['page_title']="Register";
				// 				$page_data['page']='register';
				// 				$this->load->view('frontend/section/header',$page_data);
				// 				$this->load->view('frontend/index', $page_data);
				// 				$this->load->view('frontend/section/footer',$footer_data);
				// 			}
				// 		}
				// 	}
				// }
				// else
				// {
					
					// $page_data['country'] = $this->Dynamic_dependent_model->fetch_country();
					//$page_data['country'] = $team_data;
					$page_data['page_title']="Register";
					$page_data['page']='signup';
					$this->load->view('admin/index',$page_data);
				// }
			break;
			case "edit";
				if ($this->input->post()){
					$data=array(
						"user_id"=>$this->input->post('user_id'),
						"user_password"=>sha1($this->input->post('user_password')),
						"Country"=>$this->input->post('country'),
						"State"=>$this->input->post('state'),
						"City"=>$this->input->post('city'),
						"role"=>$this->input->post('role'),
						"timestamp" =>time(),
						"mod_timestamp" =>time()
					);
					$this->db->where('id',$id);
					$this->db->update('registered_data',$data);
					redirect('welcome/register/view');
				}
				$team_data=$this->db->get_where('registered_data',array('id'=>$id))->result_array();
				$page_data['register']=$team_data;
				$page_data['page_title']="Edit client Registration";
				$page_data['page']="register";
				$this->load->view('frontend/index',$page_data);

			break;	
			case "delete";
				if ($id){
					$this->db->where('id',$id);
					$this->db->delete('registered_data');
					redirect ("welcome/register/view");
				}
			}
	}

	//For Forget Password
	public function forgot_pass()
    {
		echo '<script> alert("OTP forgot pass start") </script>';
        if ($this->input->post('user_id')) {
            echo "Mail Sent";
        }
		else{
			echo "Please enter valid user id";
		}
    }
	public function email_otp($emailto){
		$this->load->helper('string');
		$otp = rand(100000, 999999);
		$this->email->from('qaimlko@gmail.com','Qaim Mehdi');
		$this->email->to($emailto);
		$this->email->subject('OTP to recover email password');

		$this->email->message('OTP to recover email password is: '.$otp.' \n Please dont share OTP to anyone');
		if(! $this->email->send()){
			show_error($this->email->print_debugger());
			return false;
		}
		else{
			return $otp;
		}
	}
	public function email_admin($emailto, $emailid,$emailpass){
		$this->load->helper('string');
		$this->email->from('qaimlko@gmail.com','NXG Markets');
		$this->email->to($emailto);
		$this->email->subject('Admin email created');

		$this->email->message('Your User ID : '.$emailid.' \n Your Admin Password : '.$emailpass);
		if(! $this->email->send()){
			show_error($this->email->print_debugger());
			return false;
		}
		else{
			return true;
		}
	}
	public function email_registration($emailto){
		$filename='C:\Users\TeamIT\Pictures\Screenshots\photo1.jpg';
		$this->email->attach($filename);
		$this->email->from('qaimlko@gmail.com','NXG Market');
		$this->email->to($emailto);
		$this->email->subject('Greeting Mail!!!!!!!!!!');
		//$cid=$this->email->attachment_cid($filename);
		// $this->email->message('<img src="cid:'. $cid .'" alt="photo1" />');
		$this->email->message('');
		//$this->email->attach('C:\FileRecovery.log');
		if(! $this->email->send()){
			show_error($this->email->print_debugger());
			echo "email not send";
		}
		else{
			echo "email successfully sent to target email";
		}
	}
	
	public function festival_ib_contest(){
	    $this->load->database();
	    if($this->input->post()){
    	    $data = array(
    	        'name' => $this->input->post('name'),
    	        'email' => $this->input->post('email'),
    	        'number' => $this->input->post('number'),
    	        'country' => $this->input->post('country'),
    	       );
    	       
    	       $result = $this->db->insert('festival_ib_contest', $data);
    	       if($result){
    	           ?> <script type="text/javascript">
    	               alert("Submit successfully");
    	               window.location.href = "<?php echo base_url('');?>";
    	           </script>
    	           <?php
    	       } else{
    	           ?> <script type="text/javascript">
    	               alert("Please enter all required fields");
    	               window.location.href = "<?php echo base_url('festival-fair-ib-contest');?>";
    	           </script>
    	           <?php
    	       }
	    } else{
	        ?> <script type="text/javascript">
    	           alert("There is a problem in handling your request. Please try again!");
    	           window.location.href = "<?php echo base_url('festival-fair-ib-contest');?>";
    	       </script>
            <?php
	    }
	}

}
