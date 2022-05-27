<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller {

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
		$this->load->model('NewVendor');
		$this->load->library('form_validation');
		
	}
	
	public function index()
	{
		$customer=$this->db->select('cus_name')->from('customer')->like('c_name');
		$data1= $this->db->count_all_results();
		$order=$this->db->select('order_name')->from('orders')->like('or_id');
		$data2= $this->db->count_all_results();
		$return=$this->db->select('return_name')->from('product')->like('pr_id');
		$data3= $this->db->count_all_results();
		$newdata['customer'] = $data1;
		$newdata['order'] = $data2;
		$newdata['return'] = $data3;
		$this->load->view('frontend/vendor/index',$newdata);
	}

	public function login()
	{

		$this->load->view('frontend/vendor/login');
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect("Vendor/login");
	}

	public function VendorLogin()
	{

	$data['r_email'] = $this->input->post('r_email');
	$data['r_password'] = $this->input->post('r_password');
	
	$this->NewVendor->vendor_login($data);

	}
	public function setting()
	{
		$id=$this->session->userdata('r_id');
		$this->db->select('*')->from('reseller')->where('r_id',$id);;
		$data=$this->db->get();
		$get = $data->result(); 
		$newdata['data'] = $get;
		$this->load->view('frontend/vendor/setting',$newdata);
	}

	public function report()
	{

		$this->load->view('frontend/vendor/report');
	}
	public function add_product()
	{


		$this->load->view('frontend/vendor/add_product');
	}
	public function save_product()
	{
		$config['upload_path'] = 'C:\xampp\htdocs\reseller-hub\assets\upload';
        $config['allowed_types'] = 'jpeg|jpg|png';

        $this->load->library('upload', $config);

        $this->upload->do_upload('pr_image');
		
				$pr_category='';
				$pr_s_category='';	
				$pr_name='';	
				$pr_desc='';	
				$pr_price='';	
				$pr_mrp='';	
				$pr_qty='';	
				$pr_image='';	

		       $data1=array( 
		       				'pr_category'=>$this->input->post('pr_category'),
		       				'pr_s_category'=>$this->input->post('pr_s_category'),
		       				'pr_name'=>$this->input->post('pr_name'),
		       				'pr_desc'=>$this->input->post('pr_desc'),
		       				'pr_price'=>$this->input->post('pr_price'),
		       				'pr_mrp'=>$this->input->post('pr_mrp'),
		       				'pr_qty'=>$this->input->post('pr_qty'),
		       				'pr_image'=>$this->input->post('pr_image'),
		      );
		       $image_data=$this->upload->data();
		       $image_path=base_url("assets/upload/".$image_data['raw_name'].$image_data['file_ext']);
		       $data1['pr_image']=$image_path;
		       
		       	

		       $this->db->query('insert into product(`pr_category`, `pr_s_category`, `pr_name`, `pr_desc`, `pr_price`, `pr_mrp`, `pr_qty`,`pr_image`) values(?,?,?,?,?,?,?,?)',$data1);
		       
	    
		


       // attibutes table
     	$pr_a_key = $this->input->post('pr_a_key');
		$pr_a_value = $this->input->post('pr_a_value');
         $product_id = $this->db->insert_id();
       
       				foreach ($pr_a_key as $key => $value) 
       				{
       $data2=array( 	
       					'product_id'=> $product_id,	
       					'pr_a_key'=> $value,	
       					'pr_a_value'=> $pr_a_value[$key],	
      				);
       
       if($value != '')
       {
        	$this->db->query('insert into attibutes(`product_id`,`pr_a_key`, `pr_a_value`) values(?,?,?)',$data2);
       }
       	       		}

       	//specification table
       	$pr_s_key=$this->input->post('pr_s_key');
		$pr_s_value=$this->input->post('pr_s_value');
       	       		foreach ($pr_s_key as $key1 => $value1) 
       				{
       
        $data3=array( 	
        				'product_id'=> $product_id,
       					'pr_s_key'=> $value1,
       					'pr_s_value'=> $pr_s_value[$key1],	
       				);	
        
			       if($value1 != '')
			       {
			        $this->db->query('insert into specification(`product_id`,`pr_s_key`, `pr_s_value`) values(?,?,?)',$data3);
			       }       		
			   }


        		$this->load->view('frontend/vendor/add_product');
        		redirect('Vendor/add_product');

	}

	public function category_view()
	{
		$data=$this->NewVendor->category_view();
		echo json_encode($data); 
	}

	public function sub_category()
	{
		$data=$this->NewVendor->sub_category();
		echo json_encode($data);
	}
	public function list_product()
	{
		$this->db->select('*')->from('product');
		$data=$this->db->get();
		$get = $data->result(); 
		$newdata['data'] = $get; 
		$this->load->view('frontend/vendor/list_product', $newdata);
		
	}
	public function return()
	{
		$this->db->select('*')->from('return_product');
		$data=$this->db->get();
		$get = $data->result(); 
		$newdata['data'] = $get; 
		$this->load->view('frontend/vendor/return', $newdata);
		
	}
	public function order()
	{
		$this->db->select('*')->from('orders');
		$data=$this->db->get();
		$get = $data->result(); 
		$newdata['data'] = $get; 
		$this->load->view('frontend/vendor/order', $newdata);
		
	}
	public function invoice()
	{
		$this->db->select('*')->from('invoice');
		$data=$this->db->get();
		$get = $data->result(); 
		$newdata['data'] = $get; 
		$this->load->view('frontend/vendor/invoice', $newdata);
		
	}
	public function user()
	{
		$this->db->select('*')->from('customer');
		$data=$this->db->get();
		$get = $data->result(); 
		$newdata['data'] = $get; 
		$this->load->view('frontend/vendor/user', $newdata);
		
	}
	public function discount()
	{
		$this->db->select('*')->from('discount');
		$data=$this->db->get();
		$get = $data->result(); 
		$newdata['data'] = $get; 
		$this->load->view('frontend/vendor/discount', $newdata);

	}
	public function delete_discount()
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
			redirect("/Vendor/discount");
		}
		else
		{
			$status = 1;
			$msg = "Data  Not Delete!";
			$data =  array('status'=>$status,'msg'=>$msg);
			redirect("/Vendor/discount");
		}
	}
	public function insert_discount()
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
	public function insert_register()
	{
		$r_name='';
		$r_contact_no='';
		$r_email='';
		$r_password='';
		$r_gst_no='';
		$r_id_no='';
		$r_sql_1='';
		$r_ans_1='';
		$r_sql_2='';
		$r_ans_2='';

		$data=array(
		 	'r_name'=>$this->input->post('r_name'),
		 	'r_contact_no'=>$this->input->post('r_contact_no'),
		 	'r_email'=>$this->input->post('r_email'),
		 	'r_password'=>$this->input->post('r_password'),
		 	'r_gst_no'=>$this->input->post('r_gst_no'),
		 	'r_id_no'=>$this->input->post('r_id_no'),
		 	'r_sql_1'=>$this->input->post('r_sql_1'),
		 	'r_ans_1'=>$this->input->post('r_ans_1'),
		 	'r_sql_2'=>$this->input->post('r_sql_2'),
		 	'r_ans_2'=>$this->input->post('r_ans_2')
		 	
		 );
		$result=$this->db->query('insert into `reseller`(`r_name`, `r_contact_no`, `r_email`, `r_password`, `r_gst_no`, `r_id_no`, `r_sql_1`, `r_ans_1`, `r_sql_2`, `r_ans_2`) values(?,?,?,?,?,?,?,?,?,?)',$data);

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


	
	
	
	
	
	 
	

}
