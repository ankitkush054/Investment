<?php
include "conn.php";
include_once 'header.php';


$sql = "select * from login";
$result=mysqli_query($con,$sql);

?>







<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap');

   

    /* CSS for header */
    .header1 {
      display: flex;
      height: 10%;
      color:black;
      font-weight:200%;
      justify-content: space-between;
      align-items: center;
      background-color:#990f02;
      box-shadow: 0 5px 30px rgba(75, 75, 75, 0.6);

transition: 0.5s;
    }

    .header .logo {
      font-size: 25px;
      font-family: 'Sriracha', cursive;
      color: #ffff;
      text-decoration: none;
      margin-left: 30px;
    }

    .nav-items {
      display: flex;
      justify-content: space-around;
      align-items: center;
      background-color: #990f02;
      margin-right: 20px;
    }

    .nav-items a {
      text-decoration: none;
      color: #ffff;
      padding: 35px 20px;
    }


    /* CSS for footer */
    .footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #302f49;
      padding: 40px 80px;
    }

    .footer .copy {
      color: #fff;
    }

    .bottom-links {
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding: 40px 0;
    }

    .bottom-links .links {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 0 40px;
    }

    .bottom-links .links span {
      font-size: 20px;
      color: #fff;
      text-transform: uppercase;
      margin: 10px 0;
    }

    .bottom-links .links a {
      text-decoration: none;
      color: #a1a1a1;
      padding: 10px 20px;
    }

    body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.bt{
  background-color: #A32CC4;
  color: white;
  padding: 8px 14px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
}

.frm
{

margin-top:35px; 
   box-shadow: 0 5px 30px rgba(75, 75, 75, 0.6);

 transition: 0.5s;
}


.bt:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

  </style>
</head>
<body >
<header class="header1">

    <a href="#" class="logo">User data table</a>
    <!-- <nav class="nav-items">
      <a href="create.php">Home</a>
      <a href="view.php">View</a>
      <a href="update.php">Update</a>
      <a href="delete.php">Delete</a>
      <a href="logout.php">Logout</a>
    </nav> -->
  </header>
  <main  >



  <form class="frm mer" style="margin-bottom:80px;">
<div class="container p-3 my-5 bg-light border border-primary" >
<h2>User Data Tabels</h2>
        <!-- DataTable Code starts -->
        <table id="example" class="table table-striped nowrap frm" style="width:100% " >
            <thead>
                <tr>
                    <th>Login_id</th>
                    <th>user name</th>
                    <th>Number</th>
                    <th>Email</th>
                    <th>password</th>
                    
                    <th>Delete</th>
                   
                </tr>
            </thead>
            <tbody>
            <?php

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

?>

        <tr>

        <td><?php echo $row['id']; ?></td>

        <td><?php echo $row['name']; ?></td>

        
        <td><?php echo $row['phone']; ?></td>
        
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['pass']; ?></td>
       


       


        <td>
          <!-- <form action="delete_user.php" method="post"> -->
        <a href="delete_user.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
       <!-- </form> -->
      </td>
         </tr>                       

<?php       }

}

?>                
            </tbody>
        </table>
    </div>
    </form>
</body>
</html>
