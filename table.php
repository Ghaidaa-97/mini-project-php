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
  <link rel="stylesheet" href="main.css">  
    <title>Products List</title>
</head>
<body>



<nav class="navbar navbar-expand-lg navbar-fixed-top" id="nav">
    <div class="logo"><a href="main.php"><img src="logo3.png" id="lo"></a></div>
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





    <div class="container">
     <div class="row">
         <div class="col-lg-12 text-center my-5" style="font-family:'Times New Roman', Times, serif;font-weight:bolde">
          <h1>Products list</h1>
          </div> 
          <div>
          <div class="table-responsive">   <br>
          <table class="table table-striped" style="width:1000px;height: 50%;margin-left:100px;font-size:large;">
  <thead  class="text-center">
    <tr class="table-dark">
      <th scope="col">Product name</th>
      <th scope="col">Product category</th>
      <th scope="col">Product description</th>
      <th scope="col">Product date</th>
      <th scope="col">Product image</th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody class="text-center">
      <?php
      if(isset($_SESSION['product']))
      {
          foreach($_SESSION['product'] as $key => $value)
          {
              
              echo "
                  <tr class='table-light'>
                  <td>$value[product_name]</td>
                  <td>$value[category]</td>
                  <td>$value[desc]</td>
                  <td>$value[date]</td>
                  <td>$value[img]</td>

                  <form action='product.php' method='POST'>
                  <td><button name='remove' class='btn btn-outline-danger'>Remove</button></td>
                  <input type='hidden' name='product_name' value='$value[product_name]'>
                  </form>

                  </tr>
              ";
          }
      }
      ?>
    
  </tbody>
</table>
</div> 

<input type="button" onclick="location.href='main.php';" value="Go to Home" style="margin-top:30px;margin-left:520px;color:black; background-color:#ffff;font-size:large ;width:115px; ">

          </div>
        </div>
        </div>


        <br> <br><br> <br><br> <br>
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