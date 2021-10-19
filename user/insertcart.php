<?php  

session_start();
	$product_name = $_POST['pname'];
	$product_price = $_POST['pprice'];
	$product_qty = $_POST['pquantity'];

if(isset($_POST['addcart'])){

	$check_product= array_column($_SESSION['cart'], 'productname');
	if(in_array($product_name, $check_product)){
		echo"
			<script>
			alert('product already added');
			window.location.href='index.php';
			</script>
		";
	}
	else{

	$_SESSION['cart'][]=array('productname'=>$product_name, 
							'productprice'=>$product_price, 
							'productquantity'=>$product_qty

						);
}

}

if(isset($_POST['remove'])){
	foreach($_SESSION['cart'] as $key => $value){
		if($value['productname']===$_POST['item'])
			unset($_SESSION['cart'][$key]);	

				$_SESSION['cart']=array_values($_SESSION['cart']);
				header("Location:viewcart.php");
				


	}

}


if(isset($_POST['update'])){
	foreach($_SESSION['cart'] as $key => $value){
		if($value['productname']===$_POST['item'])
			$_SESSION['cart'][$key]=array('productname'=>$product_name, 
							'productprice'=>$product_price, 
							'productquantity'=>$product_qty

						);
				header("Location:viewcart.php");
				
	}

}

?>