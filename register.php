<?php

// starting the session 
// session_start(); 
	

	// Creating a session with name 
	// if(isset($_POST['Submit'])) 
	// { 
  //   $nameErr = $emailErr = $genderErr = $websiteErr = "";
  //   $name = $email = $gender = $comment = $website = "";
    
  //   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
  //     if (empty($_POST["email"])) {
  //       $emailErr = "Email is required";
  //     } else {
  //       $email = test_input($_POST["email"]);
  //       // check if e-mail address is well-formed
  //       if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  //         $emailErr = "Invalid email format";
  //       }
  //     }
        
  //   function test_input($data) {
  //     $data = trim($data);
  //     $data = stripslashes($data);
  //     $data = htmlspecialchars($data);
  //     return $data;
  //   }
	// 	$_SESSION["pass"]=$_POST["pass"]; 

		// echo "Session is created !!"; 
// 	} 
// }
	
	


?>

<?php
include 'conn.php';
if(isset($_POST['submit']))
{
      $name= $_POST['name'];
      $number=$_POST['number'];
      $email=$_POST['email'];
      $pass=$_POST['pass'];

    // Example usage
    //$text = "example_text";
    // $hash = generateHash($text);

    $em_ch="select * from login where `email`='$email'";
    $result=mysqli_query($con,$em_ch);

    if($result)
    {
      if(mysqli_num_rows($result) > 0)
      {
        $row=mysqli_fetch_assoc($result);
        if($row['email']==$email)
        {
          echo "<script>alert('email already exits');</script>";
          // header("Location:register.php");
        }
      }
        else{
          $insert="INSERT INTO `login`(`id`, `name`, `phone`, `email`, `pass`) VALUES (null ,'$name','$number','$email','$pass')";
          $res=mysqli_query($con,$insert);
          if($res)
          {
            // echo "<script>alert('Registration Success');</script>";
            header("Location:login.php");
          }
          else
          {
            echo "<script>alert('Registration not Success');</script>"; 
            // header("Location:register.php");
          }
        }
      }
    
    
  }
?>


<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration or Sign Up for Next Investment </title>
    <!-- <link rel="stylesheet" href="css/style3.css"> -->
     <link rel="stylesheet" href="css/style3.css">
   </head>
<body>
  <div class="wrapper">
    <h2>Registration</h2>
    <form action="#" method="post">
      <div class="input-box">
        <input type="text" placeholder="Enter your name" name="name" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your phone number" name="number" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your email" name="email" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Create password"  name="pass" required>
      </div>
      <div class="input-box button">
        <a href="index.php">
        <input type="Submit" name="submit" value="Register Now"></a>
      </div>
      <div class="text">
        <h3>Already have an account? <a href="login.php">Login now</a></h3>
      </div>
    </form>
  </div>

</body>
</html>
