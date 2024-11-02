
 <html>
 <head>
 <title> admin page </title>
 </head>
 <body bgcolor="#FFDCF4">
 <br></br>
  <h1 align="center"> Ordered Details</h1>
<br>
 <center><h3><font color="red">enter the date to get order details</font> </h3>
 <form method="POST">
 <br>
 <input type="date" placeholder="Enter date" name="date"/ required><br/>
 <br>
 <input type="submit" name="search" value="search"/>
 </form></center>
 
   <?php
if(isset($_POST['search']))
{
	$d=$_POST['date'];
 $conn=mysqli_connect("localhost","root","","smart menu card");
 $query=mysqli_query($conn,"select * from orders where ordered_dated='$d' ");
 ?>
 <table border="2" align="center" cellspacing="0" cellpadding="5" bgcolor="silver">
   <tr>
   <th> item_name</th>
   <th>category</th>
   <th>quantity</th>
   <th>user_name</th>
   <th>user_mobile_no</th>
   <th>table_no</th>
   <th>ordered_date</th>
   </tr>
   <?php
   while($r=mysqli_fetch_array($query))
   {
	   $item_name=$r['item_name'];
	   $category=$r['category'];
	   $quantity=$r['quantity'];
	   $user_name=$r['user_name'];
	   $user_mobile_no=$r['user_mobile_no'];
	   $table_no=$r['table_no'];
	   $ordered_dated=$r['ordered_dated'];
	 ?>
	 <tr>
	 <td><?php echo $item_name;?></td>
	 <td><?php echo $category;?></td>
	 <td><?php echo $quantity;?></td>
	 <td><?php echo $user_name;?></td>
	 <td><?php echo $user_mobile_no;?></td>
	 <td><?php echo $table_no;?></td>
	 <td><?php echo $ordered_dated;?></td>
   <?php
   }
   ?>
   <?php
   }
   ?>