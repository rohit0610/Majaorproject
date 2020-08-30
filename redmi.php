<?php
session_start();
?>
<html>
    <head>
          <title>WhatsYourMobile</title>
          <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"  >
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
    <script src="bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
        <link href="css2.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
        include'header.php';
        ?>
        <div class="container">
            <div class="jumbotron">
                <center>  <h2>REDMI</h2></center>
            
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img class="img-responsive" src="img/redmi/y3.jpg" alt="Xiaomi Redmi Y3">
                        <div class="caption">
                            <a href="redmi_y3.php" style="text-decoration: none;">Xiaomi Redmi Y3</a>
                        </div>   
                    </div>
                    
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img class="img-responsive" src="img/redmi/note7pro.jpg" alt="Xiaomi Redmi Note 7 Pro">
                        <div class="caption">
                            <a href="redmi_note_7_pro.php" style="text-decoration: none;">Xiaomi Redmi Note 7 Pro</a>
                        </div>   
                    </div>
                 </div>
                
            </div>
        <br><br><br><br>  
        <?php
        include 'footer.php';
        ?>
    </body>
</html>