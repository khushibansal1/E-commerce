<!<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>View Cart</title>
	<style>
	.column h1{
		text-align: center;
		color: #0082E6;
		padding: 30px;
	}

table {
  border-collapse: collapse;
  width: 1000px;
  text-align: center;
}
 td, th {  
  border: 2px solid #ddd;
  text-align: left;
}


th, td {
  padding: 15px;
  font-size: 20px;
}


thead{
	background-color:#0082E6 ;
	color: white;
}


</style>
</head>
<body>
	<?php  
	include"header.php"
	?>

<div class="container">
<div class="row">
<div class="column">
	<h1>MY CART</h1>
</div>
</div>

</div>
<div class>
	<div  style="width:70%;Text-align:center;float:left;">
<table align="center">
  <thead>
  	<th>Index</th>
  	<th>Product Name</th>
  	<th>Product Price</th>
  	<th>Product Quantity</th>
    <th>Total Price</th>
    <th>Update</th>
    <th>Delete</th>


  </thead>

  <tbody>
  	<?php 


$ptotal = 0;
$total=0;
$i=0;
	if(isset($_SESSION['cart'])){
		foreach($_SESSION['cart'] as $key => $value){
			$ptotal = $value['productprice']*$value['productquantity'];
			$total += $value['productprice']*$value['productquantity'];
			$i=$key+1;

			echo"
			<form action='insertcart.php' method='POST'>
			<tr>
			<td>$i</td>
			<td><input type='hidden' name='pname' value='$value[productname]'>$value[productname]</td>
			<td><input type='hidden' name='pprice' value='$value[productprice]'>$value[productprice]</td>
			<td><input type='text' name='pquantity' value='$value[productquantity]'></td>
			<td>$ptotal</td>
			<td><button name='update'>Update</button></td>
			<td><button name='remove'>Delete</button></td>
			<td><input type='hidden' name='item' value='$value[productname]'></td>
			</tr>
		
			</form>
			";
		}
	}

   ?>

  </tbody>
</table>
</div>
<div style="width:30%;text-align: center;float:right;">
	<h1 class="htotal">TOTAL</h1><br>
	<h1 style="background-color: #0082E6; color:white;	"><?php  echo number_format($total,2); ?></h1>
	</div>

</div>
</body>
</html>