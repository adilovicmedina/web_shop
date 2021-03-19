<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style2.css">
 
</head>
<body>
  
<footer>
    <?php
      function linkovi($s){
        echo "<ul class='lista'>";
          if ($s==1) 
            echo "<li>
            <a href='index.php'>POČETNA</a>
                  </li>";
          if ($s==2) 
            echo "<li>
            <a href='products.php'>PARFEMI</a>
                  </li>";
          if ($s==3) 
            echo "<li>
            <a href='basket.php'>KORPA</a>
              </li>";
          if ($s==4)
          echo "<li>
          <a href='men.php'>MUŠKI PARFEMI</a>
            </li>";
            if ($s==5)
            echo "<li>
            <a href='women.php'>ŽENSKI PARFEMI</a>
              </li>";
            // if ($s==6)
            // echo "<li><a href='admin.php'>ADMIN STRANICA</a></li>";

        echo "</ul>";
      }
    ?>
</footer>
    </body>
    </html>