<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include("conn.php");
$query = "select * from user_details";
$result = mysqli_query($conn, $query);
?>

<table border="1px" style=" word-wrap: break-word;text-align: center; margin-right: auto; margin-left: auto; margin-top: 20pt;">
    <tr>
        <th>User Name</th>
        <th>Password</th>
        <th>Email</th>
    </tr>
    <?php while($row = mysqli_fetch_assoc($result)){ ?>
    <tr>
        <td><?php echo $row ['username']; ?></td>
        <td><?php echo $row ['password']; ?></td>
        <td><?php echo $row ['email']; ?></td>
    </tr>

<?php    
}
?>
</table>



    
</body>
</html>