<?php
class NewVendor extends CI_Model
{
	public function vendor_login($data)
	{
			$result=$this->db->query('SELECT * FROM `reseller` where r_email = "'.$data['r_email'].'" and r_password = "'.$data['r_password'].'" ');
			   $result->num_rows();
	
			   if($result->num_rows()==1)
			    {   
			    	$row=$result->row();
			    	
			    	$SeeData = array(
							'r_id' =>$row->r_id,
							'r_email'=>$row->r_email,
		                    'vendor_Login'=> TRUE
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
	
	public function get_customer()
	{
		$this->db->select('cus_name');
		$this->db->from('customer');
		$this->db->like('c_name');
		echo $this->db->count_all_results();
	}
	public function category_view()
	{
		$this->db->select('*')->from('category')->where('is_parent','1');
		$data=$this->db->get();
		return $data->result(); 
	}

	public function sub_category()
	{
		$is_parent=$this->input->get('is_parent');
		$this->db->select('*')->from('category')->where('parent_id',$is_parent);
		$data=$this->db->get();
		return $data->result();
	}
}
?>