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
<h1 id="h1Form2">PRIJAVI SE</h1>
    <form action="exist.php" method="POST">
        <fieldset>
        <label>Korisničko ime: </label>
        <input type="text" name="user" placeholder="Korisničko ime">
        <label>Lozinka:</label> 
        <input type="password" name="pass" placeholder="Lozinka">
        <input type="submit" value="POTVRDI" class="button">
        </fieldset>
    </form>
    <?php
        require("include/footer.php");
        linkovi(1);
        linkovi(2);
        linkovi(3);
    ?>

</body>
</html>