<?php
if(isset($_POST['submit'])){
    session_start();
    include("conn.php");
    $query = "select * from engineer join p_details on p_details.assign_id=engineer.id where engineer.name ='$_SESSION[username]'"; 
    $result = mysqli_query($conn, $query);  
    header('Content-Type: application/csv');  
    header('Content-Disposition: attachment; filename=data.csv');  
    $output = fopen("php://output", "r");  
    fputcsv($output, array('Department','Problem','Description','Ticket ID','Engineer Remar'));   
    while($row = mysqli_fetch_assoc($result))  
    {  
        fputcsv($output, $row);  
    }  
    fclose($output);
}else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Data</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0  ;
    }

</style>
<body>
    <form action="" method="post">

        <div class="time">
            <div class="content">
                <label for="">From</label>
                <input type="date" name="date" id="time">
                <label for="">TO</label>
                <input type="date" name="date" id="time">
                <input type="submit" name="submit" id="" value="Download">
            </div>
        </div>
        
    </form>

</body>
</html>

<?php    
}
?>