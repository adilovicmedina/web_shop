<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MID's secret</title>
    <link rel = "icon" href =  "photos/parf1.png" 
        type = "image/x-icon"> 
    <link rel="stylesheet" href="style2.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Inconsolata:wght@300;500&family=Zilla+Slab:wght@300;400;600&display=swap');
</style>
</head>
<body>
    <h1>NAPRAVI NALOG</h1>
    <form action="check.php" method="POST">
        <fieldset>
        <!-- <label>Ime:</label> 
        <input type="text" name="name" placeholder="Ime">
        <label>Prezime:</label> -->
         <!-- <input type="text" name="surn" placeholder="Prezime"> -->
        <label>Korisničko ime: </label>
        <input type="text" name="user" placeholder="Korisničko ime">
        <label>Šifra:</label> 
        <input type="password" name="pass1" placeholder="Šifra">
        <label>Ponovite šifru:</label> 
        <input type="password" name="pass2" placeholder="Šifra">
        <!-- <label> Datum rođenja:</label>
        <select name="month" id="month">
            <option value="month" disabled selected>Month</option>
           
                // for ($i=1; $i<=12; $i++)
                // echo "<option value='month'>$i</option>";
            ?> -->
        <!-- </select>
        <select name="year" id="year">
        <option value="month" disabled selected>Year</option>
          
                for ($j=1920; $j<=2003; $j++)
                    echo "<option value='year'>$j</option>";
           
        </select> -->
        <input type="submit" value="POTVRDI" class="button">
    </fieldset>
    </form>
    <?php
    require("include/footer.php");
    linkovi(1);
    linkovi(4);
    linkovi(5);
?>
</body>
</html>