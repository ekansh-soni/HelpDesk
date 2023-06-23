<?php

function call(){
include ("conn.php");
$query = "select * from p_details where remark = 'done'";
$result = mysqli_query($conn,$query);


?>
<table border="1px" style=" text-align: center; margin-right: auto; margin-left: auto; margin-top: 20pt;">
    <tr>
        <th>Ticket ID</th>
        <th>Name</th>
        <th>Assigned</th>
        <th>Department</th>
        <th>Issue</th>
        <th>Description</th>
        <th>Engineer Description</th>
        <th>Resolve Time</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $row["ticket_id"]; ?></td>
            <td style="text-transform: capitalize;"><?php echo $row["user_id"]; ?></td>
            <td><?php echo $row["assign_id"]; ?></td>
            <td><?php echo $row["department"]; ?></td>
            <td><?php echo $row["p_cat_id"]; ?></td>
            <td style="column-width: 15rem;"> <?php echo $row["pro_details"] ?></td>
            <td><?php echo $row["rem_eng"]; ?></td>
            <td><?php echo $row["resolve_date"]; ?></td>
        </tr>

        <?php
    }
    ?>

</table>
<?php
}


call();
?>
