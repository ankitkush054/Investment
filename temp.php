<?php
include "header2.html";
?>

<!DOCTYPE html>
<html>
<head>
    <!-- <link rel="stylesheet" type="text/css" href="styles.css"> -->
    <!-- <iframe src="header2.html" width="600" height="400" title="Included Page"></iframe> -->
     <!-- <link rel="import" href="header2.html"> -->
     <!-- <link rel="import" href="css/style.css"> -->

    <style>.image-container {
        display: flex;
        align-items: center; 
         position: relative;
        top: 50px;
        width: 25%;
        
    }
    
    .image {
        display: block;
        /* position: fixed; */
        width: 100px;
         /* Set your desired image width */
        height: auto;
    }
    
    .details {
        visibility: hidden;
        opacity: 0;
        transition: opacity 0.5s ease;
        margin-left: 10px; /* Adjust space between image and details */
    }
    
    .image-container:hover .details {
        visibility: visible;
        opacity: 1;
    }
    </style>
</head>
<body>
    
    <div class=" container image-container">
        <div>
        <img src="images/download (2).png" alt="Description" class="image">
       
       
            <h1>Oxalis</h1>
            <p>Brooklyn</p>
            <p>A recognized leader in language immersion & early education, opening second school.</p>
            <div class="progress-container"> <div class="progress-bar"></div> </div>
            <p>$574,920raised of $1,000,000</p>
</div>
         <div class="details"> 
            <h1>Oxalis</h1>
            <p>Brooklyn</p>
            <p>A recognized leader in language immersion & early education, opening second school.</p>
            <div class="progress-container"> <div class="progress-bar"></div> </div>
            <p>$574,920raised of $1,000,000</p>
                <hr>
                <table>
                    <tr>
                        <td>Security Type</td>
                        <td> Revenue Sharing type </td>
                    </tr>
                    <tr>
                        <td>Investment Multiple</td>
                        <td> 1.4x</td>
                    </tr>
                    <tr>
                        <td>Maturity</td>
                        <td> 48 Months </td>
                    </tr>
                    <tr>
                        <td>Min. Investment</td>
                        <td> $100 </td>
                        </tr>
</table>




</div>
<!-- </div> -->
</body>
</html>
