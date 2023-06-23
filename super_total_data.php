<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        text-align: center;
        font-size: 18pt;
        margin-top: 4pc;
        color: black;
    }
</style>
<body>
    
    </body>
    </html>
    
    <?php
include ("conn.php");

$query = "select * from p_details";
$result = mysqli_query($conn,$query);


$sql= mysqli_num_rows($result);
?>

<a href="ti.php" target="supervisor_links" style="color: black;">Total Issues: <?php echo "$sql";?><br ></a>


<?php






?>

