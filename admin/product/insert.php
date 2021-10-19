
<?php 


if(isset($_POST['submit'])){

	include'config.php';
	$product_name= $_POST["pname"];
	$product_price= $_POST["pprice"];
	$product_image= $_FILES["pimage"];
	$image_loc=$_FILES['pimage']['tmp_name'];
	$image_name=$_FILES['pimage']['name'];
	$img_des="Uploadimage/".$image_name;
	move_uploaded_file($image_loc, "Uploadimage/".$image_name);
	$products_category= $_POST["pages"];


mysqli_query($con,"INSERT INTO `tblproduct`(`pname`, `pprice`,`pcategory`, `pimage`) VALUES ('$product_name','$product_price','$products_category','$img_des')");

header("location:index.php");

}

?>

	




