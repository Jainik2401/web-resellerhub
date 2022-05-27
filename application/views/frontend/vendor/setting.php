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
                                <h3>Setting
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="<?php echo base_url();?>vendor/index"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Setting </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        	<div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-details text-center">
                                    <img src="<?php echo base_url();?>assets/images/dashboard/hv.png" alt="" class="img-fluid img-90 rounded-circle blur-up lazyloaded">
                                    <h5 class="f-w-600 mb-0">Vendor</h5>
                                    <span><?php echo $this->session->userdata('r_email') ?></span><br>
                                    <div><i class="fa fa-check-circle-o "></i>Verified</div>
                                    <div class="social">
                                        <div class="form-group btn-showcase">
                                            <button class="btn social-btn btn-fb d-inline-block"> <i class="fa fa-facebook"></i></button>
                                            <button class="btn social-btn btn-twitter d-inline-block"><i class="fa fa-google"></i></button>
                                            <button class="btn social-btn btn-google d-inline-block mr-0"><i class="fa fa-twitter"></i></button>
                                            <button class="btn social-btn btn-google d-inline-block mr-0"><i class="fa fa-instagram"></i></button>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="card tab2-card">
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" id="top-profile-tab" data-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="true"><i data-feather="user" class="mr-2"></i>Profile</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="top-tabContent">
                                    <div class="tab-pane fade show active" id="top-profile" role="tabpanel" aria-labelledby="top-profile-tab">
                                        <h5 class="f-w-600">Profile</h5>
                                        <div class="table-responsive profile-table">
                                            <table class="table table-responsive">
                                                <tbody>
                                                 <?php
                
                                                    foreach ($data as $key) 
                                                    {

                                                ?>
                                                <tr>
                                                    <td>Name:</td>
                                                    <td><?php echo $key->r_name;?></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>Email:</td>
                                                    <td><?php echo $key->r_email;?></td>
                                                </tr>
                                                <tr>
                                                    <td>Password:</td>
                                                    <td><?php echo $key->r_password;?></td>
                                                </tr>
                                                <tr>
                                                    <td>Mobile Number:</td>
                                                    <td><?php echo $key->r_contact_no;?></td>
                                                </tr>
                                                <tr>
                                                    <td>GST No.:</td>
                                                    <td><?php echo $key->r_gst_no;?></td>
                                                </tr>
                                                <?php
                                                }
                                                ?>
                                                </tbody>
                                            </table>
                                            <button type="submit"  class="btn btn-primary" data-toggle="modal" data-target="#edit_pr">Edit</button>
                                            <div class="modal fade" id="edit_pr" tabindex="-1" role="dialog"  aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" >Change Profile Detail</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="needs-validation user-add" method="post" id="insertform" name="insertform" autocomplete="off">
                                                                <div class="form-group row">
                                                                    <label for="validationCustom0" class="col-xl-3 col-md-4">Name:</label>
                                                                    <input class="form-control col-xl-8 col-md-7" id="cr_name"  name="cr_name" placeholder="Name" type="text" required>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="validationCustom0" class="col-xl-3 col-md-4">Email:</label>
                                                                    <input class="form-control col-xl-8 col-md-7" id="cr_email"  name="cr_email" placeholder="Email" type="email" required>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="validationCustom0" class="col-xl-3 col-md-4">Password:</label>
                                                                    <input class="form-control col-xl-8 col-md-7" id="cr_password"  name="cr_password" placeholder="Password" type="password" required>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="validationCustom0" class="col-xl-3 col-md-4">Mobile Number:</label>
                                                                    <input class="form-control col-xl-8 col-md-7" id="cr_contact_no"  name="cr_contact_no" placeholder="Mobile Number" type="tel" required>
                                                                </div>
                                                                
                                                            </form>                                                      
                                                        </div>
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
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
                </div>
            </div>
        </div>
        <?php
        include_once('footer.php');
        ?>

    </div>             
</div>