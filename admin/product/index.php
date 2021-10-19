<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Products</title></head>
	<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=file], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}


table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}


</style>

</head>
<body>
	<div>
		<h1 style="text-align:center;">Product Details</h1>
	</div>

<div class="form1">
  <form action="insert.php" method="post" enctype="multipart/form-data">
    <label> Product Name</label>
    <input type="text" name="pname" placeholder="Enter Product name..">

    <label>Product Price</label>
    <input type="text" name="pprice" placeholder="Enter Product Price..">


    <label>Product Image</label>
    <input type="file" name="pimage">

 
  
    <input type="submit" name="submit" value="Upload">
  </form>
</div>



<table>
  <thead>
  	<th>ID</th>
  	<th>Name</th>
  	<th>Price</th>
  	<th>Image</th>
  </thead>

  <tbody>
  	<?php 

    include'config.php';
    $record =mysqli_query($con,"SELECT * FROM `tblproduct`");


while($row = mysqli_fetch_array($record))

	echo"
<tr>


	<td>$row[id]</td>
	<td>$row[pname]</td>
	<td>$row[pprice]</td>
	<td><img src='$row[pimage]' height='90px' width='200px'></td>

</tr>

	";

    ?>
  </tbody>
</table>
</body>
</html> -->

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


<div class="form-container">
  <form action="insert.php" method="post" enctype="multipart/form-data">
  			<h1 style="text-align:center;">Product Details</h1>

    <input type="text" name="pname" placeholder="Enter Product name..">

    <input type="text" name="pprice" placeholder="Enter Product Price..">


    <input type="file" name="pimage">

    <select name="pages">
    <option value="0">Select Product Category:</option>
    <option value="mobile">Mobile</option>
    <option value="tablets">Tablets</option>
    <option value="covers">Mobile covers</option>

    
  </select>
    <input type="submit" name="submit" value="Upload">
  </form>
</div>

<table align="center">
  <thead>
  	<th>ID</th>
  	<th>NAME</th>
  	<th>PRICE</th>
  	<th>CATEGORY</th>
    <th>IMAGE</th>
    <th>DELETE</th>

  </thead>

  <tbody>
  	<?php 


    include'config.php';
    $record =mysqli_query($con,"SELECT * FROM `tblproduct`");

while($row = mysqli_fetch_array($record)){
  ?>


	
<tr>
	<td><?php echo"$row[id]";?></td>
	<td><?php echo"$row[pname]";?></td>
	<td><?php echo"$row[pprice]";?></td>
  <td><?php echo"$row[pcategory]";?></td>
	<td>
    <?php echo"<img src='$row[pimage]' height='70px' width='80px'>";?>
  </td>
  <td><button href=" ">Delete</button></td>
</tr>
<?php
	}
?>


  </tbody>
</table>
</body>
</html>
