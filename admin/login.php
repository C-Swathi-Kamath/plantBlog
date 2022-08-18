<?php
require('../includes/db.php');

if(isset($_SESSION['isUserLoggedIn']) && $_SESSION['isUserLoggedIn']){
  header('Location:index.php');
 
}
if(isset($_POST['login'])){
$email = mysqli_real_escape_string($db,$_POST['email']);
$password = mysqli_real_escape_string($db,$_POST['password']);


$query="SELECT * FROM admin WHERE email='$email' AND password='$password'";
$runQuery = mysqli_query($db,$query);
if(mysqli_num_rows($runQuery)){
  $_SESSION['isUserLoggedIn']=true;
  $_SESSION['email']=$email;
  header('Location:index.php');
}else{
  echo "<script>alert('Incorrect email or password !');</script>";
}

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../images/sprout.ico">

  <title>Rooted - Admin Panel</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <!-- font icon -->
   <!-- Google Fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu:wght@400;700&display=swap"
    rel="stylesheet" />
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link rel="stylesheet" type="text/css" href="../css/styles.css" />
  
</head>

<body >
<section id="login">
    <div class="col-lg-6 mt-5 px-5 ms-5 position-absolute start-50">
      <h2 class="fs-2 fw-bold mb-5 ms-5 ps-5 mt-5 pt-5">Welcome back!</h2>
      <form name="user" method="POST">
        <div class="mb-3">
          <label for="email">Email address</label>
          <input type="email" class="signup-input form-control" name="email" placeholder="Email address" required>
        </div>
        <div class="mb-3">
          <label for="floatingPassword">Password</label>
          <input type="password" class="signup-input form-control" name="password" placeholder="Password" required>
        </div>
        <div class="signup-buttons ms-5 ps-5 mt-5">
          <button type="submit" name="login" class="btn btn-success btn-lg mt-1 ms-5 me-3">Login</button>
        </div>
      </form>
    </div>
  </section>


</body>

</html>


<form class="login-form" method="post">

<p class="login-img"><i class="icon_lock_alt"></i></p>