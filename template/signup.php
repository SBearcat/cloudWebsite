<?php
session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
  $user_name = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];

  if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
  {
    //save to database
    $user_id = random_num(20);
    $query = "insert into userslogged (user_name, password, email, user_id) values ('$user_name', '$password', '$email','$user_id')";

    mysqli_query($con, $query);

    header("Location: login.php");
    die;
  }
  else{
    echo "Please enter some some valid information!";
  }
  
}

?>

<html>
  <head>
    <title>Signup</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
  </head>
  <body>
    <div class="container">
      <form action="#" method="post">
        <h1>Sign Up</h1>
        <label for="username">Create Username:</label>
        <br>
        <input type="text" id="username" name="username" required>
        <br><br>
        <label for="email">Enter Email:</label>
        <br>
        <input type="text" id="email" name="email" required>
        <br><br>
        <label for="password">Password:</label>
        <br>
        <input type="password" id="password" name="password" required>
        <br><br>
        <input type="submit" value="Signup"><br><br>

        <a href="login.php">Click to Login</a><br><br>
      </form>
    </div>
  </body>
</html>