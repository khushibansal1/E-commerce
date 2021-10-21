
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>products</title>
</head>

<style>

body{
  padding-top: 5vh;
}
  
.form-container{
  width: 250px;
  height: auto;
  padding: 50px 60px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 0 10px 0 #000;
position: relative;
margin: auto;
margin-bottom: 50px;


}

.form-container input{
width: 250px;
text-align: center;
padding: 12px 0px;
border: none;
background-color: #d3d3d3;
margin-bottom: 15px;
border-radius: 5px;
}

.form-container select{
  width: 250px;
text-align: center;
padding: 12px 0px;
border: none;
background-color: #d3d3d3;
margin-bottom: 15px;
border-radius: 5px;

}

.form-container input[type="submit"]
{
  background-color:#4690fb;
  color: white;
}


table {
  border-collapse: collapse;
  width: 1000px;
  text-align: center;
}

table, td, th {  
  border: 2px solid #ddd;
  text-align: left;
}

th, td {
  padding: 15px;
  font-size: 20px;
}



thead{
	background-color: black;
	color: white;
}



@media only screen and (max-width: 600px) {
 
.form-container{
  width: 150px;
  height: auto;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 0 10px 0 #000;
position: relative;
margin: auto;
}

.form-container input{
width: 150px;
text-align: center;
border: none;
background-color: #d3d3d3;

}

.form-container select{
width: 150px;
text-align: center;
border: none;
background-color: #d3d3d3;

}

table {
  width: 100%;
}

thead{
  background-color: black;
  color: white;
}

}


</style>
<body>

<?php  
$Id=$_GET['Id'];
include"config.php";
$record=mysqli_query($con,"SELECT * FROM `tblproduct` WHERE id=$Id");
$data=mysqli_fetch_array($record);
?>

<div class="form-container">
  <form action="update.php" method="post" enctype="multipart/form-data">
  			<h1 style="text-align:center;">Product Update</h1>

    <input type="text" name="pname" placeholder="Enter Product name.." value="<?php echo"$data[pname]"; ?>">

    <input type="text" name="pprice" value="<?php echo"$data[pprice]"; ?>" placeholder="Enter Product Price..">


    <input type="file" name="pimage">
    <img src="<?php echo"$data[pimage]"; ?>">

    <select name="pages" value="<?php echo"$data[pcategory]";?>">
    <option value="0">Select Product Category:</option>
    <option value="mobile">Mobile</option>
    <option value="tablets">Tablets</option>
    <option value="covers">Mobile covers</option>

    
  </select>
  <input type="hidden" name="id" value="<?php echo"$data[id]"; ?>" >
    <input type="submit" name="submit" value="update">
  </form>
</div>


<?php  

if(isset($_POST['update'])){
	$id=$_POST['id'];
	$product_name= $_POST["pname"];
	$product_price= $_POST["pprice"];
	$product_image= $_FILES["pimage"];
	$image_loc=$_FILES['pimage']['tmp_name'];
	$image_name=$_FILES['pimage']['name'];
	$img_des="Uploadimage/".$image_name;
	move_uploaded_file($image_loc, "Uploadimage/".$image_name);
	$products_category= $_POST["pages"];

	include"config.php";
	mysqli_query($con,"UPDATE `tblproduct` SET `pname`='$product_name',`pprice`='$product_price',`pcategory`='$products_category',`pimage`='$img_des' WHERE id=$id");

}

?>

</body>
</html>
	