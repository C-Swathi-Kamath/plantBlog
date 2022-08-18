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

  <!-- Gallery -->

  <div class="py-4 px-5 my-5 mx-3">
    <h2 class="fs-2 fw-bold pb-2">Browse our work</h2>
    <p class="fs-5 pb-3">Our team has designed and decorated several homes and work places. We currently have over 100
      varieties of plants</p>
    <button type="button" onclick="location.href ='contact.html'" class="btn btn-success btn-lg rounded-pill">Book
      now</button>
  </div>
  <div class="row px-5 mb-5 mx-3">
    <div class="col-lg-4 mb-4">
      <img src="images/gallery/gallery5.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Succulents on a stand" />

      <img src="images/gallery/gallery1.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Plants on a stand" />
    </div>

    <div class="col-lg-4 mb-4">
      <img src="images/gallery/gallery3.jpg" class="w-100 shadow-1-strong rounded mb-4"
        alt="Cafe decorated with plants" />

      <img src="images/gallery/gallery4.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Gardening" />
    </div>

    <div class="col-lg-4 mb-4">
      <img src="images/gallery/gallery6.jpg" class="w-100 shadow-1-strong rounded mb-4"
        alt="Succulents in potted plants" />

      <img src="images/gallery/gallery2.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Arranged potted plants" />
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