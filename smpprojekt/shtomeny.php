<?php
require "inc/header.php"?>
    <main class="baza faqe">


        <?php
    if(isset($_POST['shto'])){
        $file_name= $_FILES['image']['name'];
        $tempname = $_FILES['image']['tmp_name'];
        $folder="./Imazhet/". $file_name;   
        
        if($folder==$file_name) {
            echo "Fotoja u shtua me sukses";
        }
        shtoMeny($_POST['kategoria'], $_POST['artikulli'], $_POST['pershkrimi'], $_POST['kosto'], $folder);
    }
            
        ?>

        <form method="post" enctype="multipart/form-data">
        <legend class='forma-file'>Forma per shtim te imazhit</legend>
        <input type = "file" name="image">
        <br/><br/>

    <form method="post" id="menyja">
        <legend>Forma per shtimin e artikujve</legend>
        <fieldset>
            <label>Artikulli</label>
            <input type="text" name="artikulli" id="artikulli"
            value ="<?php if(!empty($artikulli)) echo $artikulli ?> ">
        </fieldset>
        <fieldset>
            <label>Pershkrimi</label>
            <input type="text" name="pershkrimi" id="pershkrimi"
            value ="<?php if(!empty($pershkrimi)) echo $pershkrimi ?> ">
        </fieldset>
        <fieldset>
            <label>Kosto</label>
            <input type="number" name="kosto" step=".01"
            value ="<?php if(!empty($kosto)) echo $kosto ?> ">
        </fieldset>
            <fieldset>
                <label>Kategoria</label>
                <select id="Kategoria" name="kategoria">
                <option value="0">Zgjedh Kategorine></option>
                <option value="embelsire">Embelsire</option>
                <option value="ushqim">Ushqim</option>
                </select>
            </fieldset> 
            <input type="submit" name="shto" id="shto" value="shto">
    </form> 



</main>
<?php
require "inc/footer.php"?>