<?php
include_once('header.php');
?>
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>Feedback</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Feedback</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<section class="section-space blog-page ratio2_3">
    <div class="container">
        <div class="row">
            <h4>Recent Feedback</h4>
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
                                            <div class="blog-date"><center><i class="fa fa-envelope-o fa-2x" ></i></center></div>
                                            <div class="media-body align-self-center">
                                                <h6><?php echo $key->fb_email;?></h6>
                                                <p><?php echo $key->fb_msg;?></p>
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
<section class="blog-detail-page section-b-space ratio2_3">
    <div class="container">
        <div class="row blog-contact">
            <div class="col-sm-12">
                <h2>Leave Your Feedback</h2>
                <form class="theme-form" method="post" id="insertform" name="insertform">
                    <div class="form-row">
                        <div class="col-md-12">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="fb_u_nm" id="fb_u_nm" placeholder="Enter Your Name"
                                required="">
                        </div>
                        <div class="col-md-12">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="fb_email" id="fb_email" placeholder="Enter Your Email" required="">
                        </div> 
                        <div class="col-md-12">
                            <label for="number">Phone Number</label>
                            <input type="tel" class="form-control" name="fb_phone" id="fb_phone" placeholder="Enter Your Phone Number" required="">
                        </div>
                        <div class="col-md-12">
                            <label for="exampleFormControlTextarea1">Feedback</label>
                            <textarea class="form-control" name="fb_msg" placeholder="Write Your Feedback"
                                id="exampleFormControlTextarea1" rows="6"></textarea>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-solid" type="submit" name="save" id="save">Post Feedback</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php
include_once('footer.php');
?>
<script>
   $(document).ready(function(){


    $('form#insertform').submit(function(e) {
      e.preventDefault();
      var formData = new FormData( $( 'form#insertform' )[ 0 ] );
        $.ajax({
       type: "POST",
         url: "<?php echo base_url(); ?>Customer/insert_feedback",
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
          }
        }
});
      });

        });
</script>