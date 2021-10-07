            <div class="row">
			                <?php
					$qs2=mysqli_query($cn,"select * from demo");
					while($urow=mysqli_fetch_array($qs2)){
				?>
              <div class="col-md-6">
				<div class="container1">
				<a href="<?php echo $urow['imagepath']?>">
					  <img src="<?php echo $urow['imagepath']?>" alt="Image placeholder" class="image1" >
					  <div class="middle1">
						<div class="text1">click to see full img</div>
					  </div>
					</div>
				</a>
				<div class="overlay" id="<?php echo $urow['roll']?>" onclick="off()">
				<div id="text2">Overlay Text</div>
					</div>
				<a class="blog-entry element-animate" data-animate-effect="fadeIn">
                  <div class="blog-content-body">
                    <div class="post-meta">
                      <span class="category"><?php echo $urow['publisher']?></span><br>
                      <span class="mr-2">
						  <?php echo $urow['month']?> 
						  <?php echo $urow['d']?>, 
						  <?php echo $urow['year']?> 
					  </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span></span>
                    </div>
                    <h2><?php echo $urow['head']?></h2>
					<button onclick="on()" id="<?php echo $urow['roll']?>" class="btn btn-primary">READ MORE</button>
                  </div>
                </a>
   			</div>
							<?php
					}
				?>
   </div>