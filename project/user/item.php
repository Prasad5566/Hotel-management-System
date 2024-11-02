<html>
 <head>
  <title>Item information(user)</title>
  <style>
  ul {
	list-style-type:none;
	margin: 20;
	padding:20;
	overflow:hidden;
	display:flex;
	flex-direction:rows;
	background-color:grey;
}
li{
float:left;
padding-right: 20px;
}
li a{
	display:block;
	color:white;
	text_align:center;
	padding:20px;
	text-decoration:none;
}
li a:hover{
backgrouund-color:#111;
}
li:last-child {
    padding-right: 0;
}
.input item{	
			width:50%;
			height:40px;
		}
select{
	width:200px;
	height:40px;
	margin:10px;
}
h1{
	text-decoration=underlined;
}
select:focus{
	min-width:150px;
	width:auto;
}
input[type=submit]
  {
	  margin:10px 20px;
	  padding:6px 35px;
	  cursor:pointer;
	  width:20%;
	  height:10%;
  }
   body {
        margin: 0;
        padding: 0;
        background-image: linear-gradient(to right, #F2E5D9, #EAD0C5, #DDC5CD, #C9CED6, #A9CFE5, #A3B9EB, #9AA5F3);
                          
        background-size: cover;
        height: 100vh;
    }
  </style>
 </head>
 <body>
 </style>
<style =letter-spacing="10cm";>
</style></head>
<body align="center" bgcolor='purple'>
<h1 align='center'><b><i><font  color='blue'><font size='35'>SMART MENU CARD</font></font></i></b></h1>
<ul>
	<a href="homepage.php"><li><b>Home |</li></a>
	<a href="item.php"><li>Items  |</li></a>
	<a href="myorder.php"><li>My Order   |</li></a>
	<a href="logout.php"><li>logout   |</li></a>
	<a href="contact.php"><li>Contact   |</li></font></b></a>
</ul>
<br><br><br>
  <form method="POST">
  <label style="font-size:50px"><font color="navyblue">Select item category</label>
 <select name="item" class="item">
	     <?php 
		$conn=mysqli_connect("localhost","root","","smart menu card");
if($conn)
{
	echo"data base connected";
}
else
{
	echo" data base is not connected";
}
		$sql="SELECT DISTINCT category FROM  hotel_item_details";
		$res=mysqli_query($conn,$sql); 
 
 while ($rows=mysqli_fetch_array($res))
     {
	 ?>
	 <option value ="<?php echo $rows['category']; ?>"> <?php echo $rows['category']; ?>  </option>
	 <?php 
     }
	 ?>
		</select></br></br>
  <input type="submit" name="search" value="Search"/>
  </form>
  </center>
 </body>
 <?php
if(isset($_POST['search']))
{
$conn=mysqli_connect("localhost","root","","smart menu card");

$d=$_POST['item'];
$query=mysqli_query($conn,"SELECT * FROM  hotel_item_details WHERE category='$d'");
?>
<br><br><br>
<html>
 <head>
  <title>Items info</title>
  </head>
  <body >
  <table border="5" width="800" align="center">
  <tr bgcolor="d5dbdb">
  <th>Item name</th>
  <th>Category</th>
   <th>Details</th>
   <th>Price</th>
   <th>Order</th>
  </tr>
  <?php
  while($r=mysqli_fetch_array($query))
  {
	  $name=$r['item_name'];
	  $category=$r['category'];
	  $details=$r['description'];
	  $price=$r['item_price'];
	 ?>
	  <tr align="center" bgcolor="fef9e7">
	  <td><?php echo$name?></td>
	  <td><?php echo$category?></td>
	  <td><?php echo$details?></td>
	  <td><?php echo$price?></td>
	  <td><a href="orders.php?name=<?php echo$name?>">Order</td>
	  
  <?php } ?>
  <?php } ?>
  
  </table>
 </body>
</html>
	 