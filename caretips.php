<?php 

session_start();

	include("connection.php");
	include("functions.php");
  $id = $_SESSION['id'];
	$query = "select * from user where id = '$id' limit 1";
  $result = mysqli_query($con,$query);
  $user_data = mysqli_fetch_assoc($result);
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Necessary meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Rooted</title>
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="images/sprout.ico" />
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu:wght@400;700&display=swap"
    rel="stylesheet" />
  <!-- Font awesome (for icons) -->
  <script src="https://kit.fontawesome.com/4e7f5f554e.js" crossorigin="anonymous"></script>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <!-- Custom External CSS -->
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <a class="navbar-brand" id="logo" href="index.php"><i class="fa-solid fa-seedling logo-icon"></i>Rooted</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
        <?php if($id == '')
        { ?> <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li> 
       <?php } ?>    
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.php">Blog</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
              Miscellaneous
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="pricing.php">Pricing</a>
              </li>
              <li>
                <a class="dropdown-item" href="gallery.php">Gallery</a>
              </li>
              <li>
                <a class="dropdown-item" href="caretips.php">Care tips</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <?php if($id == '')
        { ?>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
       <?php }else{ ?>
        <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        <?php }?>
        </ul>
      </div>
    </div>
  </nav>

        <!-- Care tips -->
        <section id="caretips">
            <div class="row my-5">
            <div class="col-lg-5 mx-auto">
                <h2 class="fw-bold fs-2 pb-3">General care tips</h2>
                <ol class="carelist fs-5 lh-lg">
                    <li>Choose plants based on your light</li>
                    <li>Pick plants that work with your schedule</li>
                    <li>Be mindful when watering</li>
                    <li>Know when to skip the fertilizer</li>
                    <li>Raise humidity levels when needed</li>
                    <li>Always keep temperatures stable</li>
                    <li>Don't be scared to repot</li>
                    <li>Shop from a reliable source</li>
                </ol>
                <h2 class="fw-bold fs-2 py-3">Categories</h2>
              <ol class="carelist fs-5 lh-lg">
                <li><a href="flowercare.html" class="text-decoration-none link-success">Flowering plants</a></li>
                <li><a href="veggiecare.html" class="text-decoration-none link-success">Vegetable plants</a></li>
                <li><a href="cacticare.html" class="text-decoration-none link-success">Cacti and succulents</a></li>
                <li><a href="bonsaicare.html" class="text-decoration-none link-success">Bonsai</a></li>
                <li><a href="crotoncare.html" class="text-decoration-none link-success">Crotons</a></li>
               </ol>
            </div>
                <div class="col-lg-4 mx-auto mt-5">
                    <img src="./images/plantcare.jpg" class="w-75" alt="plant being potted">
             </div>
            </div>

          
        </section>

       <!-- Footer -->

 <footer id="footer">
  <div class="container-fluid">
    <a href="https://www.facebook.com/" class="link-dark"><i class="social-icon fab fa-facebook-f"></i></a>
    <a href="https://twitter.com/" class="link-dark"><i class="social-icon fab fa-twitter"></i></a>
    <a href="https://www.instagram.com/?hl=en" class="link-dark"><i class="social-icon fab fa-instagram"></i></a>
    <a href="https://mail.google.com/" class="link-dark"><i class="social-icon fas fa-envelope"></i></a>
    <p class="footer-para">Made with 💚 in Nitte</p>
    <p>© Copyright 2022 Rooted</p>
  </div>
</footer>
   
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>