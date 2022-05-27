<?php
include_once('header.php');
/*$category = $this->uri->segment(2);*/
?>
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>cart</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>customer/index">Home</a></li>
                        <li class="breadcrumb-item active">cart</li>
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
    $count=1;   
}
if($count>=1)
{
    ?>

<section class="cart-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <table class="table cart-table table-responsive-xs">
                    <thead>
                        <tr class="table-head">
                            <th scope="col">image</th>
                            <th scope="col">product name</th>
                            <th scope="col">price</th>
                            <th scope="col">quantity</th><!-- 
                            <th scope="col">reselling price</th> -->
                            <th scope="col">total</th>
                        </tr>
                    </thead>
                    <?php      $total =0;  
                        foreach ($data as $key) 
                        {
                             $total=$total+$key['pr_mrp'];
                    ?>
                    <tbody>
                        <tr>
                            <td>
                                <a href="#"><img src="<?php echo $key['pr_image'];?>" alt=""></a>
                            </td>
                            <td><a href="#"><?php echo $key['pr_name'];?></a>
                                <div class="mobile-cart-content row">
                                    <div class="col-xs-3">
                                        <div class="qty-box">
                                            <div class="input-group">
                                                <input type="text" name="quantity" class="form-control input-number"
                                                    value="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <h2 class="td-color">₹ <?php echo $key['pr_mrp'];?></h2>
                                    </div>
                                    <div class="col-xs-3">
                                        <h2 class="td-color"><a href="#" class="icon"><i class="ti-close"></i></a>
                                        </h2>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h2>₹ <?php echo $key['pr_mrp'];?></h2>
                            </td>
                            <td>
                                <div class="qty-box">
                                    <div class="input-group">
                                        <input type="number" name="quantity" class="form-control input-number"
                                            value="1">
                                    </div>
                                </div>
                            </td>
                            <!-- <td>
                                
                                <h2>₹ <?php echo ($key['pr_mrp'])*1.2;?></h2>                            
                            </td> -->
                            <td>
                                <h2 class="td-color">₹ <?php echo $key['pr_mrp'];?></h2>
                            </td>
                        </tr>
                    </tbody>
                    <?php
                        }
                    ?>
                </table>
                <table class="table cart-table table-responsive-md">
                    <tfoot>
                        <tr>
                            <td>total price :</td>
                            <td>
                                <h2> ₹ <?php echo $total; ?></h2>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="row cart-buttons">
            <div class="col-6"><a href="<?php echo base_url();?>customer/product" class="btn btn-solid">continue shopping</a></div>
            <div class="col-6"><a href="<?php echo base_url().'customer/checkout/'.$key['ca_cus_id'];?>" class="btn btn-solid">check out</a></div>
        </div>
    </div>
</section>
<?php } 
else
{ ?>
     <section class="section-b-space light-layout">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="success-text"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                        <h2>Your Cart is Empty!</h2>
                        <a href="<?php echo base_url();?>customer/index"> Continue Shopping</a>
                
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php }
include_once('footer.php');
?>
<!-- <script type="text/javascript">
  function conformdelete(val)
  {
    if (confirm("are you sure?")) 
    {
      var url="<?php echo base_url();?>";
      window.location = url+"Customer/delete_cart?ca_id="+val;
    }
    else
    {
      return false;
    }
    
  }

</script> -->