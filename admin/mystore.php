<!-- 	<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Home-Page</title></head>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<?php 
// session_start();
// if(!$_SESSION['admin'])
// {
// 	header("location:form/login.php");
// }
?>
<body>

	<ul>
		<li><a href="mystore.php">MobiWorld</a></li>

		<li style="float:right"><a href="../user/header.php">user-panel</a></li>
		<li style="float:right"><a href="form/logout.php">Log-out</a></li>
		<li style="float:right"><a class="active" href="/">hello, </a></li>
	</ul>

	<div class="heading" >
		<h1  style="text-align: center;">Dashboard</h1>
	</div>

<div class="heading2" style="text-align: center;">
	<a href="product/index.php">Add post</a>
	<a href="">Users</a>
	
</div>


</body>
</html>

 -->


<!<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>admin panel</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>	
	<style>

*{
	padding: 0;
	margin: 0;
	text-decoration: none;
	list-style: none;
	box-sizing: border-box;
}
nav{
	background: #0082e6;
	height: 80px;
	width: 100%;

}

label.logo{
	color: white;
	font-size: 35px;
	line-height: 80px;
	padding: 0 100px;
	font-weight: bolder;
}

nav ul{
	float: right;
	margin-right: 20px;

}

nav ul li{
	display: inline-block;
	line-height: 80px;
	margin:  0 5px;
}

nav ul li a{
	color: white;
	font-size: 17px;
	padding: 7px 13px;
	text-transform: uppercase;

}


a.active, a:hover{
	background: #1b9bff;
	transition: .5s;

}

.checkbtn{
	font-size: 30px;
	color: white;
	float: right;
	line-height: 80px;
	margin-right: 40PX;
	cursor: pointer;
	padding-top: 20px;
display: none;

}

#check{
	display: none;
}



.heading h1{
	font-size: 40px;
	text text-align: center;
	padding: 30px;
}

.heading2 a{
	font-size: 30px;
	text text-align: center;
	padding: 15px;
	background-color: #1b9bff;
	color: white;
}

@media(max-width:  952px){
	label.logo{
		font-size: 30px;
		padding-left: 50px;

	}

	nav ul li a{
		font-size: 16px;

	}
}


	@media(max-width: 650px){
		.checkbtn{
			display: block;
			
		}
	 ul{
	 	position: fixed;
	 	width: 100%;
			height: 100vh;
			background: #2c3e50;
			top: 80px;
			left: -100%;
			text-align: center;
      transition: all .5s;

	 }

	nav ul li{
		display: block;
    margin: 50px 0;
    line-height: 30px;
	}

	nav ul li a{
		font-size: 20px;

	}

	a:hover,a.active{
		background: none;
		color: #0082e6;

	}

  #check:checked ~ ul{
    left:  0;
  }


}

</style>
</head>

 <?php 
session_start();
if(!$_SESSION['admin'])
{
	header("location:form/login.php");
}
?> 
<body>
<nav>
	<input type="checkbox" id="check">
	<label for="check" class="checkbtn">
		<i class="fas fa-bars"></i></label>
	<label class="logo">MobiWorld </label>
	<ul>
		<li><a href="/"><i class="fas fa-user"></i>Hello,<?php echo $_SESSION['admin']; ?> </a></li>
		<li><a href="../user/index.php">User Panel</a></li>
		<li><a href="form/logout.php"><i class="fas fa-sign-in-alt"></i> Logout</a></li>
	</ul>


	<div class="heading" >
		<h1  style="text-align: center;">Dashboard</h1>
	</div>

<div class="heading2" style="text-align: center;">
	<a href="product/index.php">Add post</a>
	<a href="">Users</a>
	
</div>


</nav>
</body>
</html>



