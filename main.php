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
  <title>STORE</title>
</head>

<body>

 <!--
 print_r($_SESSION['product']);
 session_start();
 ?>-->

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


  <form class="form-horizontal" method="POST" action="product.php">
    <fieldset>

      <div class="style">
      <!-- Form Name -->
      <strong style="text-align: center; font-size: larger;">Add Products</strong>


      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="product_name">Product name</label>
        <div class="col-md-4">
          <input id="product_name" name="product_name" placeholder="product_name" class="form-control input-md"
            required="" type="text">

        </div>
      </div>


      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="product_category">Product category</label>
        <div class="col-md-4">
          <select id="product_categorie" name="product_category" class="form-control">
            <option hidden></option>
            <option name="op1">Tulip</option>
            <option name="op2">Orchid</option>
          </select>
        </div>
      </div>


      <!-- Textarea -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="product_description">Product description</label>
        <div class="col-md-4">
          <textarea class="form-control" id="product_description" name="product_description"  placeholder="product_description"></textarea>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="online_date">Date</label>
        <div class="col-md-4">
          <input id="online_date" name="on_date" placeholder="DATE" class="form-control input-md" required=""
            type="date">

        </div>
      </div>

          <!-- File Button -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="filebutton">Product image</label>
            <div class="col-md-4">
              <input id="filebutton" name="filebutton" class="input-file" type="file">
            </div>
          </div>
        

          <!-- Button -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4"> <br><br>
              <button id="singlebutton" name="singlebutton" class="btn btn-primary" style="color:black; background-color:#ffff; text-align:center;font-size:large ; border: 1px solid black; ">ADD</button>
            </div>
          </div>

    </fieldset>
  </form>
  
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