<?php include 'includes/header.php'; 
      include 'db_conn/db.php';
      include 'function/function.php';


//$featured = $_POST['featured'];

$sql = "SELECT * FROM qry_product";

$result = mysqli_query($con, $sql);


?>

<section class="featured">
	<div id="index">
			<!-- Responsive slider - START -->
    	<div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
			<div class="slides" data-group="slides">
				<ul>
					<li>
						<div class="slide-body" data-group="slide">
							<img src="img/8.jpg" alt="">
							<div class="caption header" data-animate="slideAppearUpToDown" data-delay="500" data-length="300">
								<h2>We are creative design agency</h2>
								<div class="caption-sub" data-animate="slideAppearDownToUp" data-delay="1200" data-length="300"><h4><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></h4></div>
								<div class="caption-sub" data-animate="slideAppearLeftToRight" data-delay="800" data-length="300"><h3>With one to one swipe movement!</h3></div>
							</div>
						</div>
					</li>
					<li>
						<div class="slide-body" data-group="slide">
							<img src="img/2.jpg" alt="">
							<div class="caption header" data-animate="slideAppearDownToUp" data-delay="500" data-length="300">
								<h2>creative design Responsive slider</h2>
								<div class="caption-sub" data-animate="slideAppearUpToDown" data-delay="800" data-length="300"><h4><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span></h4></div>
								<div class="caption-sub" data-animate="slideAppearRightToLeft" data-delay="1200" data-length="300"><h3>Wonderfull Slides!</h3></div>
							</div>
						</div>
					</li>
  	    		<li>
              <div class="slide-body" data-group="slide">
                <img src="img/6.jpg" alt="">
                <div class="caption header" data-animate="slideAppearUpToDown" data-delay="500" data-length="300">
                  <h2>creative design Custom animations</h2>
                  <div class="caption-sub" data-animate="slideAppearLeftToRight" data-delay="800" data-length="300"><h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4></div>
				  <div class="caption-sub" data-animate="slideAppearDownToUp" data-delay="1200" data-length="300"><h3><span>New style Slides!</span></h3></div>
		
				</div>
                </div>
  	    		</li>
			
  	    	</ul>
		</div>
        
        <a class="slider-control left" href="#" data-jump="prev"><i class="fa fa-angle-left fa-2x"></i></a>
        <a class="slider-control right" href="#" data-jump="next"><i class="fa fa-angle-right fa-2x"></i></a>
        
		
    	</div>
      <!-- Responsive slider - END -->
	</div>
		</section>
		
		

<div class="wrapper row2">
  <div class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <ul class="nospace group cta">
      <li class="one_third first">
        <article><strong class="numb">01</strong>
          <h6 class="heading font-x1"><a href="#">Vulputate ullamcorper</a></h6>
          <p>Rutrum elit nec tincidunt sed aenean aliquet mauris accumsan eget dui id&hellip;</p>
        </article>
      </li>
      <li class="one_third">
        <article><strong class="numb">02</strong>
          <h6 class="heading font-x1"><a href="#">Lobortis condimentum</a></h6>
          <p>Dolor eu suscipit facilisis vestibulum vitae semper nisl vivamus a ligula&hellip;</p>
        </article>
      </li>
      <li class="one_third">
        <article><strong class="numb">03</strong>
          <h6 class="heading font-x1"><a href="#">Malesuada hendrerit</a></h6>
          <p>Nulla ut imperdiet metus aliquam iaculis mi in tortor accumsan at lobortis&hellip;</p>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <h2 class="text-center">Future Product</h2>
    

<?php while($row = mysqli_fetch_array($result)):?>

    <div class="col-md-3">
      <h4><?php echo $row['title']; ?></h4>
        <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['brand']; ?>" id="image" />
        <p class="list price text-danger">List Price: <s>$<?php echo $row['listPrice']; ?></s></p>
        <p class="price">Our Price:$<?php echo $row['price']; ?></p>
        <button type="button" class="btn btn-success img-responsive center-block" data-toggle="modal" data-target="#details-1-<?php echo $row['productID']; ?>">Details</button>
    </div>

    <div class="modal fade-details-1" id="details-1-<?php echo $row['productID']; ?>" tableindex="-1" role="dialog" aria-lablledby="details-1" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
    <div class="modal-heder">
    <button class="btn btn-danger close" type="button" data-dismiss="modal" aria-label="Close">
        
        <span aria-hidden="true">&times;</span>
        
        </button>
        <h4 class="modal-title text-center"><?php echo $row['title']; ?></h4>
        
    </div>
    <div class="modal-body">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <div class="center-block">
            <img src="<?php echo $row['image']; ?>" alt="Levis Jeans" class="dtails img-responsive" />
            </div>
            </div>
            <div class="col-sm-6">
            
            <h4>Details</h4>
                <p><php echo $row['discrip']; ?></p>
                <hr/>
                <p>Price:$<?php echo $row['price']; ?></p>
                <p>Brand:<?php echo $row['brand']; ?></p>
                
                <form action="pages/add_cart.php" method="get">
                <div class="form-group">
                    <div class="col-xs-6">
                    <label for="quantity" id="quantity-label">Quantity</label>
                        <input type="text" class="form-control" id="quatity" name="soldQty" />
                    </div><br><br><br>
                    <div class="form-group">
                        <label for="id">Size</label><br>
                        <select name="size">
                            <?php size($con); ?>
                        </select>
                    </div>
                    </div>
            
                </div>
        </div>
        </div>
    
    </div>
    <div class="modal-footer">
    <button class="btn btn-danger" data-dismiss="modal">Close</button>
    <button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span>Add to Cart</button>
    </div>
    </div>
  </form>
</div>
</div>
    <?php endwhile; ?>

    
  </main>
     </div>
          <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/02.png');">
  <article class="hoc container clear center"> 
    <!-- ################################################################################################ -->
    <h2 class="font-x3">Parturient montes</h2>
    <p class="btmspace-50">Ridiculus mus sed pretium erat quis eros imperdiet nec suscipit diam venenatis ut a ipsum pulvinar tincidunt&hellip;</p>
    <p class="nospace"><a class="btn medium" href="#">Read More &raquo;</a></p>
    <!-- ################################################################################################ -->
  </article>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="center btmspace-80">
      <h3 class="font-x3 nospace">In egestas massa</h3>
      <p class="nospace">Maecenas in laoreet ante nulla varius ullamcorper augue ut lacinia turpis mauris commodo in sem <a href="#">quis mollis</a>.</p>
    </div>
    <div class="group">
      <div class="one_third first">
        <h2>Venenatis eget tristique</h2>
        <p>Sodales est ac maximus scelerisque fusce tempus libero tempus congue vulputate enim nunc pretium sem&hellip;</p>
      </div>
      <article class="one_third"><a href="#"><img class="btmspace-30" src="images/demo/320x240.png" alt=""></a>
        <h3 class="heading">John Doe</h3>
        <p>Vel tempus dolor eros in nunc curabitur vel dapibus quam nullam in vestibulum nisi proin nunc quam aliquet ut est&hellip;</p>
        <p class="nospace"><a href="#">Read More &raquo;</a></p>
      </article>
      <article class="one_third"><a href="#"><img class="btmspace-30" src="images/demo/320x240.png" alt=""></a>
        <h3 class="heading">Jane Doe</h3>
        <p>Interdum velit aliquam vel dui sed lorem iaculis blandit et quis lorem nam cursus eget tortor id tristique nunc&hellip;</p>
        <p class="nospace"><a href="#">Read More &raquo;</a></p>
      </article>
    </div>
    <!-- ################################################################################################ -->
  </section>
</div>



<?php 
include 'levis_jeans_details.php';
include 'includes/footer.php'; 
      

?>		