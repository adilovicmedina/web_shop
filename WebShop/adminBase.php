
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
</head>
<body>
<?php
     class Base{
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
        function real_escape_string($str){
            return $this->conn->real_escape_string($str);
        }
        function mistake(){
            return $this->conn->error;
        }
        function affected_rows(){
            return $this->conn->affected_rows;
        }
        function sql($sql){
            return $this->conn->query($sql);
        }

        function insert_product($naziv,$opis,$cena,$kategorija,$kolicina,$popust){
                return $this->sql("INSERT INTO proizvodi(naziv,opis,cena,kategorija,kolicina,popust) VALUES 
                ('$naziv','$opis',$cena,$kategorija,$kolicina,$popust)");
            }

         function insert_basket($name,$date,$product){
               return $this->sql("INSERT INTO korpa(ime_prezime,datum,id_proizvoda) VALUES ('$name','$date','$product')");
         }
            function update_product($id,$naziv,$opis,$cena,$kategorija,$kolicina){
                $naziv = $this->real_escape_string($naziv);
                $opis=$this->real_escape_string($opis);
                $cena = $this->real_escape_string($cena);
                // $slika = $this->real_escape_string($slika);
                $kategorija = $this->real_escape_string($kategorija);
                $kolicina = $this->real_escape_string($kolicina);

    
                return $this->sql("UPDATE proizvodi 
                SET naziv='$naziv', opis='$opis', cena='$cena', kategorija='$kategorija', kolicina=$kolicina
                WHERE id=$id");
            }

            function delete_product($id){
                $id = $this->real_escape_string($id);
                return $this->sql("DELETE FROM proizvodi WHERE id=$id");
            }
        
            function insert_id(){
                return $ind=$this->conn->insert_id;
                
            }
            function getProduct($id){
                    $podaci_baze = $this->sql("SELECT * FROM proizvodi WHERE id=$id");    
                    $podaci_baze->data_seek(0);
                    return $podaci_baze->fetch_assoc();
        }
   
        function getProducts($naziv=''){
            $sql = "SELECT * FROM proizvodi";
            if($naziv !== ''){
                $sql .= " WHERE naziv LIKE '%$naziv%'";
            }
            $podaci_baze = $this->sql($sql);    
            return $podaci_baze->fetch_all(MYSQLI_ASSOC);
    }

    function save($uku){

        $this->conn->autocommit(FALSE);  
        $t = $this->conn->query("INSERT INTO `korpe`(`id`, `datum_vreme`, `kolicina`) VALUES 
            (null, NOW(), $uku )");
        $id = $this->conn->insert_id;
        if(!$t){
            $this->conn->rollback();
            die("Nije upisano! ".$this->conn->error);
        }
        for($i=0; $i<count($_SESSION['stavke_korpe']); $i++){
            $t = $this->conn->query("INSERT INTO `stavke_korpe`
            (`id`, `korpa_id`, `proizvod_id`, `cena`, `kolicina`) VALUES 
            (null, $id, ".
            $_SESSION['stavke_korpe'][$i]['id'].", ".
            $_SESSION['stavke_korpe'][$i]['cena'].", ".
            $_SESSION['stavke_korpe'][$i]['kolicina'].") "
        );
            if(!$t){
                $this->conn->rollback();
                die("NEUSPESNO: $i".$this->conn->error);
            }
        }
            
        $this->conn->commit();
        $this->conn->autocommit(TRUE);

    }

    function product_1($id){
    $products = $this->conn->query("SELECT * FROM proizvodi WHERE id=$id");
    $p = $products->fetch_all(MYSQLI_ASSOC);
    return $p[0];
}

    function registration($ime,$sifra){
    $dodaj=$this->conn->query("INSERT INTO korisnici (ime,sifra) VALUES ('$ime', '$sifra')");

}

    function get_user_id($i,$s){
    $user = $this->conn->query("SELECT * FROM korisnici WHERE ime='$i' AND sifra='$s'");
    $u = $user->fetch_all(MYSQLI_ASSOC);
    if ($u)
        return $u[0]['id'];
    else
        return 0;
   
    
}


}

        $base = new Base();
        $base->connect();
      
        ?>
</body>
</html>

