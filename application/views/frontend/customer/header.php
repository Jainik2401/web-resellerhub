<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="<?php echo base_url();?>assets/images/favicon/1.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon/1.png" type="image/x-icon">
    <title>RESELLER-HUB</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/color1.css" media="screen" id="color">
    <!-- <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'> -->
    <!-- <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'> -->
<body>
    <header>
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact">
                            <ul>
                                <li>Welcome to Our RESELLER-HUB</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 text-right">
                        <ul class="header-dropdown">
                            <li><i class="fa fa-user-circle-o"></i><?php echo $this->session->userdata('c_email') ?></li>
                            <li><a href="<?php echo base_url();?>Customer/logout"><i class="fa fa-sign-out"></i></a></li>      
                            <li><a href="<?php echo base_url();?>Customer/cart"><i class="fa fa-shopping-cart"></i></a></li>      
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-menu">
                        <div class="menu-left">
                            <div class="brand-logo">
                                <a href="<?php echo base_url();?>customer/index">
                                    <img src="<?php echo base_url();?>assets/images/icon/logo.png" alt="">
                                </a>
                            </div>          
                        </div>
                        <div class="menu-right pull-right">
                            <div>
                                <nav id="main-nav">
                                    <input id="ColorPicker1" type="hidden" value="#ff4c3b" name="Background">
                                    <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                    <ul id="main-menu" class="sm pixelstrap sm-horizontal">     
                                        <?php 
                                        $select = $this->db->query("select * from category where is_parent='1'"); 
                                        foreach ($select->result() as $row)  
                                        {    
                                        ?>      
                                                <li>
                                                    <a  href="<?php echo base_url()."category/".$row->c_id;?>"><?php echo $row->c_name;?></a>

                                                
                                                   <?php
                                                       $select1 = $this->db->query("select * from category where is_parent='0' and parent_id='".$row->c_id."'");
                                                    ?>
                                                    <ul>
                                                        <?php                                                       
                                                         foreach ($select1->result() as $row1)  
                                                            {
                                                        ?>
                                                   
                                                            <li>
                                                                <a href="<?php echo base_url()."sub_category/".$row1->c_id;?>"><?php echo $row1->c_name;?></a>
                                                            </li>
                                                            <?php  
                                                            }
                                                            ?> 
                                                    </ul> 

                                                </li>
                                                
                                        <?php  
                                        }
                                        ?>  
                                    </ul>

                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


