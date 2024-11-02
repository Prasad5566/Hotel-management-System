<!DOCTYPE html>
<html>
<head>
<title>User Details</title>
<style>
    body {
        background: linear-gradient(to right, #ffcccc, #ff9999);
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 400px;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
    }

    form {
        text-align: center;
    }

    input[type="text"] {
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
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>
<div class="container">
    <h1>User Details</h1>
    <form method="POST">
        <label>User ID:</label><br>
        <input type="text" name="userid" required><br>
        <label>Username:</label><br>
        <input type="text" name="username" required><br>
        <label>Mobile No:</label><br>
        <input type="text" name="mobileno" required><br>
        <label>Email ID:</label><br>
        <input type="text" name="emailid" required><br>
        <label>City:</label><br>
        <input type="text" name="city" required><br>
        <label>Postal Address:</label><br>
        <input type="text" name="postal_address" required><br>
        <label>No of Members:</label><br>
        <input type="text" name="no_ofmembers" required><br>
        <label>Password:</label><br>
        <input type="text" name="password" required><br>
        <label>Table No:</label><br>
        <input type="text" name="table_no" required><br>
        <input type="submit" name="Add" value="Add">
    </form>
</div>

<?php
$conn=mysqli_connect("localhost","root","","smart menu card");
if($conn)
{
   
}
else
{
    echo "Database is not connected";
}
if(isset($_POST['Add']))
{
    $v1=$_POST['userid'];
    $v2=$_POST['username'];
    $v3=$_POST['mobileno'];
    $v4=$_POST['emailid'];
    $v5=$_POST['city'];
    $v6=$_POST['postal_address'];
    $v7=$_POST['no_ofmembers'];
    $v8=$_POST['password'];
    $v9=$_POST['table_no'];
    echo $v1;
    echo $v2;
    echo $v3;
    echo $v4;
    echo $v5;
    echo $v6;
    echo $v7;
    echo $v8;
    echo $v9;
    $query=mysqli_query($conn,"INSERT INTO user VALUES('$v1','$v2','$v3','$v4','$v8','$v5','$v6','$v7','$v9')");
    if($query)
    {
        echo "Data inserted";
    }
    else
    {
        echo "Data is not inserted";
    }
}
?>
</body>
</html>
