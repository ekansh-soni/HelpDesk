<?php
session_start();
include("conn.php");
// $var_query = "select * FROM p_details JOIN engineer ON p_details.assign_id=engineer.id where assign_id='eng02'";
$var_query = "select * from engineer join p_details on p_details.assign_id=engineer.id where engineer.name ='$_SESSION[username]' and remark = 'wip' ";


$result = mysqli_query($conn, $var_query); ?>
<form method="post">
    <table border="1px" style=" text-align: center; width: 100rem; margin-right: auto; margin-left: auto; margin-top: 20pt;">

        <tr>
            <th>Choose</th>
            <th>Department</th>
            <th>Problem</th>
            <th>Seat</th>
            <th>Description</th>
            <th>Name</th>
            <th>Ticket ID</th>
            <th>Engineer Remark</th>
            <th>Further Tranfer</th>
            <th>Done</th>
            
            
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><input type="radio" name="tiid" value="<?php echo $row['ticket_id']; ?>"></td>
                <td><?php echo $row['department']; ?></td>
                <td><?php echo $row['p_cat_id']; ?></td>
                <td><?php echo $row['seat_number']; ?></td>
                <td><?php echo $row['pro_details']; ?></td>
                <td><?php echo $row['user_id']; ?></td>
                <td><?php echo $row['ticket_id']; ?></td>
                <td style="width: 11rem;"><input type="text" name="eng_rem" placeholder="Enter remark" style="width:20rem; text-align: center;"></td>
                <td><?php include('name.php');?></td>
                <td style="width: 6rem;"><input type="submit" name="done" value="submit" style="width: 5rem; height: 1.5rem; text-transform: uppercase;"></td>
            </tr>
        <?php } ?>
    </table>
<?php 
if(isset($_POST['done'])){
    
    $var_ticket_id = $_POST['tiid'];
    $var_yes_no = $_POST['done'];
    $var_name = $_POST['name'];
    $var_remark = $_POST['eng_rem'];

    if($var_name != null){
        $var_update_query = "update p_details set rem_eng = '$var_remark', assign_id = '$var_name'  where ticket_id = '$var_ticket_id' ";
        mysqli_query($conn,$var_update_query);
        
    }elseif($var_name == null){
        $var_update_query1 = "update p_details set rem_eng = '$var_remark', remark = 'done' , resolve_date = now() where ticket_id = '$var_ticket_id' ";
        echo($var_update_query1);
        exit;

    }

}
?>
</form>