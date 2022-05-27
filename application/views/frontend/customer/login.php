<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?php echo base_url();?>assets/images/dashboard/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/dashboard/favicon.png" type="image/x-icon">
    <title>RESELLER-HUB</title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/themify.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jsgrid.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/admin.css">
</head>
<body style="background-image: url(https://images.unsplash.com/photo-1432847712612-926caafaa802?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80);" >
    <div class="page-wrapper">
        <div class="authentication-box">
            <div class="container">
                <div class="d-flex justify-content-center">
                    <div class="col-md-7">
                        <div class="card tab2-card">
                            <div style="display: none;" id="vmsg" class="alert alert-danger alert-dismissible">
                            
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="top-login-tab" data-toggle="tab" href="#top-login" role="tab" aria-controls="top-login" aria-selected="true"><span class="icon-user mr-2"></span>Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="register-top-tab" data-toggle="tab" href="#top-register" role="tab" aria-controls="top-register" aria-selected="false"><span class="icon-unlock mr-2"></span>Register</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="top-tabContent">
                                    <div class="tab-pane fade show active" id="top-login" role="tabpanel" aria-labelledby="top-login-tab">
                                        <form class="form-horizontal auth-form" id="login" name="login" method="post">
                                            <div class="form-group">
                                                <input required="required" name="c_email" type="email" class="form-control" placeholder="Email" id="c_email">
                                            </div>
                                            <div class="form-group">
                                                <input required="required" name="c_password" type="password" class="form-control" placeholder="Password" id="c_password">
                                            </div>
                                            <div class="form-terms">
                                                <div class="custom-control custom-checkbox mr-sm-2">
                                                    
                                                   
                                                    <a href="#" class="btn btn-default forgot-pass">Forgot password?</a>
                                                </div>
                                            </div>
                                            <div class="form-button">
                                                <button class="btn btn-primary" type="submit" name="loginbutton" id="loginbutton">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade " id="top-register" role="tabpanel" aria-labelledby="top-register-tab">
                                        <form class="form-horizontal auth-form" method="post" id="insertform" name="insertform">
                                            <div class="form-group">
                                                <input required="required" name="c_name" type="text" class="form-control" placeholder="Name" id="c_namec">
                                            </div>
                                            <div class="form-group">
                                                <input required="required" name="c_contact_no" type="tel" class="form-control" placeholder="Contact Number" id="c_contact_no">
                                            </div>
                                            <div class="form-group">
                                                <input required="required" name="c_email" type="email" class="form-control" placeholder="Email" id="c_emailc">
                                            </div>
                                            <div class="form-group">
                                                <input required="required" name="c_password" type="password" class="form-control" placeholder="Password" id="c_passwordc">
                                            </div>
                                            <div class="form-button">
                                                <button class="btn btn-primary" type="submit" id="save" name="save">Register</button>
                                            </div>
                                        </form>
                                    </div>
                                   

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/icons/feather-icon/feather-icon.js"></script>
    <script src="<?php echo base_url();?>assets/js/jsgrid/jsgrid.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jsgrid/griddata-invoice.js"></script>
    <script src="<?php echo base_url();?>assets/js/jsgrid/jsgrid-invoice.js"></script>
    <script src="<?php echo base_url();?>assets/js/lazysizes.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/admin-script.js"></script>

    <script>

        $("form#login").submit(function(e){
            e.preventDefault();
           //alert('1');

            var formData = new FormData( $( 'form#login' )[ 0 ] );
            $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url(); ?>Customer/customerlogin',
                    data: formData,
                    dataType: "json",
                    contentType: false, 
                    processData: false,
                    beforeSend: function () 
                    {
                         $('#loginbutton').attr('disabled', true);
                    },
                           
                    
                      success:function(data)
                      {
                        console.log(data);

                            if(data.status=='1')
                            {   
                              
                              window.location="<?php echo base_url(); ?>Customer/index";
                            }
                            else
                            {  
                                  $('#loginbutton').removeAttr('disabled');
                                  var msg = '<div class="alert alert-danger alert-dismissab">'+data.msg+'</div>';
                                  $('#vmsg').html(msg);
                                  $("#vmsg").show().delay(2000).fadeOut();
                            }
                      }
                });
        });
        
    </script>
    
    
    
    <script>
       $(document).ready(function(){


        $('form#insertform').submit(function(e) {
          e.preventDefault();
          var formData = new FormData( $( 'form#insertform' )[ 0 ] );
            $.ajax({
           type: "POST",
             url: "<?php echo base_url(); ?>Customer/insert_register",
             data: formData,
            dataType: "json",
            contentType: false, 
            processData: false,
            beforeSend: function () {
             $('#save').attr('disabled', true);
             },
            success:function(data)
            {
             if(data.status!='')
             {  
              $("form#insertform")[0].reset();
              $('#save').removeAttr('disabled');
              var msg = data.msg;
              $('#formvmsg').html(msg);
               window.location='<?php echo base_url();?>Customer/login'
              }
            }
    });
          });

            });
    </script>

</body>
</html>
