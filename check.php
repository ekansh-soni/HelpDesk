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
        background-image: url('agentBg.jpg');
    }
    center {
        margin-top: 20%;

    }

    #sid {
        margin: auto;
        width: 50%;
        border: 3px solid green;
        padding: 10px;
        text-transform: capitalize;
        text-align: center;
    }

    #fetch {
        padding-top: 3rem;
        margin: auto;
        width: 5%;
        border: 3px solid blueviolet;
        padding: 10px;
        text-transform: capitalize;
        text-align: center;
        margin-top: 2rem;

    }
    #result{
        color: red;
        text-transform: capitalize;
        text-align: center;
        font-size: 2rem;
    }
</style>

<body>
    <center>
        <form method="post">


            <input type="number" name=id placeholder="please enter your ticket ID" id="sid"> <br>
            <input type="submit" value="Fetch" name="fetch" id="fetch" onclick="document.getElementById('fetch').style.display='none';" >

        </form>
    </center>
</body>

</html>

<?php
include('conn.php');

if (isset($_POST['fetch'])) {
    $id = $_POST['id'];
    $query = "select * from p_details where ticket_id = '$id'";
    $result = mysqli_query($conn, $query);
}
if(mysqli_num_rows($result)>0){
?>
<?php
        while ($row = mysqli_fetch_assoc($result)) {

        ?>
<table border="1px" style="word-wrap: break-word; text-align: center; margin-right: auto; margin-left: auto; margin-top: 20pt;">
    <tr>
        <th>Name</th>
        <th>Assigned Enginner ID</th>
        <th>Department</th>
        <th>Problem</th>
        <th>Seat Number</th>
        <th colspan="0"> Details</th>
        <th>Source-IP</th>
        <th>Problem-Date</th>
        <th>Assigned Time</th>
        <th>Resolution Time</th>
        <th>Ticket ID</th>
        <th>Enginner's Remark</th>
        <th>Status</th>




    </tr>
    <tr>
        
        <td style="text-transform: capitalize;"> <?php echo $row["user_id"]; ?></td>
        <td> <?php echo $row["assign_id"]; ?></td>
        <td> <?php echo $row["department"]; ?></td>
        <td> <?php echo $row["p_cat_id"]; ?></td>
        <td> <?php echo $row["seat_number"]; ?></td>
        <td style="column-width: 15rem;"> <?php echo $row["pro_details"] ?></td>
        <td> <?php echo $row["source_ip"]; ?></td>
        <td> <?php echo $row["issue_date"]; ?></td>
        <td> <?php echo $row["assigned_time"]; ?></td>
        <td> <?php echo $row["resolve_date"]; ?></td>
        <td> <?php echo $row["ticket_id"]; ?></td> 
        <td> <?php echo $row["rem_eng"]; ?></td> 
        <td> <?php echo $row["remark"]; ?></td> 


</tr>
<?php }} else { echo '<label id="result"> No record found</label>';}?>



