<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Admin</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 800px;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        color: #333;
    }

    .admin-info {
        margin-top: 20px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
    }

    .admin-info p {
        margin: 10px 0;
        line-height: 1.6;
    }

    .admin-info h3 {
        margin-bottom: 10px;
        color: #4CAF50;
    }

    .admin-info img {
        display: block;
        margin: 0 auto;
        border-radius: 50%;
    }
</style>
</head>
<body>
<?php
$admin_name = "John";
$admin_position = "Hotel Manager";
$admin_email = "admin@hotel.com";
$admin_phone = "9884576313";
$admin_bio = "I am an experienced hotel manager with a passion for delivering exceptional hospitality services. With over a decade of experience in the industry, I have successfully managed various aspects of hotel operations, including guest services, staff management, and facility maintenance.

My goal is to ensure that every guest has a memorable stay at our hotel by providing top-notch accommodations, delicious dining options, and personalized attention to their needs. I believe in fostering a positive work environment where team members are motivated to deliver their best performance and contribute to the success of the hotel.";

echo "<div class='container'>";
echo "<h1>About Admin</h1>";
echo "<div class='admin-info'>";
echo "<h3>$admin_name</h3>";
echo "<p><strong>Position:</strong> $admin_position</p>";
echo "<p><strong>Email:</strong> $admin_email</p>";
echo "<p><strong>Phone:</strong> $admin_phone</p>";
echo "<p><strong>Bio:</strong> $admin_bio</p>";
echo "<h2>About Smart Menu Card</h2>";
echo "<p>The Smart Menu Card is a revolutionary digital menu solution that enhances the dining experience for both customers and restaurant owners. By replacing traditional paper menus with interactive digital menus, it offers numerous benefits such as:</p>";
echo "<ul>";
echo "<li>Easy updating of menu items and prices</li>";
echo "<li>Dynamic presentation of menu items with images and descriptions</li>";
echo "<li>Integration with ordering and payment systems for seamless transactions</li>";
echo "<li>Customization options to reflect the restaurant's branding</li>";
echo "</ul>";
echo "<p>With the Smart Menu Card, restaurants can streamline their operations, reduce costs, and provide a modern and engaging dining experience for their customers.</p>";
echo "</div>";
echo "</div>";
?>
</body>
</html>
