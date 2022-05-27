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
                                <h3>Invoice's
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="<?php echo base_url();?>vendor/index"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Invoice </li>
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
                                <h5>Invoice's</h5>
                            </div>
                            <div class="card-body order-datatable">
                                <table class="display" id="example">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Transation Id</th>
                                        <th>Date</th>
                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Amont</th>
                                        <th>Tax</th>
                                        <th>Total</th>
                                        <th>Download</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                          <?php  
                                              foreach($data as $row)  
                                              {  
                                          ?>
                                          <tr class="tabledata" id="tabledata"> 
                                                  <td><?php echo $row->in_id;?></td> 
                                                  <td><?php echo $row->in_trans_id;?></td> 
                                                  <td><?php echo $row->in_date;?></td> 
                                                  <td><?php echo $row->in_product_nm;?></td>
                                                  <td><?php echo $row->in_product_qty;?></td>
                                                  <td><?php echo $row->in_product_price;?></td>
                                                  <td><?php echo $row->in_amount;?></td>
                                                  <td><?php echo $row->in_tax;?></td>
                                                  <td><?php echo $row->in_total;?></td>
                                                  <td><?php echo $row->in_down;?></td>
                                                  
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