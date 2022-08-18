<div class=" mx-auto px-5 col-6">

       
          <?php
          if(isset($_GET['id'])){
            ?>
<div class="card mb-3">
            <h5 class="card-header">Comments</h5>
            <?php
$comments = getComments($db,$post_id);
if(count($comments)<1){
  echo '<div class="card-body"><p class="text-center card-text">No Comments..</p></div>';
}
foreach($comments as $comment){
  ?>
<div class="card-body">
              <h5 class="" style="margin-bottom: 0;"><?=$comment['name']?></h5>
             <span class="text-secondary"> <small><?=date('F jS, Y',strtotime($comment['created_at']))?></small></span>
              <p class="card-text"><?=$comment['comment']?></p>
              
            </div>
  <?php
}
            ?>
            
          </div>
            <?php
          }
          ?>
          
          
    </div>