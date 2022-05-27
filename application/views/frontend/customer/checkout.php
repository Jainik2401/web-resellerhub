<?php
include_once('header.php');
?>
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>Checkout</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>customer/index">Home</a></li>
                        <li class="breadcrumb-item active">Checkout</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<?php
$count=0;
foreach($data as $key)
{

    if($key->status=='1')
    {
         $count=1;    
    }
}

if($count>=1)
{

?> 
    <section class="section-b-space">
        <div class="container">
            <div class="checkout-page">
                <div class="checkout-form">
                    <form name="checkoutform"  method="POST" action="<?php echo base_url().'customer/place_order/'.$this->session->userdata('c_id');?>" enctype="multipart/form-data" novalidate="novalidate">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 col-xs-12">
                                <div class="checkout-title">
                                    <h3>Billing Details</h3>
                                </div>
                                <div class="row check-out">
                                
                                    <?php
                                        foreach ($data1 as $key)
                                         {
                                    ?>
                                            <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                                <div class="field-label">Name</div>
                                                <input type="text" name="or_c_name" id="or_c_name" value="<?php echo $key->c_name;?>" placeholder="">
                                            </div>
                                            
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <div class="field-label">Phone</div>
                                                <input type="text" name="or_c_contact_no" id="or_c_contact_no" value="<?php echo $key->c_contact_no;?>" placeholder="">
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <div class="field-label">Email Address</div>
                                                <input type="text" name="or_email" id="or_email" value="<?php echo $key->c_email;?>" placeholder="">
                                            </div>
                                    <?php
                                        }
                                    ?>
                                    
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Address</div>
                                        <input type="text" name="or_address" id="or_address" value="address" placeholder="Street address" >
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Town/City</div>
                                        <input type="text" name="or_city" id="or_city" value="city" placeholder="">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                        <div class="field-label">State / County</div>
                                        <input type="text" name="or_state" id="or_state" value="india" placeholder="">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                        <div class="field-label">Postal Code</div>
                                        <input type="text" name="or_pincode" id="or_pincode" value="395007" placeholder="">
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-xs-12">
                                <div class="checkout-details">
                                    <div class="order-box">
                                        <div class="title-box">
                                            <div>Product <span>Total</span></div>
                                        </div>
                                            <?php   $total =0;  
                                                foreach ($data as $key) 
                                                {
                                                    $total=$total+$key->pr_mrp;
                                            ?>
                                                <ul class="qty">
                                                    <li>
                                                        <img src="<?php echo $key->pr_image;?>" width="70" height="60">
                                                        <?php echo $key->pr_name;?>
                                                        <span>₹ <?php echo $key->pr_mrp;?></span>
                                                    </li>
                                                    
                                                    
                                                </ul>
                                            <?php
                                                }
                                            ?>
                                            
                                                <ul class="sub-total">
                                                    <li>Subtotal <span class="count">₹ <?php echo $total; ?></span></li>
                                                    <li>Shipping charge<span class="count">₹ 60</span></li>
                                                </ul>
                                                 <ul class="total">
                                                        <li>Total <span class="count">₹ <?php echo $total+60; ?></span></li>
                                                    </ul>
                                            
                                    </div>
                                    <div class="payment-box">
                                        <div class="upper-box">
                                            <div class="payment-options">
                                                <ul>
                                                    
                                                    <li>
                                                        <div class="radio-option">
                                                            <input type="radio" name="or_pay_method" id="or_pay_method" value="Cash on delivery(COD)" checked>
                                                            <label for="or_pay_method">Cash On Delivery</label>
                                                           
                                                        </div>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="text-right"><input type="submit" class="btn-solid btn" value="Place Order"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> 
    
<?php
}
else
{
?>
<section class="section-b-space light-layout">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="success-text"><i class="fa fa-check-circle" aria-hidden="true"></i>
                        <h2>No Product Added to Cart!</h2>
                        <a href="<?php echo base_url();?>customer/index"> Continue Shopping</a>
                
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php    
}


include_once('footer.php');
?>
