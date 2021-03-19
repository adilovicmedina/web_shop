<?php
        require("adminBase.php");
        require("include/header.html");


       
        $product= ($_GET['naziv'])?? '';
        $podaci = $base->getProducts($product);
        
        echo "<div>";
        echo "<a href='change.php' class='c1'>DODAJ PARFEM</a>";
        echo "</div>";
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Naziv</th>";
        echo "<th>Opis</th>";
        echo "<th>Cena</th>";
        // echo "<th>Slika</th>";
        echo "<th>Kategorija</th>";
        echo "<th>Kolicina</th>";
        echo "<th>Popust</th>";
        echo "<th colspan=2>Dodatak</th>";

        echo "</tr>";
        foreach($podaci as $red){
            echo "<tr>";
            echo "<td>".$red['naziv']."</td>";
            echo "<td>".$red['opis']."</td>";
            echo "<td>".$red['cena']."</td>";
            // echo "<td>".$red['slika']."</td>";
            echo "<td>".$red['kategorija']."</td>";
            echo "<td>".$red['kolicina']."</td>";
            echo "<td>".$red['popust']."</td>";
           

            echo "<td><a href='change.php?id=".$red['id']."'>PROMENI</a></td>";
            echo "<td><a href='admin_f.php?sta=delete&id=".$red['id']."'>OBRIŠI</a></td>";
            echo "</tr>";
        }
        
        ?>