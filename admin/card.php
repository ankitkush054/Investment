<?php
include_once "header.php";
include "conn.php";
if(isset($_POST['submit']))
{
$img=$_FILES['img']['name'];  
// $name=$_POST['name'];
$tag=$_POST['tag'];
$title=$_POST['title'];
$location=$_POST['location'];
$dis=$_POST['dis'];
$total=$_POST['total'];
$get=$_POST['get'];
$security=$_POST['security'];
$invest=$_POST['invest'];
$maturity=$_POST['maturity'];
$min=$_POST['min'];



$allowed_exttension = array('gif','png','jpg','jpeg','avif','webp','raw','weps','heif','tiff','svg');
$filename = $_FILES['img']['name']; 
$file_extension = pathinfo($filename, PATHINFO_EXTENSION);
if(!in_array($file_extension, $allowed_exttension))
{

  echo "<script>alert('you are allowed with only jpg jpeg png and gif')</script>";
  ?>
<META http-equiv="Refresh" content="0; url=http://localhost/investment/admin/card.php">
<?php

}

else
{






if(file_exists("upload/" . $_FILES['img']['name'] ))
{
    $filename = $_FILES['img']['name'];
    echo "<script>alert('Image Already exists')</script>";
    ?>
  <META http-equiv="Refresh" content="0; url=http://localhost/investment/admin/card.php">
  <?php
}

else
{




//$query="INSERT INTO `places`(`place_id`, `place_name`, `place_discription`, `status`,  `place_img`, `place_country`) VALUES (null, '$name','$dis','$st','$img','$country')";
$query="INSERT INTO `card`(`id`, `tag`, `card_img`, `title`, `location`, `description`, `total_price`, `get_price`, `security_type`, `investment`, `maturity`, `min_invest`) VALUES(Null,'$tag','$img','$title','$location','$dis','$total','$get','$security','$invest','$maturity','$min')";
$res=mysqli_query($con,$query);
if($res)
{
  move_uploaded_file($_FILES['img']["tmp_name"], "upload/".$_FILES['img']["name"]);
  echo "<script>alert('Data Insert Sucessfully')</script>";
  ?>
  <META http-equiv="Refresh" content="0; url=http://localhost/investment/admin/card.php">
  <?php
  
}
else
{


}


}
}
}

$sql = "select * from `card`";
$result=mysqli_query($con,$sql);


?>



<!DOCTYPE html>
<html>
<head>
<!-- <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha3/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css"> -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    /* @import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap'); */

   		
@media screen and (min-width: 10%) {


    /* CSS for header */
    .header {
      display: flex;
      /* justify-content: space-between; */
      align-items: left;
      background-color:;
      box-shadow: ;
      font-size :200%;
      
      /* text-align:center; */

transition: 0.5s;
    }

    .header .logo {
      font-size: 25px;
      font-family: 'Sriracha', cursive;
      color: ;
      text-decoration: none;
      margin-left: 85px;
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
      margin-top:33px;
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
  background-color: blue;
  color: white;
  padding: 8px 14px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
  height:30%;
}

.frm
{

margin-top:35 px; 
   box-shadow: 0 5px 30px rgba(75, 75, 75, 0.6);
font-size:180%;
 transition: 0.5s;
}

.frm1
{

margin-top:35 px; 
   box-shadow: 0 5px 30px rgba(75, 75, 75, 0.6);
/* font-size:200%; */
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

.mer
{

  margin-top:33px;
}
}
  </style>
</head>
<body >
<!-- <header class="header"><h1>Places form</h1>
  
      
  </header> -->
  <main  >


<form  method="post" class="frm" style="margin-top:80px;" enctype="multipart/form-data">
  
<h2 style="margin-left:433px; margin-top:12px;"><b> Card Insert</b></h2>
  <div class="container"><table   colspan="12" cellpadding="7" align="center">

  <tr>
  <div class="mb-3">
  <label for="formFile" class="form-label">card image</label>
  <input class="form-control" name="img"  accept="image/*" type="file" id="formFile">
</div>
    </tr><br>

    <tr>
    <div class="mb-3">
    <label for="formFile" class="form-label">Tag</label>
    <input type="text" placeholder="Enter Tag" class="form-control" name="tag" required> </td>
    </div>
    </tr>

    <tr>
    <div class="mb-3">
    <label for="formFile" class="form-label">Title</label>
    <input type="text" placeholder="Enter Title" class="form-control" name="title" required> </td>
    </div>
    </tr>

    <tr>
    <div class="mb-3">
    <label for="formFile" class="form-label">Location</label>
    <input type="text" placeholder="Enter Location name" class="form-control" name="location" required> </td>
    </div>
    </tr>

    <tr>
    <div class="mb-3">
    <label for="formFile" class="form-label"> discription</label>
    <input type="text" class="form-control" placeholder="Enter  discription" name="dis" required></td>
    </div>
    </tr>
    <tr>
    <div class="mb-3">
    <label for="formFile" class="form-label"> Total Price</label>
    <input type="text" class="form-control" placeholder="Enter  Total Price" name="total" required></td>
    </div>
    </tr>
    <tr>
    <div class="mb-3">
    <label for="formFile" class="form-label"> Get Price</label>
    <input type="text" class="form-control" placeholder="Enter  Get Price" name="get" required></td>
    </div>
    </tr>
    <tr>
    <div class="mb-3">
    <label for="formFile" class="form-label"> Security Type</label>
    <input type="text" class="form-control" placeholder="Enter  Security Type" name="security" required></td>
    </div>
    </tr>
    <tr>
    <div class="mb-3">
    <label for="formFile" class="form-label"> Invest Multiple</label>
    <input type="text" class="form-control" placeholder="Enter  Invest multiple" name="invest" required></td>
    </div>
    </tr>
    <tr>
    <div class="mb-3">
    <label for="formFile" class="form-label"> Maturity</label>
    <input type="text" class="form-control" placeholder="Enter  Maturity" name="maturity" required></td>
    </div>
    </tr>
    <tr>
    <div class="mb-3">
    <label for="formFile" class="form-label"> Min. Investment</label>
    <input type="text" class="form-control" placeholder="Enter  Min Investment" name="min" required></td>
    </div>
    </tr>

<!--     
        <tr>
        <div class="mb-3">
        <label for="formFile" class="form-label">Status</label>
        <input type="boolen" class="form-control" placeholder="status" name="status" required></td>
        </div>
        </tr>
     -->
     

  <tr><td>
  <div class="mb-3">
  
    <input class="btn btn-primary"  style="width:240%; border:none; font-size:155%; background-color:#A32CC4; margin-left:-140%; " class="form-control" type="submit" value="submit" name="submit"></td>
    </div>
  </tr>     
    </div>
 
    </table>
 
  </div>
</form>


<form class="frm1 mer" style="margin-bottom:80px;">
<div class="container p-3 my-5 bg-light border border-primary" >
<h2>Card Details Tabels</h2>
        <!-- DataTable Code starts -->
        <table id="example" class="table table-striped nowrap frm" style="width:90% " >
            <thead>
                <tr>
                    <th>id</th>
                    <th>Tag</th>
                    <th>Title</th>
                    <th>Location</th>
                    <th style="width:40%;">Discription</th>
                    <th>Total Price</th>
                    <th>Get Price</th>
                    <th>Security Type</th>
                    <th>Investment Multiple</th>
                    <th>Maturity</th>
                    <th>Min. Invest</th>
                   
                    <!-- <th>status </th> -->
                    <th>image</th>
                    
                    <th>Update</th>
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

        <td><?php echo $row['tag']; ?></td>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['location']; ?></td>
        <td><?php echo $row['description']; ?></td>
        <td><?php echo $row['total_price']; ?></td>
        <td><?php echo $row['get_price']; ?></td>
        <td><?php echo $row['security_type']; ?></td>
        <td><?php echo $row['investment']; ?></td>
        <td><?php echo $row['maturity']; ?></td>
        <td><?php echo $row['min_invest']; ?></td>

        <td><img src="<?php echo "upload/".$row['card_img']; ?>" width="60%"></td>
        
        <!-- <td><?php //echo $row['status']; ?></td> -->

        




        <td><a href="update_card.php?id=<?php echo $row['id'];?>" class="btn btn-info">Update</a></td>
       

       <td>
       
        <a href="delete_card.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>

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
