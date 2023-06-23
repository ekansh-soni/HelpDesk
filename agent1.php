<?php include('conn.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <title>welcome agent</title>
    <link rel="stylesheet" href="comp.css">

<body>
    <header class="agent">
        <h1 class="agent_header">Welcome to HelpDesk</h1>
        <!-- <input type="submit" value="Logout" class="logout_btn" formaction="logout.php"> -->
        <a href="logout.php" class="logout_btn">Logout</a>
        <input disabled name="name" id="an" class="agent_name" placeholder="<?php session_start(); echo $_SESSION['username'];  ?>">

    </header>   

    <aside class="agent_lside">
        <div class="agent_lside1">
            <h3 class="agent_lside1_data1">About problems</h3>
            <p>choose your problem</p>
        </div>

        <div class="agent_lside2">
            <h3 class="agent_lside1_data1"> problem info</h3>
            <p>provide your problem details</p>

        </div>


    </aside>

    <form action="agent_backend.php" method="post">
        <aside class="agent_rside">
            <div class="agent_rside1">
                <select class="agent_rside_element" name="slct1" id="slct1">
                    <?php
                    $query = "select * from problem_master";
                    $result = mysqli_query($conn, $query);
                    ?>
                    <option disabled selected hidden value="">Choose problem</option>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <option name="pc" style="text-transform: uppercase;" value="<?php echo $row['p_id']; ?>"><?php echo $row['p_category']; ?></option>
                    <?php  } ?>
                </select><br>
                <select class="agent_rside_element" name="slct2" id="slct2">
                    <option disabled selected hidden value="">Choose sub problem Domain</option>
                </select><br>
                <select class="agent_rside_element" name="departments" id="">
                    <option dis selected hidden value="">Department</option>
                    <option>ERC - 1 (1-52)</option>
                    <option>ERC - 2 (53-90)</option>
                    <option>Admin</option>
                    <option>H.R.</option>
                    <option>Back Office</option>
                    <option>MIS</option>
                    <option>IT</option>
                </select>
                <input  name="Sno" class="agent_rside_element" type="number" placeholder="seat number">
            </div>
            <div class="agent_textarea">
                <textarea class="agent_textarea" name="description" id="agent_textarea" placeholder="give some info about problem"></textarea>
            </div>
            <div class="submit_btn">
                <input type="submit" name="" id="submit_btn" value="submit">
            </div>
        </aside>
    </form>
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


</html>

