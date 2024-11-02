<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 400px;
        margin: 100px auto;
        background-color: skyblue;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 20px 20px 20px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        margin-bottom: 30px;
    }

    input[type="text"], input[type="password"] {
        width: 80%;
        padding: 10px;
        margin-top: 10px;
        margin-bottom: 10px;
		margin-right:25px;

        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        width: 80%;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    a {
        display: block;
        text-align: center;
        margin-top: 20px;
        text-decoration: none;
        color: red;
    }

    img {
        display: block;
        margin: 0 auto;
        width: 300px;
        height: 400px;
        margin-bottom: 30px;
    }
</style>
</head>
<body>
<div class="container">
    <img src="menucard.jpeg" alt="Hotel Image">
  <center>  <h2>Login</h2></center>
    <form method="POST">
        <label for="userid">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User ID:</label><br>
      &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="userid" required><br><br>
        <label for="password">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password:</label><br>
       &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password" required><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="home" value="Login"><br><br>
        <a href="newaccount.php">Create a New Account</a>
    </form>
</div>
</body>
</html>

<?php
$conn=mysqli_connect("localhost","root","","smart menu card");
if(isset($_POST['home']))
{
    $userid=$_POST['userid'];
    $password=$_POST['password'];
    $query=mysqli_query($conn,"SELECT * FROM user WHERE userid='$userid' AND password='$password'");
    
    if(mysqli_num_rows($query) > 0)
    {
        echo "<script>
            alert('Login Ok ');
            window.location.href='homepage.php'
            </script>";
    }
    else
    {
        echo "<script>
            alert('Login Fail ');
            window.location.href='userlogin.php'
            </script>";
    }
}
?>
