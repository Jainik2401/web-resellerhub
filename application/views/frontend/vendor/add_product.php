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
                                <h3>Product
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="<?php echo base_url();?>vendor/index"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Product</li>
                                <li class="breadcrumb-item active">Add Product</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card tab2-card">
                            <div class="card-body">
                                <form class="form-horizontal auth-form" method="post" action="<?php echo base_url();?>vendor/save_product" enctype="multipart/form-data">
                                    <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" id="top-profile-tab" data-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="true"><i data-feather="user" class="mr-2"></i>Detail</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><i data-feather="settings" class="mr-2"></i>Image</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" id="123-top-tab" data-toggle="tab" href="#top-123" role="tab" aria-controls="top-123" aria-selected="false"><i data-feather="settings" class="mr-2"></i>Attributes</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" id="xyz-top-tab" data-toggle="tab" href="#top-xyz" role="tab" aria-controls="top-contact" aria-selected="false"><i data-feather="settings" class="mr-2"></i>Specification</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="top-tabContent">
                                        <div class="tab-pane fade show active" id="top-profile" role="tabpanel" aria-labelledby="top-profile-tab">
                                            <h5 class="f-w-600">Product Detail</h5>
                                            <div class="form-group row ">
                                               <label for="validationCustom0" class="col-xl-3 col-md-4 mb-10">Select Catagory</label> 
                                               <select class="form-control col-md-8" name="pr_category" id="parent_id" type="text" onchange="sub_category(this.value);">
                                                   <option disabled="" selected=""> Choose Category</option>
                                               </select>
                                            </div>
                                            <div class="form-group row ">
                                               <label for="validationCustom0" class="col-xl-3 col-md-4 mb-10">Select Sub-Catagory</label> 
                                               <select class="form-control col-md-8" name="pr_s_category" id="is_parent" type="text" >
                                                   <option disabled="" selected=""> Choose Sub-Category</option>
                                               </select>
                                            </div>
                                            <div class="form-group row ">
                                                <label for="validationCustom0" class="col-xl-3 col-md-4">Product Name</label>
                                                <input class="form-control col-md-8" name="pr_name" id="pr_name" type="text" required="">
                                            </div>
                                             <div class="form-group row ">
                                                <label for="validationCustom0" class="col-xl-3 col-md-4 mb-10">Description</label>
                                                <textarea class="form-control col-md-8" name="pr_desc" id="pr_desc" type="text" required=""></textarea>
                                            </div>
                                            <div class="form-group row ">
                                                <label for="validationCustom0" class="col-xl-3 col-md-4">Regular Price</label>
                                                <input class="form-control col-md-8" name="pr_price" id="pr_price" type="number" required="">
                                            </div>
                                            <div class="form-group row ">
                                                <label for="validationCustom0" class="col-xl-3 col-md-4">Sale Price</label>
                                                <input class="form-control col-md-8" name="pr_mrp" id="pr_mrp" type="number" required="">
                                            </div>
                                            <div class="form-group row ">
                                                <label for="validationCustom0" class="col-xl-3 col-md-4">Quantity</label>
                                                <input class="form-control col-md-8" name="pr_qty" id="pr_qty" type="number" required="">
                                            </div>
                                           
                                            
                                        </div>
                                        <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                                            <h5 class="f-w-600">Product Image</h5>
                                            <div class="form-group row ">
                                                
                                                <input type='file'  class='form-control' name='pr_image' size='20'required > 
                                                <?php 
                                                if(isset($error))
                                                {
                                                    echo $error;
                                                }
                                                 ?>
                                                
                                            </div>
                                            
                                        </div>
                                        <div class="tab-pane fade" id="top-123" role="tabpanel" aria-labelledby="123-top-tab">
                                            <h5 class="f-w-600">Attributes</h5>
                                            <div class="form-group row ">
                                                <input class="form-control col-md-2" name="pr_a_key[]" id="validationCustom0" placeholder="key" type="text" required="">
                                                <input class="form-control col-md-10" name="pr_a_value[]" id="validationCustom0" placeholder="value" type="text" required=""> 
                                            </div> 
                                            <div class="form-group row ">
                                                <input class="form-control col-md-2" name="pr_a_key[]" id="validationCustom0" placeholder="key" type="text" >
                                                <input class="form-control col-md-10" name="pr_a_value[]" id="validationCustom0" placeholder="value" type="text"> 
                                            </div> 
                                            <div class="form-group row ">
                                                <input class="form-control col-md-2" name="pr_a_key[]" id="validationCustom0" placeholder="key" type="text">
                                                <input class="form-control col-md-10"  name="pr_a_value[]" id="validationCustom0" placeholder="value" type="text"> 
                                            </div> 
                                            <div class="form-group row ">
                                                <input class="form-control col-md-2" name="pr_a_key[]" id="validationCustom0" placeholder="key" type="text">
                                                <input class="form-control col-md-10" name="pr_a_value[]" id="validationCustom0" placeholder="value" type="text"> 
                                            </div> 
                                            <div class="form-group row ">
                                                <input class="form-control col-md-2" name="pr_a_key[]" id="validationCustom0" placeholder="key" type="text">
                                                <input class="form-control col-md-10" name="pr_a_value[]" id="validationCustom0" placeholder="value" type="text"> 
                                            </div>       
                                        </div>
                                        <div class="tab-pane fade" id="top-xyz" role="tabpanel" aria-labelledby="xyz-top-tab">
                                            <h5 class="f-w-600">Specification</h5>
                                            <div class="form-group row ">
                                                <input class="form-control col-md-2" name="pr_s_key[]" id="validationCustom0" placeholder="key" type="text" required="">
                                                <input class="form-control col-md-10" name="pr_s_value[]" id="validationCustom0" placeholder="value" type="text" required="">
                                            </div>
                                            <div class="form-group row ">
                                                <input class="form-control col-md-2" name="pr_s_key[]" id="validationCustom0" placeholder="key" type="text">
                                                <input class="form-control col-md-10" name="pr_s_value[]" id="validationCustom0" placeholder="value" type="text">
                                            </div>
                                            <div class="form-group row ">
                                                <input class="form-control col-md-2" name="pr_s_key[]" id="validationCustom0" placeholder="key" type="text">
                                                <input class="form-control col-md-10" name="pr_s_value[]" id="validationCustom0" placeholder="value" type="text">
                                            </div>
                                            <div class="form-group row ">
                                                <input class="form-control col-md-2" name="pr_s_key[]" id="validationCustom0" placeholder="key" type="text">
                                                <input class="form-control col-md-10" name="pr_s_value[]" id="validationCustom0" placeholder="value" type="text">
                                            </div>
                                            <div class="form-group row ">
                                                <input class="form-control col-md-2" name="pr_s_key[]" id="validationCustom0" placeholder="key" type="text">
                                                <input class="form-control col-md-10" name="pr_s_value[]" id="validationCustom0" placeholder="value" type="text">
                                            </div>
                                            <div class="pull-right">
                                                <button type="submit" name="add_product" id="add_product" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
      url:"<?php echo base_url("Vendor/category_view");?>",
      dataType:'json',
      success:function(data){
        $.each(data,function(index,data){
             $('#parent_id').append('<option value="'+data['c_id']+'">'+data['c_name']+'</option>');
          });   
        }
    });

        });
</script>

<script type="text/javascript">
    function sub_category(is_parent)
    {
        $("#is_parent").empty();
        $.ajax({
      url:"<?php echo base_url("Vendor/sub_category");?>?is_parent="+is_parent,
      dataType:'json',
      success:function(data){
        $.each(data,function(index,data){
             $('#is_parent').append('<option value="'+data['c_id']+'">'+data['c_name']+'</option>');

          });   
        }
    });
    }
</script>