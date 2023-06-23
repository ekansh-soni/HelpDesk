<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #links {
        margin: 0 auto;
        margin-top: 3rem;
        max-width: auto;
        display: flex;
        flex-direction: row;
        align-items: center;
        padding-left: 20rem;
        gap: 3rem;

    }

    a {
        font-size: large;
        align-items: center;
        margin-top: 1rem;
        background-color: #4681f4;
        color: black;
        padding: 1rem 2rem;
        text-align: center;
        text-decoration: none;
        border-color: black;
        font-weight: bold;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        border-radius: 2rem;
    }
</style>

<body>
    <div id="links">

        <a href="add_user.php" target="supervisor_links">Add User</a>
        <a href="delete_user.php" target="supervisor_links"> Delete User </a>
        <a href="show_total_user.php" target="supervisor_links"> Show total user</a>

    </div>
</body>

</html>