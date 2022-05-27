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
                                <h3>ORDER's
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="<?php echo base_url();?>vendor/index"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Order </li>
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
                                <h5>Order Detail's</h5>
                            </div>
                            <div class="card-body order-datatable">
                                <table class="display" id="example">
                                    <thead>
                                    <tr>
                                       <th>Id</th>
                                        <th>Customer Name</th>
                                        <th>Contact no.</th>
                                        <th>address</th>
                                        <th>Payment Method</th>
                                        <th>Total Amount</th>
                                       
                                    </tr>
                                    </thead>

                                    <tbody>
                                          <?php  
                                              foreach($data as $row)  
                                              {  
                                          ?>    
                                          <tr class="tabledata" id="tabledata"> 
                                                  <td><?php echo $row->transaction_id;?></td> 
                                                  <td><?php echo $row->or_c_name;?></td>
                                                  <td><?php echo $row->or_c_contact_no;?></td>
                                                  <td><?php echo $row->or_address;?>,<?php echo $row->or_address;?></td> 
                                                  <td><?php echo $row->or_pay_method;?></td>
                                                  <td><?php echo $row->or_total_price;?></td>
                                                
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
      "pageLength": 10,
        dom: 'Bfrtip',
        buttons: [
            
            'excelHtml5',
            
        ]
    } );
} );
</script>