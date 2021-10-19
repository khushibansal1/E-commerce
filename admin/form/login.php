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

input[type=password], select {
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




</style>

</head>
<body>
	<div>
		<h1 style="text-align:center;">LOGIN FORM</h1>
	</div>

<div class="form1">
  <form action="login1.php" method="post">
    <label>Name</label>
    <input type="text" name="username" placeholder="Enter name..">

    <label>Password</label>
    <input type="password" name="password" placeholder="Enter Password..">

  
    <input type="submit" name="submit" value="login">
  </form>
</div>

</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
</head>

<style>

body{
  background-color: grey;
  padding-top: 20vh;
}
  
.form-container{
  width: 250px;
  height: auto;
  padding: 60px 80px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 0 10px 0 #000;
position: relative;
margin: auto;
}


.form-container input{
width: 250px;
padding: 12px 0px;
border: none;
background-color: #d3d3d3;
margin-bottom: 15px;
border-radius: 5px;

text-align: center;
}


.form-container input[type="submit"]
{
  background-color:#4690fb;
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



}
</style>
<body>

<form action="login1.php" method="post">

  <div class="form-container">
     <h1 style="text-align:center;">Admin Login</h1>
    <input type="text" name="username" placeholder="Enter username..">

    <input type="password" name="password" placeholder="Enter Password..">

    <input type="submit" name="submit" value="Login">
  </form>

  </div>

</body>
</html>