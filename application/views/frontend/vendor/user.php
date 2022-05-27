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
                                <li class="breadcrumb-item"><a href="<?php echo base_url();?>vendor/index"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Customer </li>
                                
                            </ol>
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
