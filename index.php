<?php
// include("header2.html");
// include("css/css2/style.css")
include_once("header.html")
?>
<div class="container311" id="invest">
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
                  <img src="<?php echo "admin/upload/".$row['card_img'];?>" alt="Investment Image 1">
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
<br>

<div class="container4 ">
    <a href="investment_opportunity.php" class="btn-xl1">View All </a>
</div>
<br>
<br>
<br>
<br>
    <div class="container32" id="about">
       
        
        <div class="text-section1">
            <h1>Looking to raise capital for your growing business?</h1>
            <p>Whether expanding or opening a brand-new concept, we make it easy to raise money from thousands of local investors.</p>
            <button>APPLY ONLINE</button>
        </div>
        <div class="image-section">
            <img src="images/2.svg" alt="Person watering a money plant">
        </div>
    </div>
    <div class="container22">
        <div class="text-section">
            <div class="icon"><img src="images/Subtract.svg"></div>
            <h1>$7M+ paid out to investors</h1>
            <p>Next Invest has already paid out over $7M in cash returns to investors. Earn potential cash payments through unique revenue-share and debt financing investments.</p>
        </div>
        <div class="graph-section">
            <img src="images/16.svg" alt="Investment Returns Graph" class="graph">
            <br>
            <br>

</div>
<div>
    <div>
        <img src="images/14.svg" alt="" class="img1">
    </div>
    <div>
                <img src="images/15.svg" alt="Investment Returns Graph" class="img2"  > 

        </div>
    </div>
</div>



    <?php
    include_once("footer.html")
    ?>