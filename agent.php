<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <!-- <script     defer src="notification.js"></script> -->

    <title>Agent</title>
</head>

<style>
    * {
        margin: 0px;
        padding: 0px;

    }

    body {
        background-image: url("agentBg.jpg");
    }

    html {
        margin: 0 auto;
        font-size: 10px;
        margin: 10rem 10rem 10rem 10rem;
        border: 0.4rem solid red;
        border-radius: 20px;
        height: 95rem;
    }

    .form {
        display: grid;
        max-width: 100rem;
        margin: 0 auto;
        row-gap: 1rem;
        padding-top: 15rem;
        font-size: 2.5rem;

    }


    h1 {
        font-size: 5rem;
        text-align: center;
        font-weight: bolder;

    }

    #name {
        font-size: 2rem;
        align-content: center;
        border-radius: 3rem;
        margin: 0 auto;
        text-align: center;
        height: 3rem;
        width: 28rem;
        font-weight: bold;
    }

    #abc,
    #csp,
    #textdes,
    #depart,
    #sno {
        font-size: medium;
        float: left;
        text-transform: uppercase;
        padding-left: 4rem;
        font-size: 2.5rem;
    }

    #description {
        width: 25rem;
        text-align: center;
        text-transform: uppercase;
        padding: .5rem .5rem .5rem .5rem;
        border: .1rem solid black;
    }

    #slct1,
    #slct2,
    #slct3,
    #description {
        float: right;
        border-radius: 2rem;
        resize: none;
        margin-right: 6rem;
        text-align: center;
        font-size: 1.5rem;
    }

    #slct1,
    #slct2,
    #slct3 {
        width: 25rem;
        height: 3rem;
    }

    #submit {
        align-content: center;
        border-radius: 3rem;
        background-color: dark black;
        /* margin-left: 40rem;
       margin-right: 40rem; */
        margin: 0 auto;
        width: 16rem;
        height: 4rem;
    }

    #lo {
        float: right;
        font-size: 2rem;
        margin-right: 3rem;
        margin-top: 2rem;
        text-decoration: none;
        color: black;
        background-color: antiquewhite;

    }

    #check {
        font-size: 3rem;
        text-decoration: none;
        color: black;
        margin-left: 2rem;
        margin-top: 5rem;


    }

    #check:hover{
        color: blue;
    }


    @media (max-width:10000px) {
        .form {
            max-width: 700vw;
        }

        html {
            margin: 1rem;
            padding: 0;
        }
    }

    @media (max-width:750px) {
        .form {
            max-width: 500vw;
        }

        html {
            margin: 1rem;
            padding: 0;
        }
    }
</style>





<body>
    <div id="loader" style="margin-top: 2rem; position: absolute; ">

        <a style="margin-top: 2rem;" id="check" href="check.php">Check Status</a>
    </div>  
    <header id="lo">


        <a style="text-decoration: none; color: black;" href="logout.php">Logout</a>
    </header>


    <form action="agent_backend.php" method="POST" class="form">

        <h1> Welcome to HelpDesk </h1>
        <br><br>
        <input disabled name="name" style="text-transform: uppercase;" id="name" placeholder="<?php session_start();
        echo $_SESSION['username'];  ?>">
        <br>
        <label id="abc">choose problem

            <?php
            include_once('conn.php');
            $query = "select * from problem_master";
            $result = mysqli_query($conn, $query);

            ?>




            <select name="slct1" id="slct1">
                <option Disable selected hidden>Choose</option>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <option name="pc" style="text-transform: uppercase;" value="<?php echo $row['p_id']; ?>"><?php echo $row['p_category']; ?></option>
                <?php

                } ?>
            </select></label> <br>




        <label id="csp">Choose Sub Problem Domain
            <select name="slct2" id="slct2">
                <option Disable selected hidden>Choose</option>


            </select></label>
        <br>

        <label id="textdes">Description
            <textarea id="description" style="border-radius: 3px;" name="description" placeholder="Give Some info about the issue" rows="5"></textarea></label><br>
        <label id="depart">Department
            <select name="departments" id="slct3">
                <option>ERC - 1 (1-52)</option>
                <option>ERC - 2 (53-90)</option>
                <option>Admin</option>
                <option>H.R.</option>
                <option>Back Office</option>
                <option>MIS</option>
                <option>IT</option>
            </select></label>
        <br>
        <label id="sno"> Seat Number</label>
        <input id="seat" type="number" placeholder=" SN" style="text-align: center;  border-radius: 3px; margin-left: 165rem; margin-top: -4rem; width: 10rem; height: 3rem ; font-weight: bold; font-size: 2rem;" name="Sno">

        <input type="hidden" value="Pending" name="hidden" placeholder="Pending" id="hidden">

        <button name="submit" id="submit" value="submit" type="submit">Submit</button>




    </form>


    <!-- <script     defer src="notification.js"></script> -->
</body>
<script>
    $('#slct1').on('change', function() {
        console.log(problem_id);
        var problem_id = this.value;

        $.ajax({
            url: 'ajax/p_cat_id.php',
            type: "POST",
            data: {
                problem_id: problem_id


            },
            success: function(result) {
                $('#slct2').html(result);
                console.log(result);
            }
        })
    });
</script>


<?php

$query = "select * from p_details where user_id = '$_SESSION[username]' and remark = 'pending'";

// echo $query;
$result = mysqli_query($conn, $query);

?>



<table border="1px" style="word-wrap: break-word; text-align: center; width: 100rem; margin-right: auto; margin-left: auto; margin-top: 20pt; font-size: 1.8rem;">
    <tr>


        <th>Ticket ID</th>
        <th>Department</th>
        <th>Seat No.</th>
        <th>Problem</th>
        <th>Details</th>
        <th>Problem-Date</th>
        <th>Assigned Engineer </th>
        <th>Status</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) {  ?>
        <tr>

            <td><?php echo $row['ticket_id']; ?></td>
            <td><?php echo $row['department']; ?></td>
            <td><?php echo $row['seat_number']; ?></td>
            <td><?php echo $row['p_cat_id']; ?></td>
            <td><?php echo $row['pro_details']; ?></td>
            <td><?php echo $row['issue_date']; ?></td>
            <td><?php echo $row['assign_id']; ?></td>
            <td><?php echo $row['remark']; ?></td>
        </tr>





    <?php }   ?>
</table>

</html>