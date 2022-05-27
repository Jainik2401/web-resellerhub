<?php
include_once('header.php');
$category = $this->uri->segment(2);
?>
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>Product</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Product</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<section class="section-b-space ratio_asos">
    <div class="collection-wrapper">
        <div class="container">
            <div class="row">
                <div class="collection-content col">
                    <div class="page-main-content">
                        <div class="row">
                            <div class="col-sm-12">
								<div class="collection-product-wrapper">
                                    <div class="product-wrapper-grid">
                                        <div class="row margin-res">
                                            <?php
                                                foreach ($data as $key) 
                                                {
                                                    
                                            ?>
                                                   <div class="col-lg-2 col-6 col-grid-box">
                                                        <div class="product-box">
                                                            <div class="img-wrapper">
                                                                <div class="front">
                                                                    <a href="<?php echo base_url().'customer/product_view/'.$key->pr_id;?>"><img src="<?php echo $key->pr_image;?>" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                                </div>
                                                                <div class="back">
                                                                    <a href="<?php echo base_url().'customer/product_view/'.$key->pr_id;?>"><img src="<?php echo $key->pr_image;?>" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-detail">
                                                                <div>
                                                                    <a href="<?php echo base_url().'customer/product_view/'.$key->pr_id;?>">
                                                                        <h4><?php echo $key->pr_name;?></h4>
                                                                    </a>
                                                                    <a href="<?php echo base_url().'customer/product_view/'.$key->pr_id;?>">
                                                                        <h5>₹ <?php echo $key->pr_mrp;?></h5>
                                                                    </a>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            <?php
                                                }
                                            ?>

                                        </div>
                                    </div>
                        		</div>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include_once('footer.php');
?>