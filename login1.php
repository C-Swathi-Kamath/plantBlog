<?php 

	include("includes/db.php");
	
	if(isset($_SESSION['isUserLoggedIn']) && $_SESSION['isUserLoggedIn']){
         header('Location:blog.php');
	}
	if(isset($_POST['login'])){
	$email = mysqli_real_escape_string($db,$_POST['email']);
	$password = mysqli_real_escape_string($db,$_POST['password']);
	

	$query="SELECT * FROM user WHERE email='$email' AND password='$password'";
	$runQuery = mysqli_query($db,$query);
	if(mysqli_num_rows($runQuery)){
  	$_SESSION['isUserLoggedIn']=true;
  	$_SESSION['email']=$email;
 	 header('Location:blog.php');
	}else{
  echo "<script>alert('Incorrect email or password !');</script>";
	}

	}
?>

<?php 

	include("includes/db.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$email = $_POST['email'];
		$password = $_POST['password'];


		if(!empty($email) && !empty($password) && !is_numeric($email))
		{

			//read from database
			$query = "select * from user where email = '$email' limit 1";
			$result = mysqli_query($db, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
                   $user_data = mysqli_fetch_assoc($result);
				   echo $user_data;
					if($user_data['password'] === $password)
					{
						$_SESSION['isUserLoggedIn']=true;
                    	$_SESSION['email']=$email;
						header("Location: blog.php");
						die;
					}
				}
			}
			
			echo "<script>alert('Incorrect email or password !');</script>";
		}
	}

?> 
 
   
