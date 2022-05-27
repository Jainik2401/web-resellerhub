 public function view_category()
{ 
$select = $this->db->query("select * from category");
 $get = $select->result();
 $select->more_result();
echo json_encode($get, true);
$array=array('info'=>$get);
return $array;
}


ajax code

 $.ajax({
      url:"<?php echo base_url("Welcome/view_category");?>",
      dataType:'json',
      success:function(data){
        $.each(data,function(index,data){
             $('#dataCategory').append('<tr><td>'+data['c_name']+'</td><td>'+data['is_parent']+'</td><td>'+data['parent_id']+'</td><td>'+data['status']+'</td></tr>');
          });   
        }
    });