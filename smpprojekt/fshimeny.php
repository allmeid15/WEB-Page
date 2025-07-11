<?php
require "inc/header.php"?>
    <main class="baza faqe">
        <h2>Artikujt Tane</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco 
            laboris nisi ut aliquip ex ea commodo consequat</p>
        
        <?php
        if(isset($_GET['mid'])){
            $menyjaid=$_GET['mid'];
            $menyja=merrMenyId($menyjaid);
            $artikulli=$menyja['artikulli'];
            $pershkrimi=$menyja['pershkrimi'];
        }

        if(isset($_POST['fshij'])) {
            fshijMeny($menyjaid);
        }
        ?>

    <form method="post" id="menyja" class="box" action="" >
        <legend>Forma per fshirjen e artikujve</legend>
        <fieldset>
            <label>Artikulli: </label>
            <input readonly type="text" id="artikulli" name="artikulli"
                value="<?php if(!empty($artikulli)) echo $artikulli ?>">
        </fieldset>
        <fieldset>
            <label>Pershkrimi: </label>
            <input readonly type="text" id="pershkrimi" name="pershkrimi"
                value="<?php if(!empty($pershkrimi)) echo $pershkrimi?>">
        </fieldset>
        <input type="submit" name="fshij" id="fshij" value="fshij">
    </form>
    </main>
    <?php require "inc/footer.php";?>

        
