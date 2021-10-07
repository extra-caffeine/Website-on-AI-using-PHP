<?php include('dbconfig.php');?>
<!doctype html>
<html lang="en">
  <head>
		<?php include_once('head.php');?>
  </head>
  <body id="topa">
	<?php include_once('nav-main1.php');?>
    <?php include_once('nav-main.php');?>
	
	<?php include_once('slider.php');?>

    <section class="site-section py-sm">
		<div class="container">
		<hr>
			<div class="row">
				<div class="col-md-6">
				<h1>Blog</h1>
				</div>
			</div>
        <div class="row blog-entries">
			<div class="col-md-12 col-lg-8 main-content">
				<?php include_once('card-main.php');?>
				<?php include_once('pagination.php');?>
			</div>
		<div class="col-md-12 col-lg-4 sidebar">
		<?php include_once('sid-ser.php');?>
		<?php include_once('bio.php');?>
        </div>
		</div>
      </div>
    </section>
  
	<?php include_once('footer.php');?>
    <?php include_once('script.php');?>
  </body>
</html>