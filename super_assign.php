<style>
    .tid{
        text-align: center;
        font-size: 22px;
        border: 2px;
        border-color:  black; 
        color: black; 
        text-indent: 20px;
        line-height: 1;     
        
    }
</style>


<form class="tid" action="" method="POST">
    <h4>Ticket Id</h4>
    <input type="text" name='ticket_id' placeholder="Enter Ticket ID" style="margin-top: 5pt;">
    <p>&nbsp; </p>

    
    <select name="assign_name" style="margin-top: 10px;" >
        <option disabled selected hidden>select</option>
        <option >Amit sharma</option>
        <option >Nikhil Dhawan</option>

        
    </select>
    <p>&nbsp; </p>
    <input type="submit" name="Assign" value="Assign" style="font-size: 15px;"  >
</form>

<?php
include('conn.php');



if (isset($_POST['Assign'])){
    $tid = $_POST['ticket_id'];
    $name = $_POST['assign_name'];
    $query = "insert into admin_side (Assigned, ticket_id) values ('$name', '$tid')";
    $result = mysqli_query($conn, $query);
    
    

}



?>