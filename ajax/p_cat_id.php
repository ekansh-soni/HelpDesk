<?php

include ('../conn.php');

$pid = $_POST['problem_id'];



$var_problem_sub_cat = "select * from problem_sub_cat  where p_id = '$pid'";

$result1 = mysqli_query($conn, $var_problem_sub_cat);

$output=  '<option selected hidden value=""></option>';
while($result= mysqli_fetch_assoc($result1)){
    $output .= '<option values="'.$result['p_cat_id'].'">'.$result['issue'].'</option >';}

    echo $output;

?>