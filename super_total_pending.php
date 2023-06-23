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
        color: red;
    }
</style>
<body>
    
</body>
</html>

<?php
include ("conn.php");
$query = "select * from p_details where remark='pending ' and assign_id <=>NULL";   
$result = mysqli_query($conn,$query);
$sql= mysqli_num_rows($result);
?>

<a href="tp.php" target="supervisor_links" style="color: red ;">Total Pending Issues: <?php echo "$sql"; ?> <br> </a>

