<?php
// include("header2.html");
// include("css/css2/style.css")
include_once("header2.html")
?>


<div class="container311" id="invest">
  <br>
  <br>
  <br>
        <h1>Offerings open for investment</h1>
        <p>Explore pre-vetted investment opportunities available in a growing number of industry categories.</p>
</div>
<div class="container31">
        <?php
      include "conn.php";
      $q="select * from card";
      $re=mysqli_query($con,$q);
      
      if ($re->num_rows > 0) {
          
          while ($row = $re->fetch_assoc()) {
              
              ?>
              <div class=" investment-cards first-line">
            <div class="card">
              <div class="card2">
                  <img src="<?php echo "admin/upload/".$row['card_img'];?>" alt="Investment Image 1" class="image">
              <h1><?php echo $row['tag'];?></h1>
              
                <!-- <h1>Family Business</h1> -->
            </div>
                <h2><?php echo $row['title'];?></h2>
                <p><?php echo $row['location'];?></p>
                <p><?php echo $row['description'];?></p>
                <div class="progress-container"> <div class="progress-bar"></div> </div>
                <p>$<?php echo $row['get_price'];?>raised of $<?php echo $row['total_price'];?></p>
            </div>
            </div>
            
      
            
            <?php
   }}
   //    include "footer.html";
   ?>

</div>


<?php

include_once("footer.html");
?>