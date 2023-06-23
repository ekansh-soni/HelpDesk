<?php

function call()
{
    include("conn.php");




    $query = "select * from p_details where remark= 'Pending' and assign_id <=>NULL";
    $result = mysqli_query($conn, $query);

?>



<table border="1px" style="word-wrap: break-word; text-align: center; margin-right: auto; margin-left: auto; margin-top: 20pt;">
        <tr>
            <th>Choose</th>
            <th>Name</th>
            <th>Department</th>
            <th>Seat No.</th>
            <th>Problem</th>
            <th>Details</th> 
            <th>Source-IP</th>
            <th>Status</th>
            <th>Problem-Date</th>
            <th>Ticket ID</th>
            <th>Choose Engineer </th> 
            <th>Assign </th>
        </tr>
        

        <?php
        while ($row = mysqli_fetch_assoc($result)) {



        ?>

            <tr>                
            <form method="post">

                <td><input type="radio" id="ticketid" name="ticketid1" value="<?php echo $row["ticket_id"]; ?> "></td>
                <td style="text-transform: capitalize;"><?php echo $row["user_id"]; ?> </input></td>
                <td> <?php echo $row["department"]; ?></td>
                <td> <?php echo $row["seat_number"]; ?></td>
                <td> <?php echo $row["p_cat_id"]; ?></td>
                <td style="column-width: 5rem; align-content: center;"> <?php echo $row["pro_details"]; ?></td>    
                <td> <?php echo $row["source_ip"]; ?></td>    
                <td> <?php echo $row["remark"]; ?></td>    
                <td> <?php echo $row["issue_date"]; ?></td>
                <td> <?php echo $row["ticket_id"]; ?></td>  
                <td style="text-transform: uppercase;"> <?php  include('name.php');?></td>
                <td> <input type="submit" name="Assign" value="Assign"></td>
                
                </form>
            </tr>
            
                <?php

        }
        
        



                if (isset($_POST['Assign'])){
                    $var_name = $_POST['name'];
                    $tiid = $_POST['ticketid1'];
                    
                    $query2 = "update p_details set assign_id = '$var_name', assigned_time = now() , remark='wip' where  ticket_id = '$tiid '";
                    // echo $query2;
                    $result = mysqli_query($conn, $query2);
                    

                }
                ?>
                

            

                </td>


            </tr>

        <?php
        
        ?>
    </table>
<?php
}


call();
?>




