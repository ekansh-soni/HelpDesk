<style>
    a{
        font-size: 28px;
        text-decoration: none;
        display: block;
        margin-top: 50px;
        text-align: center;
        padding-top: 50px;
        color: black;
        /* margin-left: 200px; */
    }
</style>

<!-- <a href="">Amit Sharma</a> -->
<p onclick="Amit_Sharma()">amit </p>
<?php
function Amit_sharma(){
    include("conn.php");


$query = "select * from admin_side where Assigned = 'Amit sharma '";
// $result  = mysqli_query($conn, $query);
echo $query;
}

?>

