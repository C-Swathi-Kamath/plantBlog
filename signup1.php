<?php 

	include("includes/db.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$name = $_POST['name'];
        $email = $_POST['email'];
		$password = $_POST['password'];

		echo $name . $email . $password;

		if(!empty($name) && !empty($email) && !empty($password) && !is_numeric($name))
		{

			//save to database
			$id = random_num(20);
			$query = "insert into user(name,email,password) values('$name','$email','$password')";

			mysqli_query($db, $query);

			 header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>