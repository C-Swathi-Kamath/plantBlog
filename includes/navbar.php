<?php 
include("includes/db.php");
?>

 
 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <a class="navbar-brand" id="logo" href="index.php"><i class="fa-solid fa-seedling logo-icon"></i>Rooted</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
        <?php if(isset($_SESSION['isUserLoggedIn']) && $_SESSION['isUserLoggedIn'])
        { ?>
       <?php }else{ ?>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li> 
        <?php }?> 
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
          <?php if(isset($_SESSION['isUserLoggedIn']) && $_SESSION['isUserLoggedIn'])
        { ?>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
       <?php }else{ ?>
        <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        <?php }?>
        </ul>
      </div>
    </div>
  </nav>
