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
        color: green;
    }
</style>
<body>
    <!-- <Label>Total Solved Issues: <br>   </Label> -->
</body>
</html>

<?php
include ("conn.php");
$query = "select * from p_details where remark = 'done'";
$result = mysqli_query($conn,$query);
$sql= mysqli_num_rows($result);

?>
<a href="ts.php" target="supervisor_links" style="color: green;">Total Solved Issues: <?php echo "$sql" ?><br></a>