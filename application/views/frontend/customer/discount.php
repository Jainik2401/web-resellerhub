<?php
include_once('header.php');
?>
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>Discount</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>customer/discount">Home</a></li>
                        <li class="breadcrumb-item active">Discount</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<section class="section-space blog-page ratio2_3">
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
                                <ul class="popular-blog">
                                    <li>
                                        <div class="media">
                                            <div class="blog-date"><center><?php echo $key->d_percentage;?></center></div>
                                            <div class="media-body align-self-center">
                                                <h6>Code :<?php echo $key->d_code;?></h6>
                                                <p><b>Description :</b><?php echo $key->d_desc;?></p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
            <?php   
                }
            ?>
           
            <!--Blog sidebar start-->
        </div>
        </div>  
    </div>
</section>
<?php
include_once('footer.php');
?>