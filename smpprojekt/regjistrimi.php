<?php
require "inc/header.php"?>;

    <main class="baza faqe">

        <?php
        $roli=0;
            if(isset($_POST['shto'])){
                shtoUser($_POST['emri'], $_POST['mbiemri'], $_POST['telefoni'], $_POST['email'], $_POST['komuna'], $roli, $_POST['fjalekalimi']);
            }
        ?>

    <form method="post" id="useri">
        <legend>Forma per shtimin e perdorueseve</legend>
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
            <label>Telefoni</label>
            <input type="text" name="telefoni"
            value ="<?php if(!empty($telefoni)) echo $telefoni ?> ">
        </fieldset>
            <fieldset>
                <label>Email</label>
                <input type="email" name="email"
                value ="<?php if(!empty($email)) echo $email ?> ">
            </fieldset> 
            <fieldset>
            <label>Komuna</label>
            <input type="text" name="komuna"
            value ="<?php if(!empty($komuna)) echo $komuna ?> ">
        </fieldset>
        <!--<fieldset>
            <label>Roli</label>
            <input readonly type="text" name="roli"
            value ="<?php if(!empty($roli)) echo $roli ?> ">
        </fieldset>-->
        <fieldset>
            <label>Fjalekalimi</label>
            <input type="password" name="fjalekalimi">
        </fieldset>
            <input type="submit" name="shto" id="shto" value="shto">
    </form> 
        </main>

        <?php
        require "inc/footer.php"?>