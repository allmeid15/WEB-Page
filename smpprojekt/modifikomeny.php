<?php
    require "inc/header.php";
?>
    <main class="baza faqe">


    <?php
            if(isset($_GET['mid'])){
                $menyjaid=$_GET['mid'];
                $menyja=merrMenyId($menyjaid);
                $kategoria=$menyja['kategoria'];
                $artikulli=$menyja['artikulli'];
                $pershkrimi=$menyja['pershkrimi'];
                $kosto=$menyja['kosto'];
                $imazh=$menyja['imazh'];
                
            }
            if(isset($_POST['ruaj'])){
                $file_name= $_FILES['image']['name'];
                $tempname = $_FILES['image']['tmp_name'];
                if($_FILES['image']['size'] == 0) {
                    $folder = $imazh;
                }else {
                    $folder = './Imazhet/'. $file_name;
                    echo "<h2> File uploaded successfully</h2>";
                }
                modifikoMeny($menyjaid,$_POST['kategoria'], $_POST['artikulli'], $_POST['pershkrimi'], $_POST['kosto'],$folder);
            }
    ?>
    <img style="width: 100px;" src="<?php echo $imazh ?>" alt="imazhi">

    <form method="post" enctype="multipart/form-data">
        <legend class='forma-file'>Forma per modifikim te imazhit</legend>
        <input type = "file" name="image" />
        <br/><br/>
    
        <form method="post" id="menyja" class="box" action="" >
        <legend>Forma per modifikimin e artikujve</legend>
        <fieldset>
            <label>Kategoria: </label>
            <select id="kategoria" name="kategoria">
                <option value="0">Zgjedh Kategorine</option>
                <option value="1">Embelsire</option>
                <option value="2">Ushqim</option>
            </select>
        </fieldset>
        <fieldset>
            <label>Artikulli: </label>
            <input type="text" id="artikulli" name="artikulli"
                value="<?php if(!empty($artikulli)) echo $artikulli ?>">
        </fieldset>
        <fieldset>
            <label>Pershkrimi: </label>
            <input type="text" id="pershkrimi" name="pershkrimi"
                value="<?php if(!empty($pershkrimi)) echo $pershkrimi?>">
        </fieldset>
        <fieldset>
            <label>Kosto: </label>
            <input type="number" name="kosto" step=".01"
                value="<?php if(!empty($kosto)) echo $kosto?>">
        </fieldset>
        <input type='submit' name='ruaj' id='ruaj' value='ruaj'>
    </form>

    <!--<div>
        <?php
            $res = mysqli_query($dbconn, "select * from menyja ");
            while($row = mysqli_fetch_assoc($res)) {
                
        ?>
        <img src="images/<?php  echo $row['imazh'] ?>"/>
        <?php } ?>
    </div>-->
    </main>
    <?php
    require "inc/footer.php"?>