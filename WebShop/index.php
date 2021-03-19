
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MID's secret</title>
    <link rel = "icon" href =  "photos/parf1.png" 
        type = "image/x-icon"> 
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Inconsolata:wght@300;500&family=Zilla+Slab:wght@300;400;600&display=swap');
    </style>
</head>
<body>
<?php
require("base.php");
?>

    <div class="header">
    <div class="container">
        <div class="menu">
            <div class="logo">
                <img src="photos/logo5.png" width="200px">
            </div>
            <nav class="back">
                <ul>
                    <li><a href="index.php">Početna</a>
                    </li>
                    <li>
                        <a href="products.php" target="_self">Parfemi</a>
                        <div class="sub-menu">
                            <ul>
                                <li><a href="men.php" target="_self">Muški parfemi</a></li>
                                <li><a href="women.php" target="_self">Ženski parfemi</a></li>
                   
                             </ul>
                    </div>
                    </li>
                    <li><a href="about.php" target="_self">O nama</a>
                    </li>
                    <li><a href="contact.php" target="_self">Kontakt</a>
                    </li>
                    <li><a href="logIn.php" target="_self">Prijavi se</a>
                    </li>
                    <li><a href="signUp.php" target="_self">Registruj se</a></li>
                


                </ul>
            </nav>
            <a href="basket_table.php" target="_self"><img src="photos/basket.jpeg" alt="image" id="basket"/></a>
        </div>
        <div class="row">
            <div class="col1">
                <h1>SVET PARFEMA</h1>
                <p>
                    Parfem otvara beskrajne horizonte. On godi i osetima i mašti. Poput čarolije deluje na instinktivnoj razini, a istovremeno je krajnje suptilan. <br> Nino Cerruti
                </p>
                <a href="details.php?id=11" class='button' target="_self">PRONAĐI <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            <div class="col1">
                <img src="photos/one4.png" alt="image">

            </div>
        </div>
    </div>
</div>

<!-- kategorije -->

<h2 id="center">Naši predlozi</h2>
<div id="slider">
            <figure>
                <a href="details.php?id=6" target="_self"><img src="photos/coco2.png" alt="image"/>
                </a>
                <a href="details.php?id=1" target="_self"><img src="photos/sauvage.png" alt="image"/></a>
                <a href="details.php?id=6" target="_self"><img src="photos/coco2.png" alt="image"/></a>
                <a href="details.php?id=1" target="_self"><img src="photos/sauvage.png" alt="image"/></a>
                <a href="details.php?id=6" target="_self"><img src="photos/coco2.png" alt="image"/></a>



            </figure>
     </div>



<!-- istakuto -->
<?php
    $p=$product->getProduct(7);
?>

<div class="small-container">
    <h2 id="center">Istaknuti proizvodi</h2>
    <div class="row">
        <div class="col2">
        <img src="photos/set1.png" alt="image"/>
        <h4><a href="details.php?id=7">
            <!-- Versace Eros set  -->
            <?php
            echo $p['naziv'];
            ?>
        </a></h4>
        <div class="star">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </div>
        <p class="old">
            <!-- 8.090rsd -->
            <?php
        echo $p['cena']."rsd";
        ?>
        </p>
        <p id="red">
        <?php
        echo $p['popust']."rsd";
        ?>
            <!-- 5.663rsd -->
        </p>
    </div>

<div class="col2">
    <img src="photos/set2.png" alt="image"/>
    <h4><a href="details.php?id=8">
        <!-- Dolce&Gabbana Light Blue Pour Femme set -->
    <?php
    $p1=$product->getProduct(8);
    echo $p1['naziv'];
    ?>
    </a></h4>
    <div class="star">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
        
    </div>   
    <p class="old">
        <!-- 9.090rsd -->
        <?php
        echo $p1['cena']."rsd";
        ?>
    </p>
    <p id="red">
    <?php
        echo $p1['popust']."rsd";
        ?>
        <!-- 5.990rsd -->
    </p>  
</div>
<div class="col2">
    <img src="photos/set3.png" alt="image"/>
    <h4><a href="details.php?id=9">
        <!-- Dolce&Gabbana The One set -->
        <?php
    $p2=$product->getProduct(9);
    echo $p2['naziv'];
    ?>
    </a></h4>
    <div class="star">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
    </div>
    
    <p class="old">
        <!-- 12.390rsd -->
        <?php
        echo $p2['cena']."rsd";
        ?>
    </p>
    <p id="red">
        <!-- 7.990rsd -->
        <?php
        echo $p2['popust']."rsd";
        ?>
    </p> 
</div>
<div class="col2">
    <img src="photos/set4.png" alt="image"/>
    <h4><a href="details.php?id=10" target="_self">
        <!-- Laura Biagiotti Romamor set -->
        <?php
    $p3=$product->getProduct(10);
    echo $p3['naziv'];
    ?>
    
    </a></h4>
    <div class="star">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o"></i>
    </div>
    <p class="old">
        <!-- 8.490rsd -->
        <?php
        echo $p3['cena']."rsd";
        ?>
    </p>
    <p id="red">
    <?php
        echo $p3['popust']."rsd";
        ?>
        <!-- 4.245rsd -->
    </p>
</div>
   
</div>

<!-- offer -->

<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col1">
                <img src="photos/trussardi.png" alt="image" class="offer-image">
            </div>
            <div class="col1">
                <p>Ekskluzivna ponuda</p>
                <?php
                    $p4=$product->getProduct(2);
                ?>
                <h1>
                    <!-- Trussardi Uomo -->
                    <?php
                        echo $p4['naziv'];
                    ?>
                </h1>
                <small>
                    Novi Trussardi Uomo miris izražava sofisticiranu eleganciju. Moćne gornje note su italijanska mešavina limuna i bergamota, u kombinaciji sa galbanumom koji prelazi u srce sačinjeno od ljubičice i geranijuma. Muskatna žalfija pruža notu sofisticiranosti koja je pojačana luksuznom kožom i opojnim pačulijem. Ovaj izvanredan akord pruža mirisu ličnost i toplinu. Sirovine najvišeg kvaliteta (prirodni orpur sastojci) izazivaju osećaj samopouzdanja. Miris je izuzetan poput Trussardi-ja. Muževan, moderan miris koji se nosi sa stilom.Trussardi Uomo je suština uglađene muževnosti.
                    <p class="old">
                        <!-- 12.390rsd -->
                        <?php
                            echo $p4['cena']."rsd";
                        ?>
                    </p>
                    <p id = "red">
                    <?php
                            echo $p4['popust']."rsd";
                        ?>
                        <!-- 4.956rsd -->
                    </p>
                </small>
                <div>
                <a href="details.php?id=2" class='button'>POGLEDAJ <i class="fa fa-arrow-right" aria-hidden="true" target="_self"></i></a>
            </div>
            </div>

        </div>
    </div>
</div>

<!-- brands -->

<div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col3">
                <img src="photos/paypal.png" alt="image">
            </div>
            <div class="col3">
                <img src="photos/chanel.png" alt="image">
            </div>
            <div class="col3">
                <img src="photos/jasmin.png" alt="image">
            </div>
            <div class="col3">
                <img src="photos/pepsi.png" alt="image">
            </div>
            <div class="col3">
                <img src="photos/maxfactor.png" alt="image">
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<footer>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col1">
               <h3>Instalirajte aplikaciju</h3>
                <p>Instalirajte aplikaciju za Android i iOS mobilne uređaje</p>
                <div class="logo-app">
                    <a href="https://www.android.com/" target="_self"> <img src="photos/andr.png" alt="imagePlayStore"></a>
                    <a href="https://www.apple.com/" target="_self"><img src="photos/app.png" alt="imageAppStore"></a>
                </div>
            </div>
            <div class="footer-col2">
                <img src="photos/logo5.png" alt="image">
                <p>MID's secret</p>
            </div>
            <div class="footer-col3">
                <h3>Link</h3>
                 <ul>
                     <li>Kuponi</li>
                     <li>Blog</li>
                     <li>Politika povratka</li>

                 </ul>
             </div>
             <div class="footer-col4">
                <h3>Zapratite nas</h3>
                 <ul>
                     <li><a href="https://www.facebook.com/" target="_self">Facebook</a></li>
                     <li><a href="https://www.instagram.com/" target="_self">Instagram</a></li>
                     <li><a href="https://twitter.com/" target="_self">Twitter</a></li>
                     <li><a href="s://www.youtube.com" target="_self">YouTube</a></li>

                 </ul>
             </div>
        </div>
        <hr>
        <p class="cent">Copyright 2021 - MIDSY</p>
    </div>
</div>
</footer>


</body>
</html>
