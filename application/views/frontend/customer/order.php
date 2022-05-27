<?php
include_once('header.php');
?>
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>Order</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>customer/index">Home</a></li>
                        <li class="breadcrumb-item active">Order</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div><hr>
<section class="section-b-space light-layout">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="success-text"><i class="fa fa-check-circle" aria-hidden="true"></i>
                    <h2>Thank you</h2>
                    <p>Payment is successfully processsed and your order is on the way</p>
                    <p>

<?php
                         $transaction_id='';
                       $items = array();

                            
                        

                        foreach($data1 as $key1)
                            {
                                $transaction_id=$key1->transaction_id;
                                $price=$key1->or_total_price;
                                $address=$key1->or_address;
                                $city=$key1->or_city;
                                $state=$key1->or_state;
                                $pincode=$key1->or_pincode;
                                $method=$key1->or_pay_method;
                }
                
                    ?>
                        Transaction ID: <?php  echo $transaction_id; ?></p>
                
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product-order">
                    <h3>your order details</h3>
                    <?php foreach ($data as $key)
                         {

                        ?>
                            <div class="row product-order-detail">
                                <div class="col-3">
                                    <img src="<?php echo $key->pr_image; ?>" alt="" class="img-fluid blur-up lazyload">
                                </div>
                                <div class="col-3 order_detail">
                                    <div>
                                        <h4>product name</h4>
                                        <h5><?php echo $key->pr_name;?></h5>
                                    </div>
                                </div>
                                <div class="col-3 order_detail">
                                    <div>
                                        <h4>quantity</h4>
                                        <h5>1</h5>
                                    </div>
                                </div>
                                <div class="col-3 order_detail">
                                    <div>
                                        <h4>price</h4>
                                        <h5>₹ <?php echo $key->pr_mrp;?></h5>
                                    </div>
                                </div>
                            </div>
              <?php } ?>
                            <div class="total-sec">
                                <ul>
                                    <li>subtotal <span>₹ <?php echo $price; ?></span></li>
                                    <li>shipping <span>₹ 60</span></li>
                                    
                                </ul>
                                
                            </div>
                             <div class="total">
                                <h3>total <span class="pull-right">₹ <?php echo ($price+60); ?></span></h3>
                            </div>
                            
                    
                </div>
            </div>
                <?php
                
                ?>

                    <div class="col-lg-6">
                        <div class="row order-success-sec">
                            <div class="col-sm-6">
                                <h4>summary</h4>
                                <ul class="order-detail">
                                    <li>order ID: 5563853658932</li>
                                    <li>Order Date: June 7, 2021</li>
                                    <li>Order Total: ₹ <?php echo ($price+60); ?></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <h4>shipping address</h4>
                                <ul class="order-detail">
                                    <li><?php echo $address; ?></li>
                                    <li><?php echo $city;?></li>
                                    <li><?php echo $state; ?></li>
                                    <li><?php echo  $pincode; ?></li>
                                </ul>
                            </div>
                            <div class="col-sm-12 payment-mode">
                                <h4>payment method</h4>
                                <p><?php echo $method; ?></p>
                            </div>
                            <div class="col-md-12">
                                <div class="delivery-sec">
                                    <h3>expected date of delivery</h3>
                                    <h2>June 10, 2021</h2>
                                </div>
                            </div>
                        </div>
                    </div>
            
        </div>
    </div>
</section>
<?php
//$this->session->unset_userdata('nation');
include_once('footer.php');
?>