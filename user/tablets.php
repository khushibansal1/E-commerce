<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
  padding: 0;
margin: 0;
}
input[type=submit] {
  width: 70%;
  background-color: #0082EC;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  
}
.tablets{
  text-align: center;
  color: #0082E6;
  padding: 30px;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 33.33%; 
  padding: 0 16px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    padding: 16px 0px 23px 0px;
  text-align: center;
  background-color: #f1f1f1;
      padding-top: 30px;
       padding-bottom: 30px;
margin: 25px;
    width: 25rem;
  }

.card:hover{
     transform: scale(1.1);
  transition: .5s;

}
</style>
<title>Home-Page</title>
<?php 
include 'header.php';?>
</head>
<body>

<h1 class="tablets">TABLETS</h1>

<?php  
include'config.php';
$record = mysqli_query($con,"select * from tblproduct");
while( $row=mysqli_fetch_array($record)){
$check_page= $row['pcategory'];
  if($check_page === 'tablets'){

echo "
<div class='row'>
  <div class='column'>
    <form action='insertcart.php' method='POST'>

    <div class='card'>
    <img src='../admin/product/$row[pimage]' height='164px' width='110px'><br><br>
      <h3>$row[pname]</h3><br>
      <p>Rs:$row[pprice]</p><br>
      
     <input type='hidden' name='pname' value='$row[pname]'>
      <input type='hidden' name='pprice' value='$row[pprice]'><br>
      <input type='number' name='pquantity' value= 'min='1' max='20'' placeholder='Quantity'></br></br>
      <input type='submit' name='addcart' value='Add to Cart'>
    </div>
    </form>
  </div>

";
  }
}
?>

<!-- 
  <div class="column">
    <div class="card">
      <h3>Card 2</h3>
      <p>Some text</p>
      <p>Some text</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>Card 3</h3>
      <p>Some text</p>
      <p>Some text</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>Card 4</h3>
      <p>Some text</p>
      <p>Some text</p>
    </div>
  </div>
</div>
 -->
</body>
</html>
