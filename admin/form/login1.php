<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"Ecommerce");

$name=$_POST['username'];
$pass=$_POST['password'];


$result=mysqli_query($con,"SELECT * FROM `admin` WHERE username = '$name' AND password='$pass'");


session_start();

if(mysqli_num_rows($result)){

	$_SESSION['admin']=$name;
	echo "
       <script>
       alert('Login Succesfull');
       window.location.href='../mystore.php';
       </script>
	";
}
else{
	echo "
       <script>
       alert('invalid username or password');
        window.location.href='login.php';
       </script>
	";
}


?>