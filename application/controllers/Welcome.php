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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url'); 
		$this->load->database('');
		$this->load->model('Backend');
		
	}
	public function slider()
	{
		
		
		$this->load->view('admin/slider');
	}
	// public function upload_slider()
	// {
	// 	$config['upload_path'] = 'C:\xampp\htdocs\reseller-hub\assets\slider';
 //        $config['allowed_types'] = 'jpeg|jpg|png';	
 //        $this->load->library('slider', $config);
 //        $this->upload->do_upload('s_photo');
 //        $s_photo = $this->input->post('s_photo');
 //        $image_data=$this->upload->data();
	// 	$image_path=base_url("assets/slider/".$image_data['raw_name'].$image_data['file_ext']);
	// 	$s_photo['s_photo']=$image_path;
	// 	 $this->db->query('INSERT INTO `slider`(`s_photo`) VALUES (?)',$s_photo);
	// }
	public function index()
	{
		$customer=$this->db->select('cus_name')->from('customer')->like('c_name');
		$data1= $this->db->count_all_results();
		$order=$this->db->select('order_name')->from('orders')->like('or_id');
		$data2= $this->db->count_all_results();
		$return=$this->db->select('return_name')->from('category')->like('c_id');
		$data3= $this->db->count_all_results();
		$vendor=$this->db->select('return_name')->from('reseller')->like('r_id');
		$data4= $this->db->count_all_results();
		$newdata['customer'] = $data1;
		$newdata['order'] = $data2;
		$newdata['return'] = $data3;
		$newdata['vendor'] = $data4;
		$this->load->view('admin/index',$newdata);
	}



	// customer insert view
	public function user()
	{
		$this->db->select('*')->from('customer');
		$data=$this->db->get();
		$get = $data->result(); 
		$newdata['data'] = $get; 
		$this->load->view('admin/user', $newdata);
	}
	public function delete_user()
	{
		$c_id=$this->input->get('c_id');
		$delete_user="DELETE FROM `customer` WHERE c_id='".$c_id."' ";
		$db=$this->load->database();
		$result=$this->db->query($delete_user);
		if ($result) 
		{
			$status = 1;
			$msg = "Data Delete!";
			$data =  array('status'=>$status,'msg'=>$msg);
			redirect("/welcome/user");
		}
		else
		{
			$status = 1;
			$msg = "Data  Not Delete!";
			$data =  array('status'=>$status,'msg'=>$msg);
			redirect("/welcome/user");
		}
	}
	public function insert_user()
	{	
		$c_name='';		
		$c_contact_no='';	
		$c_email='';	
		$c_password='';	

		 $data=array(
		 	'cr_name'=>$this->input->post('c_name'),
		 	'c_contact_no'=>$this->input->post('c_contact_no'),
		 	'c_email'=>$this->input->post('c_email'),
		 	'c_password'=>$this->input->post('c_password')
		 	
		 );
		
		$result=$this->db->query('insert into customer(`c_name`, `c_contact_no`, `c_email`, `c_password`) values(?,?,?,?)',$data);

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
	public function view_user()
	{
		$this->db->select('*')->from('customer');
		$data=$this->db->get();
		$get = $data->result(); 
		echo json_encode($get);
	}

	// vendor insert view
	public function vendor_reseller()
	{
		$this->db->select('*')->from('reseller');
		$data=$this->db->get();
		$get = $data->result(); 
		$newdata['data'] = $get; 
		$this->load->view('admin/vendor_reseller', $newdata);
	}
	public function delete_vendor()
	{
		$r_id=$this->input->get('r_id');
		$delete_vendor="DELETE FROM `reseller` WHERE r_id='".$r_id."' ";
		$db=$this->load->database();
		$result=$this->db->query($delete_vendor);
		if ($result) 
		{
			$status = 1;
			$msg = "Data Delete!";
			$data =  array('status'=>$status,'msg'=>$msg);
			redirect("/welcome/vendor_reseller");
		}
		else
		{
			$status = 1;
			$msg = "Data  Not Delete!";
			$data =  array('status'=>$status,'msg'=>$msg);
			redirect("/welcome/vendor_reseller");
		}
	}
	// public function insert_vendor_reseller()
	// {	
	// 	$cr_name='';		
	// 	$cr_contact_no='';	
	// 	$cr_email='';	
	// 	$cr_password='';	

	// 	 $data=array(
	// 	 	'cr_name'=>$this->input->post('cr_name'),
	// 	 	'cr_contact_no'=>$this->input->post('cr_contact_no'),
	// 	 	'admin_password'=>$this->input->post('cr_email'),
	// 	 	'cr_email'=>$this->input->post('cr_password'),
	// 	 	'cr_type'=>'2'
	// 	 );
		
	// 	$result=$this->db->query('insert into customer_reseller(`cr_name`, `cr_contact_no`, `cr_email`, `cr_password`, `cr_type`) values(?,?,?,?,?)',$data);

	// 	if($result)
	// 	{
	// 		$status = 1;
	// 		$msg = "Data Saved!";
	// 		$data =  array('status'=>$status,'msg'=>$msg);
	// 	}
	// 	else
	// 	{
	// 		$status = 0;
	// 		$msg = "Data Not Saved!";
	// 		$data =  array('status'=>$status,'msg'=>$msg);
	// 	}
	// 		echo json_encode($data); 
	// }
	// public function view_vendor_reseller()
	// {
	// 	$this->db->select('*')->from('reseller');
	// 	$data=$this->db->get();
	// 	$get = $data->result(); 
	// 	echo json_encode($get);
	// }


	// coupon insert view
	public function coupon()
	{
		$this->db->select('*')->from('discount');
		$data=$this->db->get();
		$get = $data->result(); 
		$newdata['data'] = $get; 
		$this->load->view('admin/coupon', $newdata);

	}
	public function delete_coupon()
	{
		$d_id=$this->input->get('d_id');
		$delete_coupon="DELETE FROM `discount` WHERE d_id='".$d_id."' ";
		$db=$this->load->database();
		$result=$this->db->query($delete_coupon);
		if ($result) 
		{
			$status = 1;
			$msg = "Data Delete!";
			$data =  array('status'=>$status,'msg'=>$msg);
			redirect("/welcome/coupon");
		}
		else
		{
			$status = 1;
			$msg = "Data  Not Delete!";
			$data =  array('status'=>$status,'msg'=>$msg);
			redirect("/welcome/coupon");
		}
	}
	public function insert_coupon()
	{	
			
		$d_title='';
		$d_code='';	
		$d_desc='';	
		$d_percentage='';	
		 $data=array(
		 	'd_title'=>$this->input->post('d_title'),
		 	'd_code'=>$this->input->post('d_code'),
		 	'd_desc'=>$this->input->post('d_desc'),
		 	'd_percentage'=>$this->input->post('d_percentage')
		 	
 	
		 );
		
		$result=$this->db->query('insert into discount( `d_title`, `d_code`, `d_desc`, `d_percentage`) values(?,?,?,?)',$data);

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
	public function view_coupon()
	{
		$this->db->select('*')->from('coupon');
		$data=$this->db->get();
		$get = $data->result(); 
		echo json_encode($get);
	}
	

	// invoice print
	public function invoice()
	{
		$this->db->select('*')->from('invoice');
		$data=$this->db->get();
		$get = $data->result(); 
		$newdata['data'] = $get; 
		$this->load->view('admin/invoice', $newdata);
		
	}
	// order detail
	public function order()
	{
		$this->db->select('*')->from('orders');
		$data=$this->db->get();
		$get = $data->result(); 
		$newdata['data'] = $get; 
		$this->load->view('admin/order', $newdata);

	}
	// offer
	public function offer()
	{
		$this->db->select('*')->from('offer');
		$data=$this->db->get();
		$get = $data->result(); 
		$newdata['data'] = $get; 
		$this->load->view('admin/offer', $newdata);
		
	}
	public function delete_offer()
	{
		$offer_id=$this->input->get('offer_id');
		$delete_offer="DELETE FROM `offer` WHERE offer_id='".$offer_id."' ";
		$db=$this->load->database();
		$result=$this->db->query($delete_offer);
		if ($result) 
		{
			$status = 1;
			$msg = "Data Delete!";
			$data =  array('status'=>$status,'msg'=>$msg);
			redirect("/welcome/offer");
		}
		else
		{
			$status = 1;
			$msg = "Data  Not Delete!";
			$data =  array('status'=>$status,'msg'=>$msg);
			redirect("/welcome/offer");
		}
	}
	public function insert_offer()
	{	
		
		$offer_desc='';	
		$offer_code='';	
		$offer_percentage='';			
		$offer_title='';	
		 $data=array(
		 	
		 	'offer_desc'=>$this->input->post('offer_desc'),
		 	'offer_code'=>$this->input->post('offer_code'),
		 	'offer_percentage'=>$this->input->post('offer_percentage'),
		 	'offer_title'=>$this->input->post('offer_title')
 	
		 );
		
		$result=$this->db->query('insert into offer(`offer_desc`, `offer_code`, `offer_percentage`, offer_title) values(?,?,?,?)',$data);

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
	

	// category
	public function category()
	{
		$select = $this->db->query("select * from category where is_parent='1'");
        $get = $select->result();
        $data['data'] = $get;
		$this->load->view('admin/category', $data);	
	}
	public function delete_category()
	{
		$c_id=$this->input->get('c_id');
		$parent_id=$this->input->get('parent_id');
		$delete_category="DELETE FROM `category` WHERE c_id='".$c_id."' " ;
		$delete_sub_category="DELETE FROM `category` WHERE parent_id='".$c_id."' " ;
		$db=$this->load->database();
		$result=$this->db->query($delete_category);
		$result=$this->db->query($delete_sub_category);
		if ($result) 
		{
			$status = 1;
			$msg = "Data Delete!";
			$data =  array('status'=>$status,'msg'=>$msg);
			redirect("/welcome/category");
		}
		else
		{
			$status = 1;
			$msg = "Data  Not Delete!";
			$data =  array('status'=>$status,'msg'=>$msg);
			redirect("/welcome/category");
		}
	}
	public function all_parent_category()
	{
		$data=$this->Backend->all_parent_category();
		echo json_encode($data); 
	}
	public function insert_category()
	{
		$data['c_name']=$this->input->post('c_name');
		$data['parent_id']=$this->input->post('parent_id');
		$data=$this->Backend->insert_category($data);
	}
	public function view_sub_category()
	{
		$parent_id=$this->input->get('parent_id');
		$select = $this->db->query("select * from category where is_parent='0' and parent_id = ".$parent_id);
        $get = $select->result();
		echo json_encode($get);
	}
	
	public function login()
	{
		$this->load->view('admin/login');
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect("admin/login");
	}

	public function adminlogin()
	{

	$data['admin_email'] = $this->input->post('admin_email');
	$data['admin_password'] = $this->input->post('admin_password');
	
	$this->Backend->admin_login($data);

	}
	
	
	
	
	
	 
	

}
