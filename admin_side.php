<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Side</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            
        }
        /*html{
            max-width: 10rem;
            min-height: auto;
        }*/
        body {
            font-size: 10px;
            background-image: url('agentBg.jpg');
        }

        .header {
            height: 10rem;
            width: auto;
            margin-top: auto;
            background-color: burlywood;
            text-decoration: none;
        }

        #logo {
            height: 7rem;
            width: auto;
            padding-left: 2rem;
            padding-top: 2rem;
        }

        .logout {
            float: right;
            margin-top: -3rem;
            margin-right: 2rem;
            font-size: 2.5rem;
            border: 2px solid black;
        }

        a.one {
            font-size: 3rem;
            margin: 0 auto;
            display: block;
            margin-top: -5rem;
            text-decoration: none;
            color: black;
        }

        .containt {
            position: relative;
            border: 2rem solid red;
            width: 100%;
            overflow: hidden;
            padding-top: 66.66%;
            /* 4:3 Aspect Ratio */
            border: 2rem black;
        }

        .lside{
            border: 2px solid black;
            height: 45rem;
            width: 25rem;
            position: absolute;
            margin-top: 2rem;
            margin-left: .3rem
        }
        #lside{
            text-align: center;
            font-size: 2rem;
            text-transform: uppercase;

            
        }
        .sa{
            font-size: 2.65rem;
            text-decoration: none;
            color: black;
            margin-left: 16rem;
            padding-top: 20rem;

        }

        .frame {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        @media(max-width: 100px) {
            body {
                max-width: 70vw;
            }
        }
    </style>
</head>

<body>
    <form class="main" method="post">
        <header class="header">
            <a href="login_form.php"><img src="Dayton.png" alt="logo of tcil" id="logo"></a>
            <a href="download.php">Download </a>
            <a href="tp.php" class="sa" target="_blank">Self Assign</a>
            <a class="one" id="click" href="admin_assign.php" target="main" style="text-align: center;">Assigned</a>

            <input disabled name="name" style="float: right;margin-right: 20rem;margin-top: -4rem;background: deepskyblue; color: black; text-transform: uppercase;color: red;text-align: center;font-weight: bold;width: fit-content;height: 2.5rem;font-size: 1.1rem;border-radius: 20px;" id="name" placeholder="<?php session_start();
            echo $_SESSION['username'];  ?>">

            <a class="logout" href="logout.php">Logout</a>

        </header>

        <div class="containt">
            <iframe class="frame" frameBorder="2" src="choise.php" name="main"></iframe>
        </div>
    </form>
</body>

</html>