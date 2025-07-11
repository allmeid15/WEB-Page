<?php
require "inc/header.php";
?>
    <main class="baza faqe">
        <?php
        if(isset($_GET['uid'])){
            $userId=$_GET['uid'];
            $user=merrPerdoruesId($userId);
            $emri=$user['emri'];
            $mbiemri=$user['mbiemri'];
            $email=$user['email'];
        }

        if(isset($_POST['fshij'])){
            fshiPerdorues($userId);
        }
        ?>

        <form method="post" id="perdorues">
        <legend>Forma per fshirjen e perdorueseve</legend>
        <fieldset>
            <label>Emri</label>
            <input readonly type="text" name="emri" id="emri"
            value ="<?php if(!empty($emri)) echo $emri ?> ">
        </fieldset>
        <fieldset>
            <label>Mbiemri</label>
            <input readonly type="text" name="mbiemri" id="mbiemri"
            value ="<?php if(!empty($mbiemri)) echo $mbiemri ?> ">
        </fieldset>
        <fieldset>
            <label>Email</label>
            <input readonly type="email" name="email" id="email"
            value ="<?php if(!empty($email)) echo $email ?> ">
        </fieldset>
        <input type="submit" name="fshij" id="fshij" value="fshij">

    </form>
    </main>