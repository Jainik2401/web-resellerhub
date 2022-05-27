<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form'); 
		$this->load->database('');
		$this->load->model('Backend');
		$this->load->library('session');
		
	}
	public function index()
	{
		$this->load->view('frontend/customer/index');
	}
	public function login()
	{
		$this->load->view('frontend/customer/login');
	}
	public function customerlogin()
	{

	$data['c_email'] = $this->input->post('c_email');
	$data['c_password'] = $this->input->post('c_password');
	//print_r($data);
	$this->Backend->customer_login($data);

	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect("Customer/login");
	}
	public function offer()
	{
		$this->db->select('*')->from('offer');
		$data=$this->db->get();
		$get = $data->result(); 
		$newdata['data'] = $get;
		$this->load->view('frontend/customer/offer',$newdata);
	}
	public function discount()
	{
		$this->db->select('*')->from('discount');
		$data=$this->db->get();
		$get = $data->result(); 
		$newdata['data'] = $get;
		$this->load->view('frontend/customer/discount',$newdata);
	}
	public function insert_register()
	{
		$c_name='';
		$c_contact_no='';
		$c_email='';
		$c_password='';
		
		$data=array(
		 	'c_name'=>$this->input->post('c_name'),
		 	'c_contact_no'=>$this->input->post('c_contact_no'),
		 	'c_email'=>$this->input->post('c_email'),
		 	'c_password'=>$this->input->post('c_password'),
		 	
		 	
		 );
		$result=$this->db->query('insert into `customer`(`c_name`, `c_contact_no`, `c_email`, `c_password`) values(?,?,?,?)',$data);

		if($result)
		{
			$status = 1;
			$msg = "Data Saved!";
			$data =  array('status'=>$status,'msg'=>$msg);
		}
		else
		{
			$status = 0;
			$msg = "Data Not Saved!";
			$data =  array('status'=>$status,'msg'=>$msg);
		}
			echo json_encode($data); 

	}
	public function about_us()
	{
		$this->load->view('frontend/customer/about_us');
	}
	public function feedback()
	{
		$this->db->select('*')->from('feedbacks');
		$data=$this->db->get();
		$get = $data->result(); 
		$newdata['data'] = $get;
		$this->load->view('frontend/customer/feedback',$newdata);
	}
	public function insert_feedback()
	{
		$fb_u_nm='';	
		$fb_email='';	
		$fb_phone='';	
		$fb_msg='';
		$data=array(
		 	
		 	'fb_u_nm'=>$this->input->post('fb_u_nm'),
		 	'fb_email'=>$this->input->post('fb_email'),
		 	'fb_phone'=>$this->input->post('fb_phone'),
		 	'fb_msg'=>$this->input->post('fb_msg'),
 	
		 );
		$result=$this->db->query('insert into feedbacks(`fb_u_nm`, `fb_email`, `fb_phone`, `fb_msg`) values(?,?,?,?)',$data);
		if($result)
		{
			$status = 1;
			$msg = "Data Saved!";
			$data =  array('status'=>$status,'msg'=>$msg);
		}
		else
		{
			$status = 0;
			$msg = "Data Not Saved!";
			$data =  array('status'=>$status,'msg'=>$msg);
		}
			echo json_encode($data); 

	}
	public function category()
	{
		$this->load->view('frontend/customer/product');
	}
	public function sub_category()
	{
		$this->load->view('frontend/customer/sub_product');
	}
	public function category_vise_page()
	{
		$c_id=$this->get('c_id');
		$this->load->view('frontend/customer/product');
	}
	public function contact_us()
	{
		$this->load->view('frontend/customer/contact_us');
	}
	public function policy()
	{
		$this->load->view('frontend/customer/policy');
	}
	public function terms()
	{
		$this->load->view('frontend/customer/terms');
	}
	
	public function product()
	{
		 $category = $this->uri->segment(2);
		$this->db->select('*')->from('product')->where('pr_category',$category);
		$data=$this->db->get();
		$get = $data->result(); 
		$newdata['data'] = $get; 
		$this->load->view('frontend/customer/product',$newdata);
		// $this->load->view('frontend/customer/product');
	}	
	public function sub_product()
	{
		$category = $this->uri->segment(2);
		$this->db->select('*')->from('product')->where('pr_s_category',$category);
		$data=$this->db->get();
		$get = $data->result(); 
		$newdata['data'] = $get; 
		$this->load->view('frontend/customer/product',$newdata);
		// $this->load->view('frontend/customer/product');
	}
	
	public function product_view()
	{
		$category = $this->uri->segment(3);
		$this->db->select('*')->from('product')->where('pr_id',$category);
		//echo 'thos'.$this->db->last_query();
		$data=$this->db->get();
		$get = $data->result();
		 
		$newdata['data'] = $get; 
; 
		$this->load->view('frontend/customer/product_view',$newdata);
	}
	
	
	public function cart()
	{
		$ca_cus_id=$this->session->userdata('c_id');
	
		$this->db->select('product.pr_name, product.pr_mrp, product.pr_image,cart.ca_cus_id,cart.ca_pr_qty');
		$this->db->from('product');
		$this->db->join('cart','product.pr_id=cart.ca_pr_id');
		$this->db->where('cart.ca_cus_id',$ca_cus_id);
		$this->db->where('cart.status',1);
		$query=$this->db->get();
		$data=$query->result_array();
		$final['data'] = $data;
		$this->load->view('frontend/customer/cart',$final);

	}
	public function insert_cart()
	{
		$category = $this->uri->segment(3);
		// $ca_pr_id= $this->db->select('*')->from('product')->where('pr_id',$category);

		  $ca_cus_id=$this->session->userdata('c_id');
	
		
		$ca_pr_qty='1';	
		$status='1';
		$purchase_type='1';
		$data=array(
		 	
		 	'ca_cus_id'=>$ca_cus_id,
		 	'ca_pr_id'=>$category,
		 	'ca_pr_qty'=>$ca_pr_qty,
		 	'status'=>$status,
		 	'purchase_type'=>$purchase_type
 	
		 );
		$result=$this->db->query('insert into cart(`ca_cus_id`, `ca_pr_id`, `ca_pr_qty`,status,purchase_type) values(?,?,?,?,?)',$data);
	redirect('Customer/cart');
	}
	public function insert_cart_other()
	{
		$category = $this->uri->segment(3);
		// $ca_pr_id= $this->db->select('*')->from('product')->where('pr_id',$category);

		  $ca_cus_id=$this->session->userdata('c_id');
	
		
		$ca_pr_qty='1';	
		$status='1';
		$purchase_type='2';
		$data=array(
		 	
		 	'ca_cus_id'=>$ca_cus_id,
		 	'ca_pr_id'=>$category,
		 	'ca_pr_qty'=>$ca_pr_qty,
		 	'status'=>$status,
		 	'purchase_type'=>$purchase_type
 	
		 );
		$result=$this->db->query('insert into cart(`ca_cus_id`, `ca_pr_id`, `ca_pr_qty`,status,purchase_type) values(?,?,?,?,?)',$data);
	redirect('Customer/cart');
	}

	// public function delect_cart()
	// {
	// 	$ca_id=$this->input->get('ca_id');
	// 	$delete_cart="DELETE FROM `cart` WHERE ca_id='".$ca_id."' ";
	// 	$db=$this->load->database();
	// 	$result=$this->db->query($delete_cart);
	// 	redirect('Customer/cart');
	// }
	public function checkout()
	{
		$id=$this->session->userdata('c_id');

		$this->db->select('*')->from('customer')->where('c_id',$id);
		$data=$this->db->get();
		$get = $data->result();
		$newdata['data1'] = $get;
		
		$this->db->select('product.pr_name, product.pr_mrp, product.pr_image,product.pr_mrp,cart.ca_cus_id,cart.ca_pr_qty,cart.status');
		$this->db->from('product');
		$this->db->join('cart','product.pr_id=cart.ca_pr_id');
		$this->db->where('cart.ca_cus_id',$id);
		$this->db->where('cart.status','1');
		
		$data=$this->db->get();
		$get = $data->result();
		$newdata['data'] = $get;
		$this->load->view('frontend/customer/checkout',$newdata);

	}
	public function place_order()
	{

		$id=$this->session->userdata('c_id');
		$this->db->select('*')->from('customer')->where('c_id',$id);
		$data=$this->db->get();
		$get = $data->result();

		$this->db->select('product.pr_name, product.pr_mrp, product.pr_image,product.pr_mrp,cart.ca_cus_id,cart.ca_pr_qty,cart.ca_id');
		$this->db->from('product');
		$this->db->join('cart','product.pr_id=cart.ca_pr_id');
		$this->db->where('cart.ca_cus_id',$id);
		$this->db->where('cart.status','1');
		$data1=$this->db->get();
		$get1 = $data1->result();
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    	$charactersLength = strlen($characters);
    	$transaction_id = '';
	    
	    for ($i = 0; $i < 10; $i++) {
	        $transaction_id .= $characters[rand(0, $charactersLength - 1)];
	    }
		$total=0;
		$out=array();
    	$totalmrp=0;
		
		foreach($get1 as $get_data_now)
		{
		$pr_name=$get_data_now->pr_name;	
		$mrp=$totalmrp+$get_data_now->pr_mrp;	
		$qty= $get_data_now->ca_pr_qty;	
		$total=$total+($mrp*$qty);
		array_push($out,$get_data_now->ca_id);
		} 		
	  	$cartids=implode(',', $out);
    
		$ca_cus_id=$this->session->userdata('c_id');				
		$or_c_name=$this->session->userdata('c_name',$get);	
		$or_c_contact_no=$this->session->userdata('c_contact_no',$get);	
		$or_email=$this->session->userdata('c_email');	

		$or_pay_method=$this->input->post('or_pay_method');
		$or_address=$this->input->post('or_address');	
		$or_city=$this->input->post('or_city');	
		$or_state=$this->input->post('or_state');	
		$or_pincode=$this->input->post('or_pincode');
		
    $cartid=implode(',', $out);
		$data = array(
						'or_ca_id' =>$ca_cus_id, 
						'or_pay_method' =>$or_pay_method, 
						'or_total_price' =>$total, 
						'or_c_name' =>$or_c_name, 
						'or_c_contact_no' =>$or_c_contact_no, 
						'or_email' =>$or_email, 
						'or_address' =>$or_address, 
						'or_city' =>$or_city, 
						'or_state' =>$or_state,
						'or_pincode' =>$or_pincode,
						'transaction_id'=>$transaction_id,
						'or_pr_mrp'=>$total,
						'cart_id'=>$cartids
		);

		$date = date("d-m-Y");
		$date = strtotime($date);
		$date = strtotime("+7 day", $date);
		
		$result=$this->db->query('insert into orders(`or_ca_id`, `or_pay_method`, `or_total_price`, `or_c_name`, `or_c_contact_no`, `or_email`, `or_address`, `or_city`, `or_state`, `or_pincode`,`transaction_id`,or_pr_mrp,cart_id) values(?,?,?,?,?,?,?,?,?,?,?,?,?)',$data);
		redirect('Customer/order');
	}
	public function order()
	{
		$id=$this->session->userdata('c_id');
		
		$this->db->select('product.pr_name, product.pr_mrp, product.pr_image,cart.ca_cus_id,cart.ca_pr_qty,cart.status');
		$this->db->from('product');
		$this->db->join('cart','product.pr_id=cart.ca_pr_id');
		$this->db->where('cart.ca_cus_id',$id);
		$this->db->where('cart.status','1');
		$data=$this->db->get();
		
		$get = $data->result();
		$newdata=array();
		$newdata['data'] = $get;

		$this->db->select('*')->from('orders')->where('or_ca_id',$id);
		$data1=$this->db->get();
		$get1 = $data1->result();
		$newdata['data1'] = $get1;

		 $this->db->query('UPDATE `cart` SET status=2  WHERE status=1');

		$this->load->view('frontend/customer/order',$newdata);
	}
	

}
