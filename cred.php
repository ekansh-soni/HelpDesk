<?php

// use function PHPSTORM_META\type;

session_start();
include("conn.php");

$category = $_POST['category'];
$username = $_POST['username'];
$password = $_POST['password'];



$query = "select * from user_details where username = '$username' and password = '$password' and category = '$category'";
$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);

if (mysqli_num_rows($result) > 0) {

    if (isset($_POST['login'])) {


        if ($category == 'Agent') {

            $_SESSION['username'] = $username;
            header("Location: agent1.php");
        } elseif ($category == 'Supervisor') {

            $_SESSION['username'] = $username;
            header("Location: supervisor.php");
        } elseif ($category == 'Admin') {
            $_SESSION['username'] = $username;
            header("Location: admin_side.php");
        }
    }
} else {
?>

    <script type='text/javascript'>
        alert('Invalid Login')
        window.location.href = 'http://127.0.0.1/phase3/login_form.php';
    </script>
<?php
}
?>