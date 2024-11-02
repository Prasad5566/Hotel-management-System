<?php
	   		$conn=mysqli_connect("localhost","root","","smart menu card");

	   $getname=$_GET['name'];
	   if(isset($_POST['ADD']))
	   {
           $v1=$_POST["f1"];		   
	       $v2=$_POST["f2"];		   
	       $v3=$_POST["f3"];
	       $v4=$_POST["f4"];		   
	       $v5=$_POST["f5"];
           $v6=$_POST["f6"];		   
       		            $v7=$_POST["f7"];		   
  
	   
	   $query=mysqli_query($conn,"INSERT INTO orders VALUES('$v3','$v7','$v4','$v1','$v2','$v5','$v6') ");
	   if($query)
	   {
		   echo"<script type='text/javascript'>alert('Thank you for ordering. Your order has been placed');
			   window.location.assign('homepage.php')</script>";
	   }
	   else
	   {
		   echo"<script type='text/javascript'>alert('Unable to place order')
		 window.location.href('orders.php')</script>";
	   }
	   }
	  ?>
<html lang="en">
	<head>
		<title></title>
		<style>
	body{

 background-color: #338DFF; /* Blue */
    color: #FF5733;	}
	.background{
		width:700px;
		height:700px;
		position :absolute;
		transform:translate(-50%,-50%);
		left:50%;
		background-color: #FF5733;
    color: #338DFF;
		top:50%;
		}
	
	
	form{
		height:700px;
		width:650px;
		background:rgba(255,255,255,0.13);
		position:absolute;
		transform:translate(-50%,-50%);
		top:50%;
		left:50%;
		border-radius:10px;
		backdrop-filter:blur(10px);
		border: solid rgba(255,255,255,0.6);
		box-shadow:0 0 40px rgba(8,7,16,0.6);
		padding:30px 35px;
	}
		
		button:hover{
			background:linear-gradient(to right,#ff512f,yellow);
			color:white;
			
		}
			.heading{
			color:white;
			text-position:center;
			font-size:30px;
		}
		
	input[type=submit]
  {
	  margin:10px 20px;
	  padding:10px 22px;
	  cursor:pointer;
	  width:25%;
	  height:5%;
  }
  form {
    
    margin: 0 auto;
}

input[type="text"],
input[type="date"] {
    width: 100%; /* Make text boxes full width */
    padding: 10px; /* Add padding for better appearance */
    margin-bottom: 15px; /* Add space between text boxes */
    box-sizing: border-box; /* Include padding and border in the element's total width and height */
}
  input[type=number]
  {
	  padding:10px 22px;
	  width:10%;
	  height:4%;
  }
	</style>
	</head>
	<body style="background-repeat:no-repeat;background-size:100% 100%">
  
	<div class="heading">
	
	<h2 ><center><font color="royal"></font></center>
	</div>
	<div>
	 &emsp; &emsp; &emsp;&emsp;  &emsp; &emsp;&emsp;  &emsp;
		&emsp; &emsp; &emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp;
&emsp; &emsp; &emsp;
	
	</div>
	<div class="background">
	<div class="shape"></div>
	<div class="shape"></div>
	</div>
	<center>
	<form method="POST">	
	
	

	 <input type="text" name="f1" placeholder="Enter user name"/ required></br></br>
	<input type="text" name="f2" placeholder="Enter user_mob_no"/required></br></br>
	  <input type="text" name="f3" value="<?php echo$getname;?>"/required></br></br>
	  	  <input type="text" name="f7" placeholder="category"/required></br></br>

	<input type="text" name="f4" placeholder="Enter quantity"/required></br></br>
	  <input type="text" name="f5" placeholder="Enter table_no"/required></br></br>
	  
	  <input type="date" name="f6" placeholder="Enter the date"/required></br>
	<center><input type="submit" class="button" value="Order" name="ADD" /></center>
		</form></center>
	</body>
	   </html>
	   