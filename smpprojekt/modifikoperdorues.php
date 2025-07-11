<?php
require "inc/header.php"?>
    <main class="baza faqe">

        <?php
        if(isset($_GET['uid'])){
            $userId=$_GET['uid'];
            $perdorues=merrPerdoruesId($userId);
            $emri=$perdorues['emri'];
            $mbiemri=$perdorues['mbiemri'];
            $email=$perdorues['email'];
            $komuna=$perdorues['komuna'];
            $telefoni=$perdorues['telefoni'];
        }
        if(isset($_POST['modifiko'])){
            modifikoPerdorues($userId,$_POST['emri'], $_POST['mbiemri'], $_POST['email'], $_POST['komuna'], $_POST['telefoni']);
        }
        ?>

    <form method="post" id="perdorues">
        <legend>Forma per modifikimin e perdorueseve</legend>
        <fieldset>
            <label>Emri</label>
            <input type="text" name="emri" id="emri"
            value ="<?php if(!empty($emri)) echo $emri ?> ">
        </fieldset>
        <fieldset>
            <label>Mbiemri</label>
            <input type="text" name="mbiemri" id="mbiemri"
            value ="<?php if(!empty($mbiemri)) echo $mbiemri ?> ">
        </fieldset>
        <fieldset>
            <label>Email</label>
            <input type="email" name="email" id="email"
            value ="<?php if(!empty($email)) echo $email ?> ">
        </fieldset>
        <fieldset>
            <label>Komuna</label>
            <input type="text" name="komuna" id="komuna"
            value ="<?php if(!empty($komuna)) echo $komuna ?> ">
        </fieldset>
        <fieldset>
            <label>Telefoni</label>
            <input type="text" name="telefoni" id="telefoni"
            value ="<?php if(!empty($telefoni)) echo $telefoni ?> ">
        </fieldset>
         
            <input type="submit" name="modifiko" id="modifiko" value="edit">
    </form>
    </main>
    <?php
    require "inc/footer.php"
    ?>