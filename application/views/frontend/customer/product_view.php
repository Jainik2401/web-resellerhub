<?php
include_once('header.php');
$category = $this->uri->segment(2);
?>
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>Product view</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>customer/index">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Product View</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
 <?php
    foreach ($data as $key) 
    {
        
?>
    <section>
    <div class="collection-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="product-slick">
                        <div>
                            <img src="<?php echo $key->pr_image;?>" alt="" class="img-fluid blur-up lazyload image_zoom_cls-0">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 rtl-text">
                    <div class="product-right">
                        <h2><?php echo $key->pr_name;?></h2>
                        <h3>₹ <?php echo $key->pr_mrp;?></h3>
                        <div class="product-description border-product">
                            <a href="<?php echo base_url();?>customer/discount"><h4>Discount</h4></a>
                            <a href="<?php echo base_url();?>customer/offer"><h4>Offer</h4></a>
                        </div>
                        <div class="product-description border-product">
                            <h6 class="product-title">quantity</h6>
                            <div class="qty-box">
                                <div class="input-group"><span class="input-group-prepend"><button type="button"
                                            class="btn quantity-left-minus" data-type="minus" data-field=""><i
                                                class="ti-angle-left"></i></button> </span>
                                    <input type="text" name="quantity" class="form-control input-number" value="1">
                                    <span class="input-group-prepend"><button type="button"
                                            class="btn quantity-right-plus" data-type="plus" data-field=""><i
                                                class="ti-angle-right"></i></button></span></div>
                            </div>
                        </div>
                        <div class="product-buttons">
                            <a href="<?php echo base_url().'customer/insert_cart/'.$key->pr_id;?>" class="btn btn-solid">Buy for me</a>
                             <a href="<?php echo base_url().'customer/insert_cart_other/'.$key->pr_id;?>" class="btn btn-solid">Buy for other</a>
                        </div>
                        <div class="border-product">
                            <h6 class="product-title">product details</h6>
                            <p><?php echo $key->pr_desc;?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <section class="tab-product m-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-toggle="tab"
                                href="#top-home" role="tab" aria-selected="true">Description</a>
                            <div class="material-border"></div>
                        </li>
                        <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-toggle="tab"
                                href="#top-profile" role="tab" aria-selected="false">Attribute</a>
                            <div class="material-border"></div>
                        </li>
                        <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-toggle="tab"
                                href="#top-contact" role="tab" aria-selected="false">Specification</a>
                            <div class="material-border"></div>
                        </li>
                    </ul>
                    <div class="tab-content nav-material" id="top-tabContent">
                        <div class="tab-pane fade show active" id="top-home" role="tabpanel"
                            aria-labelledby="top-home-tab">
                            <p><?php echo $key->pr_desc;?></p>
                        </div>
                        <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">

                                    <div class="single-product-tables">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <?php
                                                    $pro_id=$this->uri->segment(3);
                                                    $this->db->select('*');
                                                    $this->db->from('attibutes');
                                                    $this->db->where('attibutes.product_id',$pro_id);
                                                    $query=$this->db->get();
                               
                                                    $data=$query->result_array();
                                                    $final['data'] = $data;
                                                    foreach($data as $key)
                                                             {
                                                                echo '<th>'.$key['pr_a_key'].'</th>'; 
                                                                echo '<td>'.$key['pr_a_value'].'</td>';
                                                            } ?>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                        </div>
                        <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                            <div class="single-product-tables">
                                <table>
                                    <tbody>
                                        <?php
                                        $pro_id=$this->uri->segment(3);
                                        $this->db->select('*');
                                        $this->db->from('specification');
                                        $this->db->where('specification.product_id',$pro_id);
                                        $query=$this->db->get();
                                        $data=$query->result_array();
                                        $final['data'] = $data;
                                        foreach($data as $key)
                                                 {
                                                    echo '<th>'.$key['pr_s_key'].'</th>'; 
                                                    echo '<td>'.$key['pr_s_value'].'</td>';
                                                } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    }
?>
<?php
include_once('footer.php');
?>