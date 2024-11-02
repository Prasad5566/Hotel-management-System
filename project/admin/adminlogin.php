<html>
<head>
<title>My Page</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
    }
    .container {
        width: 400px;
        margin: 50 auto;
        margin-top: 80px;
        background-color: skyblue;
        padding: 80px;
        border-radius: 5px;
        box-shadow: 20px 20px 20px rgba(1, 2, 1, 0.1);
    }

    input[type="text"], input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: solid;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body align="center">
    <div class="container">
        <img src="admind.jpeg" height="400" width="400" style="display: block; margin: 0 auto;">
        <form method="POST">
		<br>
		<br>
            <label for="hotel_id">Hotel ID:</label>
            <input type="text" name="hotel_id" required>
            <label for="hotel_password">Password:</label>
            <input type="password" name="hotel_password" required>
            <input type="submit" name="home" value="Login">
        </form>
    </div>
</body>
</html>
<?php
$conn=mysqli_connect("localhost","root","","smart menu card");

if(isset($_POST['home']))
{
	
	
	$hotel_id=$_POST['hotel_id'];
	$hotel_password=$_POST['hotel_password'];
	
	echo $hotel_id;
	echo $hotel_password;
	$query=mysqli_query($conn,"SELECT * FROM hotel_account WHERE hotel_id='$hotel_id' AND hotel_password='$hotel_password'");
	
	if(mysqli_num_rows($query) > 0)
	{
		echo "<script>
			alert('Login Ok ');
			window.location.href='homepage.php'
			</script>
			";
	}
	else
	{
		echo "<script>
			alert('Login Fail ');
			window.location.href='adminlogin.php'
			</script>
			";
	}


}
