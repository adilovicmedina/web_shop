

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style2.css"> -->
    
</head>
<body>


<?php
      class Product{
        private $conn;
        public $greska;

        function connect(){
            $this->conn = new mysqli("localhost", "root", "", "web_shop");

            if($this->conn->connect_error){
                $this->greska = $this->conn->connect_error;
                return false;
            }
            $this->conn->set_charset("utf8");
            return true;
        }
        
        function sql($sql){
            return $this->conn->query($sql);
        }

        function write(){
            $sql="SELECT * FROM proizvodi";    
            $podaci_baze=$this->sql($sql);
            $podaci=$podaci_baze->fetch_all(MYSQLI_ASSOC);
            foreach($podaci as $red){
                echo "<div class='proizvod'>";
                echo "<div class='slika' style='background-image:url(\"".$red['slika']."\")'/></div>";
                echo "<h3>".$red['naziv']."</h3>";
                echo "<p class='center'>";
                echo "<a href='details.php?id=".$red['id']."' target='_self'>DETALJNIJE</a>";
                echo  "</p>
                        </div>
                    </div>";
                }
        }
        function write_m_w($kategorija){
            $sql = "SELECT * FROM proizvodi";
            $sql .= " WHERE kategorija='$kategorija'";
            $podaci_baze = $this->sql($sql);    
            $podaci=$podaci_baze->fetch_all(MYSQLI_ASSOC);
            foreach($podaci as $red){
                echo "<div class='proizvod'>";
                echo "<div class='slika' style='background-image:url(\"".$red['slika']."\")'/></div>";
                echo "<h3>".$red['naziv']."</h3>";
                echo "<div class='center'>";
                echo "<a href='details.php?id=".$red['id']."' target='_self'>DETALJNIJE</a>";
                echo  "</div>
                        </div>
                    </div>";
                }
        }

       

        function write_one($id){
            $podaci_baze = $this->sql("SELECT * FROM proizvodi WHERE id=$id");    
            $podaci_baze->data_seek(0);
            $podaci=$podaci_baze->fetch_all(MYSQLI_ASSOC);
            foreach($podaci as $red){
                if ($id==7 || $id==8 || $id==9 || $id==10){
                   echo "<div class='proizvod h'>";
                   echo "<div class='slika' style='background-image:url(\"".$red['slika']."\")'/></div>";
                   echo "<h3>".$red['naziv']."</h3>";
                   echo "<p class='p'>".$red['opis']."</p>";
                   echo "<p class='old'>Stara cena:".$red['cena']."rsd</p>";
                   echo "<p class='c'> Cena na sniženju: ".$red['popust']."rsd</p>";
                   ?>
                   <form action="buy.php" class="form" method="GET">
                       <input type="hidden" value="<?=$red['id']?>" name="id" />
                       <input type="submit" class='button1' value="KUPI ODMAH" />
                   </form>
                   <?php
                  echo " </div>
                   </div>";
                }else{
                    echo "<div class='proizvod h'>";
                    echo "<div class='slika' style='background-image:url(\"".$red['slika']."\")'/></div>";
                    echo "<h3>".$red['naziv']."</h3>";
                    echo "<p class='p'>".$red['opis']."</p>";
                    echo "<p class='c'>Cena:".$red['cena']."rsd</p>";
                    ?>
                <form action="buy.php" class="form" method="GET">
                    <input type="hidden" value="<?=$red['id']?>" name="id" />
                    <input type="submit" class='button1' value="KUPI ODMAH" />
                </form>
                <?php
                   echo "</div>
                    </div>";
                   }

               
               }
            }

            function getProduct($id){
                $podaci_baze = $this->sql("SELECT * FROM proizvodi WHERE id=$id");    
                $podaci_baze->data_seek(0);
                return $podaci_baze->fetch_assoc();
    }

            

        
    }


     
    
        $product = new Product();
        $product->connect();
?>

</body>
</html>