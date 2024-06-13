<?php

session_start();

if (!isset($_SESSION["username"])) {
    header("Location: main.php");
    exit();
}
?>

<div>
    <h1>
    <?php echo "Selamat datang, " . $_SESSION["username"] . "!";
    ?>
    </h1>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="row">
        <div class="col-md-12" style="background-color: aqua; padding: 10px; text-align: center;">JUDUL</div>

        <div class="col-md-3" style="background-color: rgb(37, 180, 101); text-align:center; height: 200; width: 10;">
          isi   
        </div>

        <div class="col-md-9" style="background-color: rgb(19, 177, 40); padding: 10px;">
            <img src="assets/not404.jpg" alt="" style="width: 100px; height: 100px; border-radius: 25px;">
            Download Bootstrap to get the compiled CSS and JavaScript, source code,
            Download Bootstrap to get the compiled CSS and JavaScript, source code, or include it with your favorite package managers like npm, RubyGems, and more.

            Download Bootstrap to get the compiled CSS and JavaScript, source code, or include it with your favorite package managers like npm, RubyGems, and more.

            Download Bootstrap to get the compiled CSS and JavaScript, source code, or include it with your favorite package managers like npm, RubyGems, and more.

            or include it with your favorite package managers like npm, RubyGems, and more.
            <img src="assets/Glitch1.jpg" alt="" style="width: 300px; height: 100px; border-radius: 20px;">
        </div>
        <div class="col-md-12" style="background-color: rgb(38, 28, 173);">kolom 5</div>


    </div>
    <form action="hapus.php">
    <button type="keluar">hapus</button>
    </form>
</body>
</html>
