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
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
   <!-- Font awesome (for icons) -->
   <script src="https://kit.fontawesome.com/4e7f5f554e.js" crossorigin="anonymous"></script>
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
   <!-- Custom External CSS -->
   <link rel="stylesheet" type="text/css" href="css/styles.css" />
 
</head>
<body>    
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" id="logo" href="index.php"><i class="fa-solid fa-seedling logo-icon"></i>Rooted</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
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
                  <li><a class="dropdown-item" href="pricing.php">Pricing</a></li>
                  <li><a class="dropdown-item" href="gallery.php">Gallery</a></li>
                  <li><a class="dropdown-item" href="caretips.php">Care tips</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

        <!-- Post -->
        <div class="col-lg-8 mx-auto my-5 fs-5 lh-base">
            <div class="text-center">
            <h2 class="fw-bold fs-2 mb-5">The Effects of Winter Season on Plants</h2>
            <p>As we enter the winter season, you may feel a little under the weather. But don't be surprised if your plants feel the same. Keeping these 5 factors in mind, you can provide a comfortable indoor climate for them to thrive. </p>
            <img src="images/blog/p4.jpg" class="w-75 rounded mb-5" alt="trees in snow">
           </div>
            <ol>
                <li class="mb-3 fw-bolder">Temperature:</li>
                <p class="mb-4">
                    Most indoor houseplants prefer a temperature range of 20°-25°C. 
                    But In winters, especially in North India, it can drop to even less than 10°C. 
                    In such conditions, try shifting them to warmer places, where the temperature doesn't fluctuate.
                     Keep in mind that while extreme conditions can damage our plants, fluctuations will surely kill them.
                </p>

                <li class="mb-3 fw-bolder">Humidity:</li>
                <p class="mb-4">
                    Ideally, indoor plants thrive in about 50% humidity.
                     During winters, it comes down to about 10-20%.
                      If you have a humidifier at home, use it to increase the humidity in your indoor space. 
                      Alternatively, you can keep your plants together in groups. 
                      Plants essentially release moisture during transpiration, which other plants can capture better if kept closer to each other. 
                      You can also try shifting them to humid places like near your bathroom or kitchen.  
                </p>

                <li class="mb-3 fw-bolder">Light:</li>
                <p class="mb-4">
                    Since days are shorter with cloudy grey skies, your plants may not receive adequate sunlight.
                     Moving our plants to brighter spots or near the windows can help them receive enough sun.
                      Also, do not forget to clean the dust off their leaves so that maximum light can fall on their surface. 
                      For additional support, fluorescent lights can be a good option during winters.
                </p>

                <li class="mb-3 fw-bolder">Water:</li>
                <p class="mb-4">
                    Watering your plants in winter can be tricky.
                     You have to be careful with its frequency. 
                     Plants do not lose much water nor does the soil as the temperature is mostly cool with not enough sunlight. 
                     Even though the topsoil may look dry, it can be moist beneath. 
                     Check with your finger at least one inch deep if the soil is still wet before watering. 
                     Otherwise, you may leave your plant standing in water, causing root rot. 
                     With a watering can, it is easier to control the amount of water you give to your plants. 
                     Additionally, only use water at room temperature so that it doesn't freeze the roots of the plants. 
                </p>

                <li class="mb-3 fw-bolder">Fertilizer:</li>
                <p class="mb-4">
                    Most plants remain dormant during the winter period. 
                    Although they don't need much fertilizing, they must meet their daily nutritional needs or they can become unhealthy. 
                    Unhealthy plants are more likely to get attacked by pest and insects. 
                    So it is absolutely necessary to keep them in shape.
                </p>

              </ol>
              <p><a href="https://www.gardenup.in/blog" class="link-success">Source: Garden Up</a></p>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>