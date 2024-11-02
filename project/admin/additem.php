<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Page</title>
<style>
    body {
        background-color: tan;
        font-family: Arial, sans-serif;
    }
	
	
    table {
        margin: 0 auto;
        border-collapse: collapse;
        width: 60%;
        border: 5px  #333;
        box-shadow: 20px 20px 20px rgba(0, 0, 0, 0.1);
    }
    th, td {
        padding: 10px;
        border: 1px solid #333;
    }
    th {
        background-color: #333;
        color: white;
    }
    caption {
        text-align: center;
        margin-bottom: 10px;
    }
   form {
        margin: 20px auto; 
        width: 60%;
        background-color: #f9f9f9;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 20px 20px rgba(0, 0, 0, 0.1);
    }
	input[type="text"], input[type="submit"] {
        padding: 10px; 
        margin: 8px 0;
        width: 100%;
        border: 1px solid #ccc;
        border-radius: 4px; 
        box-sizing: border-box;
    }
input[type="submit"] {
        background-color: #333;
        color: #fff;
        cursor: pointer;
        width: 50%;
        margin: 0 auto; 
        display: block; 
    }
</style>
</head>
<body>
    <h1 align='center'></h1>
    <form method="POST" action="#" border="2">
        <table>
            <caption><h2><b>Add New Item</b></h2></caption>
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Hotel ID</td>
                <td><input type="text" name="hotel_id"></td>
            </tr>
            <tr>
                <td>Item Name</td>
                <td><input type="text" name="item_name"></td>
            </tr>
            <tr>
                <td>Category</td>
                <td><input type="text" name="category"></td>
            </tr>
            <tr>
                <td>Item Price</td>
                <td><input type="text" name="item_price"></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><input type="text" name="description"></td>
            </tr>
        </table>
        <br>
		<input type="submit"  name="Add" value="Insert">
    </form>
</body>
</html>

<?php
$conn=mysqli_connect("localhost","root","","smart menu card");
if($conn)
{
}
else
{
	echo" data base is not connected";
}
if(isset($_POST['Add']))
{
	$v1=$_POST['hotel_id'];
	$v2=$_POST['item_name'];
	$v3=$_POST['category'];
	$v4=$_POST['item_price'];
	$v5=$_POST['description'];

	echo $v1;
	echo $v2;
    echo $v3;
    echo $v4;
	echo $v5;
	
	$query=mysqli_query($conn,"INSERT INTO hotel_item_details VALUES('$v1','$v2','$v3','$v4','$v5')");
		if($query)
	{
		echo "<script>
			alert('insertion done ');
			window.location.href='item.php'
			</script>
			";
	}
	else
	{
		echo "<script>
			alert('insertion Fail ');
			window.location.href='additem.php'
			</script>
			";
	}

}
?>
</body>
</html>