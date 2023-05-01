<?php
session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
  $user_name = $_POST['email'];
  $password = $_POST['password'];

  if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
  {
    //save to database
    $query = "select * from userslogged where user_name = '$user_name' limit 1";
		$result = mysqli_query($con, $query);

    if($result)
    {
      if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            if($user_data['password'] == $password)
            {
              $_SESSION['user_id'] = $user_data['user_id'];
              header("Location: index.php");
              die;
            }
        }
    }

  }
  else{
    echo "Please enter some some valid information!";
  }
  
}

?>

<html>
  <head>
    <title>Login</title>
    <link href="../static/css/login.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="container">
      <form action="#" method="post">
        <h1>Login</h1>
        <label for="email">Username:</label>
        <br>
        <input type="text" id="email" name="email" required>
        <br><br>
        <label for="password">Password:</label>
        <br>
        <input type="password" id="password" name="password" required>
        <br><br>
        <input type="submit" value="Login"> <br><br>
        <a href="signup.php">Click to Signup</a><br><br>
      </form>
    </div>
  </body>
</html>
