<!DOCTYPE html>
<html>

<head>
  <title>Login form</title>
  <link rel="stylesheet" href="login.css" type="text/css">
</head>
<style>
  header {
    background-color: black;
    height: 2rem;
    opacity: 0.7;
  }

  #check {
    font-size: 1.5rem;
    text-decoration: none;
    color: white;
    margin-left: 2rem;
    margin: 0, auto;
  }

  header:hover {
    opacity: 1.0;
  }
</style>

<body>
  <header>
  <!-- <a id="check" href="check.php">Check Status</a> -->


  </header>

  <div class="main">
    <video autoplay muted loop id="background-video">
      <source src="wvideo.mp4" type="video/mp4">
    </video>
    <div class="login">
      <h1>WELCOME TO TCIL</h1>
      <br>
      <form method="POST" action="cred.php">
        <Select name="category" id="category">
          <option>Agent</option>
          <option>Admin</option>
          <option>Supervisor</option>
        </Select>
        <br><br>
        <input type="text" class="username" id="username" name="username" placeholder="UserName">
        <br><br>
        <input type="password" class="password" id="password" name="password" placeholder="Password">
        <br><br>
        <input type="submit" class="login1" name="login" value="LOGIN">
      </form>
      <div>

        <!---end login--->
        <div>
          <!---end main--->

</body>

</html>