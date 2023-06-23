
<?php 

session_start();
session_unset();
header("Location: login_form.php");
session_destroy();
exit;
?>
