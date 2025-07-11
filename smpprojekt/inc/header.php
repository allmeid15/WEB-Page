
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMP Projekti</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
require "inc/functions.php"?>
<body>
        <header id="header">
            <nav class="navbar">
                <a href="index.php" id="logo">
                    <img src="./Imazhet/462186680_850749977180665_6920670492982404461_n.jpg" alt="Ballkan Special">
                </a>
                <ul id="listapa">
                    <?php 
                        echo"<li><a href='menyja.php'>Menu</a></li>";
                        echo"<li><a href='index.php#poshte'>Historiku</a></li>";
                        if(isset($_SESSION['user'])){
                            echo"<li><a href='porosit.php'>Porosit ketu</a></li>";

                            if($_SESSION['user']['roli']==0){
                                echo"<li><a href='porositemia.php?uid={$_SESSION['user']['userid']}'>Porosite e Mia</a></li>";
                            }
                            if($_SESSION['user']['roli']==1){
                                echo"<li><a href = 'porositebera.php'>Porosite</a></li>";
                                echo"<li><a href = 'perdoruesit.php'>Perdoruesit</a></li>";
                            }
                            echo"<li><a href='dalja.php'>Dalja</a></li>";
                            echo "<li><a href='profil.php?uid={$_SESSION['user']['userid']}'>Profili</a></li>";
                        }
                        if(!isset($_SESSION['user'])){
                            echo"<li><a href='regjistrimi.php'>Regjistrohu</a></li>";
                        }
                        ?>
                </ul>
            </nav>
            <section id="baneri">
                <img src="./Imazhet/292372955_2368088843357275_3147772036722999181_n.jpg" alt="Ballkan">
            </section>
        </header>