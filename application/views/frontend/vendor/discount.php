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
                                <h3>Discount
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="<?php echo base_url();?>vendor/index"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Discount </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="card tab2-card">
                    <div class="card-header">
                        <h5>Create Discount Coupon</h5>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="general" role="tabpanel" aria-labelledby="general-tab">
                                <form class="needs-validation" method="post" id="insertform" name="insertform" >
                                    <div class="row">
                                        <div class="col-sm-12">   
                                            <div class="form-group row">
                                                <label for="validationCustom0" class="col-xl-3 col-md-4">Coupon Title</label>
                                                <input class="form-control col-md-7" id="d_title" name="d_title" type="text" required="">
                                            </div>
                                            <div class="form-group row">
                                                <label for="validationCustom0" class="col-xl-3 col-md-4">Coupon Code</label>
                                                <input class="form-control col-md-7" id="d_code" name="d_code" type="text" required="">
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="validationCustom0" class="col-xl-3 col-md-4">Coupon Description</label>
                                                <textarea class="form-control col-md-7" id="d_desc" name="d_desc" type="text" required=""></textarea>
                                            </div>
                                            <div class="form-group row">
                                                <label for="validationCustom1" class="col-xl-3 col-md-4">Coupon Percentage</label>
                                                <input class="form-control col-md-7" id="d_percentage" name="d_percentage" type="text" required="">
                                            </div>
                                            <div class="pull-left">
                                                <button type="submit" name="save" id="save" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
                                <h5>Discount Information</h5>
                            </div>
                            <div class="card-body order-datatable">
                                <table class="display" id="example">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Titel</th>
                                        <th>Code</th>
                                        <th>Description</th>
                                        <th>Percentage</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                          <?php  
                                              foreach($data as $row)  
                                              {  
                                          ?>
                                          <tr class="tabledata" id="tabledata"> 

                                                  <td><?php echo $row->d_id;?></td>
                                                  <td><?php echo $row->d_title;?></td> 
                                                  <td><?php echo $row->d_code;?></td> 
                                                  <td><?php echo $row->d_desc;?></td>
                                                  <td><?php echo $row->d_percentage;?></td>
                                                  <td class="text-left">

                                                      <button type="button" value="delete" class="btn btn-sm btn-primary" name="delete" onclick="conformdelete(<?php echo $row->d_id; ?>)" ><i data-feather="trash-2"></i></button>
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
    $('form#insertform').submit(function(e) {
      e.preventDefault();
      var formData = new FormData( $( 'form#insertform' )[ 0 ] );
        $.ajax({
                   type: "POST",
                     url: "<?php echo base_url(); ?>Vendor/insert_discount",
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
      window.location = url+"Vendor/delete_discount?d_id="+val;
    }
    else
    {
      return false;
    }
    
  }

</script>