<?php 
  require('includes/function.php');
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
     <?php include_once('includes/navbar.php'); ?>

        <!-- Post -->
        <div class="col-lg-8 mx-auto my-5 fs-5 lh-base">
            <div class="text-center">
            <?php
              $post_id=$_GET['id'];
              $postQuery="SELECT * FROM posts WHERE id=$post_id";
              $runPQ=mysqli_query($db,$postQuery);
              $post=mysqli_fetch_assoc($runPQ);
            ?>
            <h2 class="fw-bold fs-2 mb-5"><?=$post['title']?></h2>
            <img src="images/<?=getPostThumb($db,$post['id'])?>" class="w-75 rounded mb-5">
           </div> <?=$post['content']?> </div>
           <button type="button" class="btn btn-success mx-5 my-3 px-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
             Comment on this
           </button>
          </div>
        </div>

       
       <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Your Comment</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="includes/add_comment.php" method="post">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Name</label>
                  <input type="name" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" />
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Comment</label>
                  <input type="text" class="form-control" name="comment" id="exampleInputPassword1" />
                </div>
                <input type="hidden" name="post_id" value="<?=$post_id?>" />
                <button type="submit" name="addcomment" class="btn btn-success">
                  Add Comment
                </button>
              </form>
            </div>
          </div>
        </div>
      </div> 

      </div>        
            <?php include_once('includes/sidebar.php'); ?>
        </div>

    <!-- Footer -->
    <?php include_once('includes/footer.php'); ?>
  
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>