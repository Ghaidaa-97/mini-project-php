<?php
 include("product.php");
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="js.bootstrap.min.js"></script>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="grid.css">
  <title>STORE</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-fixed-top" id="nav">
    <div class="logo"><a href='main.php'><img src="logo3.png" id="lo"></a></div>
    <span class="navv">
    

    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
      <ul class="navbar-nav mr-auto">

      <li>
          <a class="navbar-brand" href="main.php">Home</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </li>

        <li>
          <a class="navbar-brand" href="grid.php">Gallery</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </li>

        <li>
          <a class="navbar-brand" href="table.php">Products list</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </li>

        <li>
          <a class="navbar-brand" href="#">Contact Us</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </li>

        <li>
          <a class="navbar-brand" href="#">About</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </li>
      </ul>
    </div>
  </span>
  </nav>




  <script>
$(document).ready(function(){
	$(".wish-icon i").click(function(){
		$(this).toggleClass("fa-heart fa-heart-o");
	});
});	
</script>
</head>
<body>
<div class='container-xl'>
	<div class='row'>
		<div class='col-md-12'>
			<h2>Featured</h2>
            
                
<?php
      if(isset($_SESSION['product']))
      {
          foreach($_SESSION['product'] as $key => $value)
          {
              
              echo "
              <div class='carousel slide'>
            
		
			<!-- Wrapper for carousel items -->
           
			<div>
						<div class='col-lg-3'  style='margin:2%;' >
							<div class='thumb-wrapper'>
								<span class='wish-icon'><i class='fa fa-heart-o'></i></span>
								<div class='img-box'>
							
                                <img src='tulip.png' class='img-fluid' alt='Headphone'>
								</div>
                
								<div class='thumb-content'>
								
                                    <h3><b>$value[product_name]</b></h3>
                                    <h5>$value[category]</h5>
                                    <p>$value[desc]</p>
									<p class='item-price'><strike>$25.00</strike> <b>$23.99</b></p>
									<button id='singlebutton'  class='btn btn-primary' style='color:white;  text-align:center;font-size:meduim ; border: 1px solid white; background-color:grey; '>Add to cart</button>
                                    
                            </div>						
						</div>
					</div>		
				</div>
			</div>
";
                                }
                            }
                            ?>
                            
                            <!-- ('<div class="col-md-4 mt-2">
        <div class="card">
            <div class="card-body">
                <div class="card-img-actions"> <img src="tulip.png" class="card-img img-fluid" width="96" height="350" alt="Image"> </div>
            </div>
            <div class="card-body bg-light text-center">
                <div class="mb-2">
                    <h5 class="font-weight-semibold mb-2" style="color:#80765c;">[product_name] </h5><p class="text-muted" data-abc="true">' . $arr3[$i] . '</p>
                    </div>
                    <h4 class="mb-0 font-weight-semibold">$' . $arr2[$i] . '</h4>
                    <div> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i></div>
                    <div class="text-muted mb-3"></div> <button type="button"  class="btn bg-cart btn-primary"><i class="fa fa-cart-plus mr-2"></i> Add to cart</button>
                </div>
            </div>
        </div>'); -->
			
		
                            </div>
	</div>
</div>


<br> <br>

<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Flower Shop
          </h6>
          <p>
          Fresh Flowers Delivered To Your Doorstep , Order Online Today.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Tulip</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orchid</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>

          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
         
          <p>
            <i class="fas fa-envelope me-3"></i>
            ghaidaaobeidat2o@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> +962 77809 3278 </p>
         
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2022 Copyright:
    <a class="text-reset fw-bold" href="">Flower Shop.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->



</body>

</html>