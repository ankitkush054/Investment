

<?php 

include "conn.php"; 



    $user_id = $_GET['id'];
   

    $query = " DELETE FROM `card` WHERE id = '$user_id'";

     $result =mysqli_query($con,$query);

  
    if($result == TRUE)
    {
       // unlink("upload/".$img);
       echo "data delete";
      echo "<script>alert('Data Deleted Sucessfully')</script>";
      ?>
      <META http-equiv="Refresh" content="0; url=http://localhost/investment/admin/card.php">
      <?php
     
     
    }
    else
    {
    
    echo "error ";
    }


?>





