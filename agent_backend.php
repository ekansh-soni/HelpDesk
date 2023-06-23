<?php
session_start();
// include("cred.php");
  include("conn.php");

  if(isset($_POST['submit'])){
    
    $ticket_id  = substr(str_shuffle("0123456789"), 0, 6);  
    $Name = $_SESSION['username'];
    $description = $_POST['description'];
    $Department = $_POST["departments"];
    $source_ip = $_SERVER['REMOTE_ADDR'];
    $problem = $_POST["slct1"];
    $problem_cat = $_POST["slct2"];
    $remark = $_POST['hidden'];
    $seatnumber = $_POST['Sno'];

  }

  
  
  
  
  $query1 = "insert into p_details (user_id, pro_details, department, ticket_id, source_ip, p_id, p_cat_id, remark, seat_number   ) values ('$Name','$description','$Department', '$ticket_id','$source_ip','$problem','$problem_cat', '$remark', '$seatnumber') ";
  $result = mysqli_query($conn, $query1);
  
  ?>  


<html>

<head>
<img src="logo.png" id="logo" alt="">

  <title>Thank you</title>
  <link type="text/css" rel="stylesheet" href="style1.css">
</head>
<body class="tq">
  <h1>THANK YOU!! </h1><br>
  <h1> YOUR ACTION IS BEING RECORDED </h1>
  <p>&nbsp;</p>
  

<?php
include("conn.php");
$query2 = "select ticket_id from p_details where ticket_id=CURRENT_TIMESTAMP ";
$result1 = mysqli_query($conn, $query2);
$row = mysqli_fetch_array($result1);
echo "<h3>"."Your ticket id is <u>$ticket_id</u>"."</h3>" ;
?>


<?php
if (isset($_POST["Exit"])){
  header("location:agent.php");
}

?>

<p>&nbsp;</p>
<form method="POST">
<script     defer src="notification.js"></script>
<input type="submit" value="Exit" id="exit" formaction="agent.php" style="font-size: 18px;">


</form>





</body>
</html>

