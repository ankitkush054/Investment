<?php
session_start();

include "conn.php";


if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // $query="SELECT * from `login` WHERE `email`=$email and `password`=$pass";
    $que="SELECT * FROM login WHERE email='$email' and pass='$pass'";
   $res=mysqli_query($con,$que);

   if($res->num_rows > 0) {
    $row = $res->fetch_assoc();
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['number'] = $row['phone'];
        $_SESSION['role'] = $row['role'];
        if($row['role'] == 1) {
            header('Location: admin/index.php');
        } else {
            header('Location: index.php');
        }
      }

    // if($row=mysqli_num_rows($res) > 0)

    // {
    //   $_SESSION["id"]=$row['id'];
    //   $_SESSION["name"]=$row['name'];
    //   $_SESSION["phone"]=$row['phone_no'];
    //   $_SESSION["email"]=$row['email'];
    //   header('location:index.php');
    // }
    else
    {
      echo "<script>alert('Wrong email and password');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login for Next Investment</title>
  <link rel="stylesheet" href="css/style2.css">
</head>
<body>
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Login</header>
      <form action="" method="POST">
        <input type="text" placeholder="Enter your email" name="email" required>
        <input type="password" placeholder="Enter your password" name="pass" required>
        <a href="#">Forgot password?</a>
        <input type="submit" class="button" name="submit" value="submit">
      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
         <a href="register.php"><label>Signup</label></a>
        </span>
      </div>
    </div>
  </div>
</body>
</html>
