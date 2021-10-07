<!doctype html>
<html lang="en">
  <head>
    <?php include_once('head.php');?>
  </head>
  <body>
    <?php include_once('nav-main1.php');?>
    <?php include_once('nav-main.php');?>

    <section class="site-section">
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-6">
            <h1>Contact</h1>
          </div>
        </div>
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">
            
            <form action="#" method="post">
                  <div class="row">
                    <div class="col-md-4 form-group">
                      <label for="name">Name</label>
                      <input type="text" id="name" class="form-control ">
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="phone">Phone</label>
                      <input type="text" id="phone" class="form-control ">
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="email">Email</label>
                      <input type="email" id="email" class="form-control ">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="message">Write Message</label>
                      <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" id="insert" class="btn btn-primary">
                    </div>
                  </div>
                </form>
            

          </div>

          <!-- END main-content -->

          <div class="col-md-12 col-lg-4 sidebar">
			<?php include_once('sid-ser.php');?>
            <!-- END sidebar-box -->
			<?php include_once('bio.php');?>
			<!-- END sidebar-box -->  
            <!-- END sidebar-box -->
            <!-- END sidebar-box -->
          </div>
          <!-- END sidebar -->

        </div>
      </div>
    </section>
  
	<?php include_once('footer.php');?>
    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
	<script src="js/main.js"></script>
	<script>
				$(document).on('click', '#insert', function(){
			if ($('#name').val()=="" || $('#email').val()==""){
				alert('Please input data first');
			}
			else{
			$name=$('#name').val();
			$email=$('#email').val();	
			$phone=$('#phone').val();
			$mess=$('#message').val();				
				$.ajax({
					type: "POST",
					url: "contact-sql.php",
					data: {
						name: $name,
						email: $email,
						phone: $phone,
						mess: $mess,
						add: 1,
					},
					success: function(){
						alert("Record inserted successfully");
					}
				});
			}
		});
	</script>
  </body>
</html>