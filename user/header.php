<!<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home| MobiWorld</title>
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

.pages{
background: #686868;
padding: 10px;
text-align: center;
}

.pages a{
color: white;
padding-right: 50px;
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


	@media(max-width: 858px){
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
<body>

	<?php  
	session_start();
	$count=0;
if (isset($_SESSION['cart'])){
$count = count($_SESSION['cart']);
}

	?>
<nav>
	<input type="checkbox" id="check">
	<label for="check" class="checkbtn">
		<i class="fas fa-bars"></i></label>
	<label class="logo">MobiWorld </label>
	<ul>
		<li><a class="active" href="index.php"><i class="fas fa-home"></i>Home</a></li>
		<li><a href="viewcart.php"><i class="fas fa-shopping-cart"></i>Cart(<?php echo$count;   ?>)</a></li>
		<li><a href="/"><i class="fas fa-user"></i>Hello</a></li>
		<li><a href="/"><i class="fas fa-sign-in-alt"></i> Login</a></li>
		<li><a href="../admin/mystore.php">Admin</a></li>
	</ul>
</nav>

<div class="pages">
	
		<a href="mobile.php">MOBILE</a>
		<a href="tablets.php">TABLETS</a>
		<a href="mobile_covers.php">MOBILE COVERS</a>

</div>
</body>
</html>



