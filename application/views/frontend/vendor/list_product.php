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
                                <h3>Product List</h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="<?php echo base_url();?>vendor/index"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Product </li>
                                <li class="breadcrumb-item active">Product List</li>
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
                                <h5>Product List</h5>
                            </div>
                            <div class="card-body order-datatable">
                                <table class="display" id="example">
                                    <thead>
                                    <tr>
                                        <th>Product Image</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Sub Category</th> 
                                        <th>Price</th>
                                        <th>Sale Price</th>
                                        <th>Quantity</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php  
                                              foreach($data as $row)  
                                              {  
                                          ?>
                                    <tr class="tabledata" id="tabledata">
                                        <td><img src="<?php echo $row->pr_image;?>" width="60" height="60"></td>
                                        <td><?php echo $row->pr_name;?></td>
                                        <td><?php echo $row->pr_category;?></td>
                                        <td><?php echo $row->pr_s_category;?></td>
                                        <td><?php echo $row->pr_price;?></td>
                                        <td><?php echo $row->pr_mrp;?></td>
                                        <td><?php echo $row->pr_qty;?></td>
                                    </tbody>
                                         <?php 
                                              }  
                                            ?>
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
      "pageLength": 10,
        dom: 'Bfrtip',
        buttons: [
            
            'excelHtml5',
            
        ]
    });
});
</script>