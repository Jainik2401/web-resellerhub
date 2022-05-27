<?php
include_once('header.php');
?>
<div class="page-wrapper">
    <div class="page-body-wrapper">
    	<?php
        include_once('sidebar.php');
        ?>
        <div class="page-body">
        	<div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Customer</h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="<?php echo base_url();?>welcome/index"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Customer </li>
                                
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 mb-50">
                        <div class="card tab2-card">
                            <div class="card-header">
                                <h5> Add Customer</h5>
                            </div>
                            <div class="card-body"> 
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show" id="account" role="tabpanel" aria-labelledby="account-tab">
                                        <form class="needs-validation user-add" method="post" id="insertform" name="insertform">
                                            <div class="form-group row">
                                                <label for="validationCustom0" class="col-xl-3 col-md-4">Name</label>
                                                <input class="form-control col-xl-8 col-md-7" id="c_name" name="c_name" placeholder="Enter Name" type="text"required>
                                            </div>
                                            <div class="form-group row">
                                                <label for="validationCustom1" class="col-xl-3 col-md-4">Contact No.</label>
                                                <input class="form-control col-xl-8 col-md-7" id="c_contact_no" name="c_contact_no" placeholder="Enter Contact No." type="tel" required>
                                            </div>
                                            <div class="form-group row">
                                                <label for="validationCustom2" class="col-xl-3 col-md-4">Email</label>
                                                <input class="form-control col-xl-8 col-md-7" id="c_email" name="c_email" placeholder="Enter Email" type="email" required>
                                            </div>
                                            <div class="form-group row">
                                                <label for="validationCustom3" class="col-xl-3 col-md-4">Password</label>
                                                <input class="form-control col-xl-8 col-md-7" id="c_password" name="c_password" 
                                                placeholder="Enter Password" type="password" required>
                                            </div>
                                            <div class="pull-left">
                                                <button type="submit" name="save" id="save" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Customer Information</h5>
                            </div>
                            <div class="card-body order-datatable">
                                <table class="display" id="example">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Contact No.</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                          <?php  
                                              foreach($data as $row)  
                                              {  
                                          ?>
                                          <tr class="tabledata" id="tabledata"> 
                                                  <td><?php echo $row->c_id;?></td> 
                                                  <td><?php echo $row->c_name;?></td> 
                                                  <td><?php echo $row->c_contact_no;?></td>
                                                  <td><?php echo $row->c_email;?></td>
                                                  <td><?php echo $row->c_password;?></td>
                                                  <td class="text-left">

                                                      <button type="button" value="delete" class="btn btn-sm btn-primary" name="delete" onclick="conformdelete(<?php echo $row->c_id; ?>)" ><i data-feather="trash-2"></i></button>
                                                  </td>
                                                  
                                            </tr>  
                                            <?php 
                                              }  
                                            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php
        include_once('footer.php');
        ?>
    </div>
</div>
<script>
   $(document).ready(function(){

    $.ajax({
      url:"<?php echo base_url("Welcome/view_user");?>",
      dataType:'json',
      success:function(data){
        $.each(data,function(index,data){
             $('#c_type').append('<option value="'+data['c_id']+'">'+data['c_name']+'</option>');
          });   
        }
    });

    $('form#insertform').submit(function(e) {
      e.preventDefault();
      var formData = new FormData( $( 'form#insertform' )[ 0 ] );
        $.ajax({
       type: "POST",
         url: "<?php echo base_url(); ?>Welcome/insert_user",
         data: formData,
        dataType: "json",
        contentType: false, 
        processData: false,
        beforeSend: function () {
         $('#save').attr('disabled', true);
         },
        success:function(data)
        {
         if(data.status!='')
         {  
          $("form#insertform")[0].reset();
          $('#save').removeAttr('disabled');
          var msg = data.msg;
          $('#formvmsg').html(msg);
          }
        }
});
      });

        });
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable( {
      "pageLength": 5,
        dom: 'Bfrtip',
        buttons: [
            
            'excelHtml5',
            
        ]
    });
});
</script>
<script type="text/javascript">
  function conformdelete(val)
  {
    if (confirm("are you sure?")) 
    {
      var url="<?php echo base_url();?>";
      window.location = url+"Welcome/delete_user?c_id="+val;
    }
    else
    {
      return false;
    }
    
  }

</script>