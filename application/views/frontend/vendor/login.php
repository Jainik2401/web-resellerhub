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
                                        <form class="form-horizontal auth-form" id="login">
                                            <div class="form-group">
                                                <input required="required" name="r_email" type="email" class="form-control" placeholder="Email" id="r_email">
                                            </div>
                                            <div class="form-group">
                                                <input required="required" name="r_password" type="password" class="form-control" placeholder="Password" id="r_password">
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
                                        <form class="form-horizontal auth-form" id="insertform" name="insertform">
                                            <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link" id="top-detail-tab" data-toggle="tab" href="#top-detail" role="tab" aria-controls="top-detail" aria-selected="true"><span class="icon-user mr-2"></span>Detail</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="proof-top-tab" data-toggle="tab" href="#top-proof" role="tab" aria-controls="top-proof" aria-selected="false"><span class="icon-id-badge mr-2"></span>Proof</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " id="security-top-tab" data-toggle="tab" href="#top-security" role="tab" aria-controls="top-security" aria-selected="false"><span class="icon-shield mr-2"></span>Security</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="top-tabContent">
                                                <div class="tab-pane fade " id="top-detail" role="tabpanel" aria-labelledby="top-detail-tab">
                                                        <div class="form-group">
                                                            <input required="required" name="r_name" type="text" class="form-control" placeholder="Name" id="r_name">
                                                        </div>
                                                        <div class="form-group">
                                                            <input required="required" name="r_contact_no" type="tel" class="form-control" placeholder="Contact Number" id="r_contact_no">
                                                        </div>
                                                        <div class="form-group">
                                                            <input required="required" name="r_email" type="email" class="form-control" placeholder="Email" id="r_email">
                                                        </div>
                                                        <div class="form-group">
                                                            <input required="required" name="r_password" type="password" class="form-control" placeholder="Password" id="r_password">
                                                        </div>
                                                        
                                                </div>
                                                <div class="tab-pane fade " id="top-proof" role="tabpanel" aria-labelledby="top-proof-tab">
                                                        <div class="form-group">
                                                            <input required="required" name="r_gst_no" type="tel" class="form-control" placeholder="GST Number" id="r_gst_no">
                                                        </div>
                                                         <div class="form-group ">
                                                            <select class="form-control" id="selectBox" onchange="changeFunc();" name="r_id_no" required>
                                                                <option disabled="" selected="">ID Proof</option>
                                                                <option value="1">Adhar Card</option>
                                                                <option value="2">Pan Card</option>
                                                                <option value="3">Passport</option>
                                                                <option value="4">Diving License</option>
                                                            </select> 
                                                        </div>
                                                        <div class="form-group ">
                                                            <input id="textboxes" name="r_id_no" placeholder="ID Number" class="form-control" style="display: none" type="text" required>
                                                        </div>
                                                        
                                                </div>
                                                <div class="tab-pane fade " id="top-security" role="tabpanel" aria-labelledby="top-security-tab">
                                                        <div class="form-group">
                                                            <select class="form-control" id="selectBox1" onchange="changeFunc1();" name="r_sql_1" required>
                                                                <option disabled="" selected="">Security Question</option>
                                                                <option value="q1">What's your childhood nickname?</option>
                                                                <option value="q2">What's your first school name?</option>
                                                                <option value="q3">What's your favorite food?</option>
                                                                <option value="q4">What's your bestfriend name?</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group ">
                                                            <input id="textboxes1" name="r_ans_1" placeholder="Answer" class="form-control" style="display: none" type="text" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="form-control" id="selectBox2" onchange="changeFunc2();" name="r_sql_2" required>
                                                                <option disabled="" selected="">Security Question</option>
                                                                <option value="q21">What primary school did you attend?</option>
                                                                <option value="q22">In what town or city was your first full time job?</option>
                                                                <option value="q23">What was your dream job as a child?</option>
                                                                <option value="q24">Who was your childhood hero?</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group ">
                                                            <input id="textboxes2" name="r_ans_2" placeholder="Answer" class="form-control" style="display: none" type="text" required>
                                                        </div>
                                                         <div class="form-button">
                                                            
                                                            <input type="submit" id="save" name="save" class="btn btn-primary pull-right" value="Submit" /> 
                                                        </div>
                                                </div>
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
           
            var formData = new FormData( $( 'form#login' )[ 0 ] );
            $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url(); ?>Vendor/vendorlogin',
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
                        
                            if(data.status=='1')
                            {   
                              
                              window.location="<?php echo base_url(); ?>Vendor/index";
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
    <script type="text/javascript">
        function changeFunc() 
        {
           
            var selectBox = document.getElementById("selectBox");
            var selectedValue = selectBox.options[selectBox.selectedIndex].value;
                if (selectedValue=="1")
                {
                    $('#textboxes').show();
                }
                else if(selectedValue=="2")
                {
                    $('#textboxes').show();
                }
                else if(selectedValue=="3")
                {
                    $('#textboxes').show();
                }
                else if(selectedValue=="4")
                {
                    $('#textboxes').show();
                }
                else
                {
                    $('#textboxes').hide();
                }
        }

    </script> 
    <script type="text/javascript">
        function changeFunc1() 
        {
           
            var selectBox = document.getElementById("selectBox1");
            var selectedValue = selectBox.options[selectBox.selectedIndex].value;
                if(selectedValue=="q1")
                {
                    $('#textboxes1').show();
                }
                else if(selectedValue=="q2")
                {
                    $('#textboxes1').show();
                }
                else if(selectedValue=="q3")
                {
                    $('#textboxes1').show();
                }
                else if(selectedValue=="q4")
                {
                    $('#textboxes1').show();
                }
                else
                {
                    $('#textboxes1').hide();
                }
        }

    </script> 
     </script> 
    <script type="text/javascript">
        function changeFunc2() 
        {
           
            var selectBox = document.getElementById("selectBox2");
            var selectedValue = selectBox.options[selectBox.selectedIndex].value;
                if(selectedValue=="q21")
                {
                    $('#textboxes2').show();
                }
                else if(selectedValue=="q22")
                {
                    $('#textboxes2').show();
                }
                else if(selectedValue=="q23")
                {
                    $('#textboxes2').show();
                }else if(selectedValue=="q24")
                {
                    $('#textboxes2').show();
                }
                else
                {
                    $('#textboxes2').hide();
                }
        }

    </script>   
    <script>
       $(document).ready(function(){


        $('form#insertform').submit(function(e) {
          e.preventDefault();
          var formData = new FormData( $( 'form#insertform' )[ 0 ] );
            $.ajax({
           type: "POST",
             url: "<?php echo base_url(); ?>Vendor/insert_register",
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
               window.location='<?php echo base_url();?>vendor/login'
              }
            }
    });
          });

            });
    </script>

</body>
</html>
