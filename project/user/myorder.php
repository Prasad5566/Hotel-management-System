<html>
 <head>
  <title>Item information</title>
  <style>
  ul {
  list-style-type: none;
  margin: 10;
  padding: 10;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}input[type=submit]
  {
	  margin:20px 20px;
	  padding:10px 10px;
	  cursor:pointer;
	  width:15%;
	  height:10%;
  }
  input[type=text]
  {
	  margin:20px 25px;
	  padding:10px 22px;
	  
	  width:25%;
	  height:10%;
  }
  ul {
  list-style-type: none;
  margin: 20;
  padding: 20;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right:1px solid #bbb;
}

li a {
  display: block;
  color: red;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #ffff;
}

  </style>
 </head>

	<body style="background: linear-gradient(to bottom right, #ff9999, #66ccff);">
	<h1 align='center'><b><i><font color='blue'><font size='35'>SMART MENU CARD</font></font></i></b></h1>
<ul>
	<a href="homepage.php"><li><b>Home  |</li></a>
	<a href="item.php"><li>Items |</li></a>
	<a href="myorder.php"><li>My Order  |</li></a>
	<a href="logout.php"><li>logout  |</li></a>
	<a href="contact.php"><li>about  |</li></font><b></a>
</ul>
 <form method="POST" align='center'>
 <br><br><br>
 <label>ENTER MOB NUMBER TO SEE ORDERS</label><br><br><br>
 <input type="text" placeholder="Enter mobile no" name="mob_no"/ required><br/>
 <input type="submit" name="search" value="search"/>
 </form></center>
 </body>
</html>
<?php
if(isset($_POST['search']))
{
 $conn=mysqli_connect("localhost","root","","smart menu card");

$d=$_POST['mob_no'];
$query=mysqli_query($conn,"SELECT * FROM orders WHERE user_mobile_no='$d'");

?>
<html>
 <head>
  <title>Order list</title>
  <style>
  table {
    border-collapse: collapse;
    margin: 25px auto;
    font-size: 1em;
    font-family: Arial, sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    border: 2px solid #009879; 
}
th {
    background-color:pink;
    color: #ffffff;
    text-align: center;
    padding: 12px 15px;
}

td {
    padding: 12px 15px;
}

tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

tr:last-child {
    border-bottom: 2px solid #009879; 
}

  </style>
  </head>
  <body bgcolor="fdebdo">
  <br/><br/><br/>
  <center><table border="5" height="100" width="600" align="center">
  <tr bgcolor="yellow">
  
  <th >User name</th>
  <th>Mobile no</th>
  <th>Item name</th>
   <th>Quantity</th>
   <th>Table no</th>
   <th width="80">Date</th>
  </tr>
  </font>
  <?php
  while($r=mysqli_fetch_array($query))
  {
	  $uname=$r['user_name'];
	  $mob=$r['user_mobile_no'];
	  $iname=$r['item_name'];
	  $qty=$r['quantity'];
	  $tbno=$r['table_no'];
	  $date=$r['ordered_dated'];
	 ?>
	  <tr align="center" bgcolor="ecfof1">
	  <td><?php echo $uname?></td>
	  <td><?php echo $mob?></td>
	  <td><?php echo $iname?></td>
	  <td><?php echo $qty?></td>
	  <td><?php echo $tbno?></td>
	  <td><?php echo $date?></td>
  <?php } ?>
  <?php } ?>
       </tr>
  </table></center>
 </body>
</html>
</body>
</html>