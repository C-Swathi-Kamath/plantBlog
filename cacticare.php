<?php 


	include("includes/db.php");
	include("functions.php");
  $id = $_SESSION['id'];
	$query = "select * from user where id = '$id' limit 1";
  $result = mysqli_query($db,$query);
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
  <?php include_once('includes/navbar.php'); ?>

  <!-- Care -->
  <div class="row">
    <div class="col-lg-6 my-5 mx-auto ps-5">
      <h2 class="ms-5 fw-bold pb-4">Care tips for cacti and succulents</h2>
      <p class="mx-5">
        Cacti and succulents are easy care, drought tolerant plants. Avaiable
        in an array of colors and styles, they store water in the fleshy
        tissues of their stems, roots or leaves.
      </p>
      <ul class="mx-5 list-unstyled cactus-list">
        <li class="mb-2">Cacti and succulents thrive in containers</li>
        <li class="mb-2">
          Slow growing and do not need to be repotted often.
        </li>
        <li class="mb-2">
          Bring your plants indoors during the winter months
        </li>
        <li class="mb-2">
          Containers must have drainage holes for moisture to escape
        </li>
        <li class="mb-2">
          Always use cactus soil or add sand to your potting soil
        </li>
        <li class="mb-2">
          Most succulents like slightly acidic soil (5.5-6.5).
        </li>
        <li class="mb-2">The most common killer is over-watering.</li>
        <li class="mb-2">
          A moisture meter is a good tool to gauge how dry or wet the soil is
        </li>
        <li class="mb-2">
          Water every 1-2 weeks, depending on the temperature
        </li>
        <li class="mb-2">
          If your plants are looking a little stunted, they should be
          fertilized.
        </li>
      </ul>

      <p class="my-5 ms-5">
        <a href="https://hicksnurseries.com/houseplants/cactus-succulents/" class="link-success">Source: Hicks Nurseries
        </a>
      </p>
    </div>
    <div class="col-lg-6 my-5 mx-auto">
      <img src="images/care/succulent.jpg" class="w-75 mx-5 ps-4" alt="succulent" />
    </div>
  </div>

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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>