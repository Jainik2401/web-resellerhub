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
                                <h3>Category</h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="<?php echo base_url();?>welcome/index"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Category </li>
                                
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card tab2-card">
                            <div class="card-header">
                                <h5> Add Category</h5>
                            </div>
                            <div class="card-body"> 
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show" id="account" role="tabpanel" aria-labelledby="account-tab">
                                        <form class="needs-validation user-add" method="post" id="insertform" name="insertform" >
                                            <div class="form-group row">
                                                <label for="validationCustom0" class="col-xl-3 col-md-4">Category Name</label>
                                                <input class="form-control col-xl-8 col-md-7" id="c_name"  name="c_name" placeholder="Category Name" type="text" required>
                                            </div>
                                            <div class="form-group row">
                                                <label for="validationCustom1" class="col-xl-3 col-md-4">Parent Category
                                                </label>
                                            	<select class="form-control col-xl-8 col-md-7"name="parent_id" id="parent_id"  required>
                                                	<option disabled selected>Choose a Parent </option>
                                                </select>
                                            </div>
                                            <div class="pull-left">
      			                                    <button type="submit" id="save" name="save" class="btn btn-primary">Save Changes</button>
      			                                    <button type="submit"  class="btn btn-primary">Cancel</button>
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
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Category Information</h5>
                            </div>
                            <div class="card-body order-datatable">
                                <table class="display" id="example">
                                    <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Category Name</th>
                                        <th>View Sub Category</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
	                                  <?php  
	                                      foreach ($data as $row)  
	                                      {  
	                                  ?>
	                                  <tr class="tabledata" class="tabledata"> 
	                                           <td><?php echo $row->c_id;?></td> 
	                                           <td><?php echo $row->c_name;?></td>  
	                                           <td><a href="javascript:;" class="view_category" id="view_category" onclick="view_category(<?php echo $row->c_id; ?> ,'<?php echo $row->c_name;?>');"> Sub Categories </a></td>  
	                                           <td class="text-left">

                                                <button type="button" value="delete" class="btn btn-sm btn-primary" name="delete" onclick="conformdelete(<?php echo $row->c_id;?>)" ><i data-feather="trash-2"></i></button>
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
                    <div class="col-sm-6">
                        <div class="card" id="hide_table">
                            <div class="card-header" >	
								<h6 class="text-uppercase mb-0" id="subcategoryname"> </h6>
                            </div>
                            <div class="card-body order-datatable">
                                <table class="display" id="example1">
                                    <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Category Name</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody class="tabledata" id="view_sub_category">
                                        
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
      url:"<?php echo base_url("Welcome/all_parent_category");?>",
      dataType:'json',
      success:function(data){
        $.each(data,function(index,data){
             $('#parent_id').append('<option value="'+data['c_id']+'">'+data['c_name']+'</option>');
          });   
        }
    });

    $('#save').click(function(e) {
      e.preventDefault();
      var formData = new FormData( $( 'form#insertform' )[ 0 ] );
        $.ajax({
       type: "POST",
         url: "<?php echo base_url(); ?>Welcome/insert_category",
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
    $("#hide_table").css("display", "none");
     function view_category(categoryId,categoryName){

        $.ajax({
       type: "GET",
         url: "<?php echo base_url(); ?>Welcome/view_sub_category?parent_id="+categoryId,
        dataType: "json",
        contentType: false, 
        processData: false,

        success:function(data){
          $('#subcategoryname').text(categoryName);
          $("#hide_table").css("display", "");
          $('#view_sub_category').html('');
        $.each(data,function(index,data){
          console.log(data);
             $('#view_sub_category').append('<tr><td>'+data['c_id']+'</td><td>'+data['c_name']+'</td><td>'+data['status']+'</td></tr>');
          });   
        }
        });
      }

</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable( {
      "pageLength": 5,
        dom: 'Bfrtip',
        buttons: [
            
            'excelHtml5',
            
        ]
    } );
} );
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example1').DataTable( {
      "pageLength": 5,
        dom: 'Bfrtip',
        buttons: [
            
            'excelHtml5',
            
        ]
    } );
} );
</script>
<script type="text/javascript">
  function conformdelete(val)
  {
    if (confirm("are you sure?")) 
    {
      var url="<?php echo base_url();?>";
      window.location = url+"Welcome/delete_category?c_id="+val;
    }
    else
    {
      return false;
    }
    
  }

</script>