<?php

function call()
{
    include("conn.php");


    $current_date = date("y-m-d", strtotime("today"));
    $past_date = date("y-m-d", strtotime("-7days"));



    $query = "select * from p_details";

    $result = mysqli_query($conn, $query);
    $query2 = "select * from engineer";
    $result2 = mysqli_query($conn, $query2);


?>
    <table border="1px" style=" word-wrap: break-word;text-align: center; margin-right: auto; margin-left: auto; margin-top: 20pt;">
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

        <?php
        while ($row = mysqli_fetch_assoc($result)) {



        ?>

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
                <td> <?php echo $row["remark"]; ?></td> <?php } ?></td>


            </tr>


                <?php
                
                ?>
    </table>
<?php
}


call();
?>
