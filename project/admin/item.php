<?php
    $conn=mysqli_connect("localhost","root","","smart menu card");
    $query=mysqli_query($conn,"select * from hotel_item_details");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
        body {
            background-color: #FFDCF4;
            font-family: Arial, sans-serif;
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 80%;
            border: none;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* Update box shadow */
            background-color: #f0f0f0; /* Update background color for the table */
        }
        th, td {
            padding: 15px;
            border: none;
            text-align: center;
        }
        th {
            background-color: #009688;
            color: white;
        }
        a {
            text-decoration: none;
        }
        h3 {
            margin: 10px 0;
        }
        tr:nth-child(even) {
            background-color: #e0e0e0; /* Alternate row background color */
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Hotel ID</th>
            <th>Item Name</th>
            <th>Category</th>
            <th>Item Price</th>
            <th>Description</th>
        </tr>
        <?php
        while($r=mysqli_fetch_array($query))
        {
            $hotel_id=$r['hotel_id'];
            $item_name=$r['item_name'];
            $category=$r['category'];
            $item_price=$r['item_price'];
            $description=$r['description'];
        ?>
        <tr>
            <td><?php echo $hotel_id;?></td>
            <td><?php echo $item_name;?></td>
            <td><?php echo $category;?></td>
            <td><?php echo $item_price;?></td>
            <td><?php echo $description;?></td>
        </tr>
        <?php
        }
        ?>
    </table>
	<h3 align='center'>click:<a href="additem.php">Add New Item</a></h3>

</body>
</html>
