<?php 

	include("includes/db.php");
	include("functions.php");
  include('includes/function.php');
  $id = $_SESSION['id'];
	$query = "select * from user where id = '$id' limit 1";
  $result = mysqli_query($db,$query);
  $user_data = mysqli_fetch_assoc($result);

  if(isset($_GET['page'])){
    $page=$_GET['page'];
  }else{
    $page=1;
  }
  $post_per_page=6;
  $result=($page-1)*$post_per_page;  
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
<?php include_once('includes/navbar.php'); ?>

  <!-- Blog -->
  <section>
    <h2 class="fw-bold fs-2 my-5 mx-5">Check out our posts</h2>
    <div class="row my-5 mx-4">
    <?php
      
        $postQuery="SELECT * FROM posts ORDER BY id DESC LIMIT $result,$post_per_page";
    
      
       $runPQ=mysqli_query($db,$postQuery);
       while($post=mysqli_fetch_assoc($runPQ)){
         ?>
    
      <div class="col-lg-4 col-md-6 px-4 my-4">
        <div class="card mx-auto">
          <a href="post.php?id=<?=$post['id']?>"><img src="images/<?=getPostThumb($db,$post['id'])?>" class="card-img-top width-100"  /></a>
          <div class="card-body">
            <p class="card-text">
              <a href="post.php?id=<?=$post['id']?>" class="text-decoration-none link-dark fs-5"><?=$post['title']?></a>
            </p>
          </div>
        </div>
      </div>
      <?php
       }
       ?>
</div>
<?php

  $q="SELECT * FROM posts";

$r=mysqli_query($db,$q);
$total_posts=mysqli_num_rows($r);
$total_pages=ceil($total_posts/$post_per_page);

?>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
        <?php
if($page>1){
  $switch="";
}else{
  $switch="disabled";
}
if($page<$total_pages){
  $nswitch="";
}else{
  $nswitch="disabled";
}
        ?>
          <li class="page-item <?=$switch?>">
            <a class="page-link" href="?<?php if(isset($_GET['search'])){echo "search=$keyword&";}?>page=<?=$page-1?>" tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <?php
for($opage=1;$opage<=$total_pages;$opage++){
  ?>
          <li class="page-item"><a class="page-link" href="?<?php if(isset($_GET['search'])){echo "search=$keyword&";}?>page=<?=$opage?>"><?=$opage?></a></li>

  <?php
}
          ?>
          
          <li class="page-item <?=$nswitch?>">
            <a class="page-link" href="?<?php if(isset($_GET['search'])){echo "search=$keyword&";}?>page=<?=$page+1?>">Next</a>
          </li>
        </ul>
      </nav>

      <!-- <div class="col-lg-4 col-md-6 px-4">
        <div class="card mx-auto">
          <a href="post1.php"><img src="images/blog/p1.jpg" class="card-img-top width-100"
              alt="Gardening tools spread out" /></a>
          <div class="card-body">
            <p class="card-text">
              <a href="post1.php" class="text-decoration-none link-dark fs-5">Gardening is a hobby for all</a>
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 px-4">
        <div class="card mx-auto">
          <a href="post3.php"><img src="images/blog/p3.jpg" class="card-img-top width-100"
              alt="planting a plant" /></a>
          <div class="card-body">
            <p class="card-text">
              <a href="post3.php" class="text-decoration-none link-dark fs-5">Fix these gardening mistakes today!</a>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="row my-5 mx-4">
      <div class="col-lg-4 col-md-6 px-4">
        <div class="card mx-auto">
          <a href="post6.php"><img src="images/blog/p6.jpg" class="card-img-top width-100" alt="suitcase" /></a>
          <div class="card-body">
            <p class="card-text">
              <a href="post6.php" class="text-decoration-none link-dark fs-5">Plant vs Holiday</a>
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 px-4">
        <div class="card mx-auto">
          <a href="post4.php"><img src="images/blog/p4.jpg" class="card-img-top width-100" alt="trees in snow" /></a>
          <div class="card-body">
            <p class="card-text">
              <a href="post4.php" class="text-decoration-none link-dark fs-5">The effect of winter season on plants</a>
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 px-4">
        <div class="card mx-auto">
          <a href="post5.php"><img src="images/blog/p5.jpg" class="card-img-top width-100"
              alt="plant parent book" /></a>
          <div class="card-body">
            <p class="card-text">
              <a href="post5.php" class="text-decoration-none link-dark fs-5">The New Plant Parent (Book Review)</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- Footer -->
  <?php include_once('includes/footer.php'); ?>
 

  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>