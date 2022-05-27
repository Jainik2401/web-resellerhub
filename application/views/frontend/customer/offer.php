<?php
include_once('header.php');
?>
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>Offer</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>customer/offer">Home</a></li>
                        <li class="breadcrumb-item active">Offer</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<section class="section-b-space blog-page ratio2_3">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <?php
                
                foreach ($data as $key) 
                {

            ?>
            <div class="col-4" style="float:left;">
                 <div class="blog-sidebar">
                    <div class="theme-card">
                        <h4>Popular Blog</h4>
                        <ul class="popular-blog">
                            <li>
                                <div class="media">
                                    <div class="blog-date"><span><?php echo $key->offer_percentage;?>%</span></div>
                                    <div class="media-body align-self-center">
                                        <h6>Code :<?php echo $key->offer_code;?></h6>
                                        <p><b>Title :</b><?php echo $key->offer_title;?></p>
                                    </div>
                                </div>
                                <p><b>Description :</b><?php echo $key->offer_desc;?></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
               
            <?php
                }
            ?>
            </div>
        </div>
    </div>
</section>
<?php
include_once('footer.php');
?>