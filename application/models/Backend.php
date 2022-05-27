<?php
class Backend extends CI_Model
{
	
	// category page
	public function all_parent_category()
	{
		 $this->db->select('*')->from('category')->where('is_parent','1');
		$data=$this->db->get();
		return $data->result(); 
	}
	public function admin_login($data)
	{
			$result=$this->db->query('SELECT * FROM `admin` where admin_email = "'.$data['admin_email'].'" and admin_password = "'.$data['admin_password'].'" ');
			   $result->num_rows();
	
			   if($result->num_rows()==1)
			    {   
			    	$row=$result->row();
			    	
			    	$SeeData = array(
							'admin_id' =>$row->admin_id,
							'admin_email'=>$row->admin_email,
		                    'admin_Login'=> TRUE
						);
				   $this->session->set_userdata($SeeData);
				   $status = 1;
				   $msg = "Login Successfully.";
			   }
			   else
			   {
			       $status = 0;
				   $msg = "Email or Password Wrong!";
			   }
				$array =  array('status'=>$status,'msg'=>$msg);
			    echo json_encode($array);

	}
	public function customer_login($data)
	{
			$result=$this->db->query('SELECT * FROM `customer` where c_email = "'.$data['c_email'].'" and c_password = "'.$data['c_password'].'" ');
			   $result->num_rows();
	
			   if($result->num_rows()==1)
			    {   
			    	$row=$result->row();
			    	
			    	$SeeData = array(
							'c_id' =>$row->c_id,
							'c_email'=>$row->c_email,
							'c_name'=>$row->c_name,
							'c_contact_no'=>$row->c_contact_no,
		                    'customer_Login'=> TRUE
						);
				   $this->session->set_userdata($SeeData);
				   //$this->load->view('frontend/customer/header');
				   // $this->load->controller('Customer/place_order');
				   $status = 1;
				   $msg = "Login Successfully.";
			   }
			   else
			   {
			       $status = 0;
				   $msg = "Email or Password Wrong!";
			   }
				$array =  array('status'=>$status,'msg'=>$msg);
			    echo json_encode($array);

	}
	public function insert_category($data)
	{
		$parent_id='';
		$is_parent='';		
			
		if($this->input->post('parent_id')=='' || $this->input->post('parent_id')== NULL)
		{
			$parent_id='';
			$is_parent='1';
		}
		else 
		{
			$parent_id=$this->input->post('parent_id');
			$is_parent='0';	
		}

		 $data=array(
		 	'c_name'=>$this->input->post('c_name'),
		 	'is_parent'=>$is_parent,
		 	'parent_id'=>$parent_id,
		 	'status'=>'1'
		 );
		 
		$result=$this->db->query('insert into category(`c_name`, `is_parent`, `parent_id`, `status`) values(?,?,?,?)',$data);

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
	// vendor page




}
?>