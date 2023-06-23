<!DOCTYPE html>
<html>
<title>SuperVisor</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>



   <style>
      * {
         padding: 0;
         margin: 0;

      }

      body {
         font-size: 10px;
      }

      #header {
         height: 7rem;
         text-align: center;
         max-width: 150rem;
         background-color: black;
         align-content: center;
         text-align: center;
         padding-top: 1rem;
      }

      img {
         float: left;
         max-width: 15rem;
         margin-left: 2rem;
      }

      .main1 {
         margin-left: 3rem;
         margin-top: 3rem;
         max-width: 500rem;
         align-content: center;

      }

      h2 {
         font-size: 4rem;
         color: white;
         margin-right: 9rem;


      }

      a {
         font-size: large;
         align-items: center;
         margin-top: 1rem;
         background-color: #D9D9D9;
         color: black;
         padding: 1rem 2rem;
         text-align: center;
         text-decoration: none;
         border-color: black;
         font-weight: bold;
         font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
         border-radius: 2rem;
      }

      .logout {
         float: right;
         margin-top: -3rem;
      }

      .buttons {
         margin: 0 auto;
         margin-top: 3rem;
         max-width: auto;
         display: flex;
         flex-direction: row;
         align-items: center;
         padding-left: 36rem;
         gap: 3rem;

      }

      .mid {
         max-width: 1300rem;
         display: block;
         margin: 0 auto;


      }

      #lside {
         border: 1px solid black;
         height: 37.5rem;
         position: absolute;
         width: 20rem;
         margin-top: 7.8rem;
         margin-left: 0.2rem;

      }
      .lside{
         padding-top: 3rem;
         
      }

      @media(max-width: 1000px) {
         body {
            max-width: 80vw;
         }

         .mid {
            margin-right: 2rem;


         }
      }
   </style>
</head>

<body>
   <form>
      <header id="header">

         <img src="Dayton.png" alt="logo of tcil" id="logo">
         <h2>Welcome SuperVisor :)
            <input disabled name="name" style="text-transform: uppercase;color: red;text-align: center;font-weight: bold;width: fit-content;height: 2.5rem;font-size: 1.1rem;border-radius: 20px;" id="name" placeholder="<?php session_start();
                                                                                                                                                                                                                           echo $_SESSION['username'];  ?>">
         </h2>



         <a class="logout" href="logout.php">Logout</a>


      </header>
      <div id="lside">
         <label><b style="color: black;"> Advanced feature </b></label> <br>
         <div class="lside" style="display: grid; ">
            <label><a href="user_info.php" target="supervisor_links">User Info</a></label><br>
            <label><a href="#deletequery.php">Delete Query</a></label><br>
            <label><a href="#truncate_table.php">Truncate Table</a></label><br>
         </div>


      </div>


      <div class="buttons">
         <label> <?php include("super_total_data.php"); ?></label>
         <label> <?php include("super_total_pending.php"); ?></label>
         <label> <?php include("super_total_solved.php"); ?></label>
      </div>

      <div class="main1">
         <iframe class="mid" name="supervisor_links" frameborder="1" width="1300rem" height="600rem" onclick="call"></iframe>
      </div>

   </form>
</body>

</html>