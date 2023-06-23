<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Engineer</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    body{
        font-size: 10px;
    }
    .user{
        margin-top: 5rem;
        
        
    }
    #engineer{
        margin-top: 1rem;
        width: 40rem;
        height: 3rem;
        font-size: 2rem;
        text-align: center;
        text-transform: none;
    }
    button{
        margin-top: 1rem;
        width: 8rem;
        height: 3rem;
        font-size: 2rem;
        
    }


</style>
<body>
    <form method="post">

        <div class="user">
            <center>
                
                <select name="category" id="engineer">
                    <option value="Agent">Agent</option>
                    <option value="Admin">Admin</option>
                    <option value="Supervisor">Supervisor</option>
                </select><br>
                <input type="text" id="engineer" name="name" placeholder="Please Enter User Name"><br>
                <input type="text" id="engineer" style="text-transform: none;" name="pass" placeholder="Please Enter Password"><br>
                <input type="text" id="engineer" style="text-transform: uppercase;" name="depart" placeholder="Department"><br>
                <input type="email" id="engineer" style="text-transform: none;" name="mail" placeholder="Enter Your E-mail"><br>
                <button name="add" id="add" onclick="document.getElementById('add').innerHTML='Added Successfully'" >Add</button>    
            </center>
        </div>
        
    </form>
</body>
</html>
<?php
include("conn.php");
if(isset($_POST['add'])){
    $category = $_POST['category'];
    $name = $_POST['name'];
    $password = $_POST['pass'];
    $department = $_POST['depart'];
    $mail = $_POST['mail'];
}

$query  = "insert into user_details (username, password, email,date,  department, category) values ('$name','$password','$mail',now(),'$department', '$category')";

$result = mysqli_query($conn,$query);


?>