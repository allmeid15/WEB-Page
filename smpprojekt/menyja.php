<?php require "inc/header.php";?>
    <main class="baza faqe">
        

    <h2>Meny e embelsirave</h2>
    <?php
        if(isset($_SESSION['user'])){
            if($_SESSION['user']['roli']==1){

                echo "<a href='shtomeny.php'>SHTO</a>";
            }
        }?>
    
        
    <div class="slider">
                <?php
                $menyte = merrEmbelsire();
                $i = 0;
                while ($menyja = mysqli_fetch_assoc($menyte)) {
                    $menyjaid = $menyja['menyjaid'];
                    $pershkrimi = $menyja['pershkrimi'];
                    $artikulli = $menyja['artikulli'];
                    if (strlen($pershkrimi) > 120) {
                        $pershkrimi = substr($pershkrimi, 0, 100) . "...";
                    }
                    echo "<div class='card-info'>";
                    echo "<div class='card-img'>";
                    echo "<img src={$menyja['imazh']} alt='Projekti i pare'>";
                    echo "</div>";
                    echo "<div class='card-title'>";
                    echo "<h4>{$artikulli}</h4>";
                    echo "</div>";
                    echo "<div class='card-footer'><p>{$pershkrimi}</p></div>";
                    if(isset($_SESSION['user'])){
                            if($_SESSION['user']['roli']==1){
                        echo "<a href='fshimeny.php?mid={$menyjaid}'>DELETE</a>";
                        echo "<a href='modifikomeny.php?mid={$menyjaid}'>EDIT</a>";
                    }
                    }
                    //echo "<a class='meShume' href='projekti.php?projektiid={$projektiid}'>me shume &#8658;</a>";
                    echo "</div>";
                    //$i++;
                    //if ($i == 3) $i = 0;
                }
                ?>








           <!-- <?php
            $result=merrEmbelsire();
            $i=0;
            ?>
            <div class='shto-butoni'>
            <h2>Meny e Embelsirave</h2>
            <?php echo "<a href='shtomeny.php'>SHTO</a>"?>
            </div>
            <div class="embelsirat">
                <?php
            while($menyja=mysqli_fetch_assoc($result)) {
                $menyjaid=$menyja['menyjaid'];
                ?>
            <div class="ndarjet">
                    <img src="<?php echo $menyja['imazh']; ?>">
                <div class="titull">
                    <p><?php echo  $menyja['pershkrimi'];?></p>
                </div>  
                <div class="pershkrimi">
                <h4><?php echo $menyja['artikulli'];?></h4>
                </div>
                <div class="butonat">
                <?php echo "<a href='fshimeny.php?mid={$menyjaid}'>DELETE</a>"?>
                <?php echo "<a href='modifikomeny.php?mid={$menyjaid}'>EDIT</a>"?> 
                </div>
            </div>
                <?php
            }
            ?>-->
            </div>
            <?php
            $result=merrUshqim();
            $i=0;
            ?>
            <h2>Meny e ushqimeve</h2>
    <div class="slider">
                <?php
                $menyte = merrUshqim();
                $i = 0;
                while ($menyja = mysqli_fetch_assoc($menyte)) {
                    $menyjaid = $menyja['menyjaid'];
                    $pershkrimi = $menyja['pershkrimi'];
                    $artikulli = $menyja['artikulli'];
                    if (strlen($pershkrimi) > 120) {
                        $pershkrimi = substr($pershkrimi, 0, 100) . "...";
                    }
                    echo "<div class='card-info'>";
                    echo "<div class='card-img'>";
                    echo "<img src={$menyja['imazh']} alt='Projekti i pare'>";
                    echo "</div>";
                    echo "<div class='card-title'>";
                    echo "<h4>{$artikulli}</h4>";
                    echo "</div>";
                    echo "<div class='card-footer'><p>{$pershkrimi}</p></div>";
                    if(isset($_SESSION['user'])){
                        if($_SESSION['user']['roli']==1){
                    echo "<a href='fshimeny.php?mid={$menyjaid}'>DELETE</a>";
                    echo "<a href='modifikomeny.php?mid={$menyjaid}'>EDIT</a>";
                        }
                    }
                    //echo "<a class='meShume' href='projekti.php?projektiid={$projektiid}'>me shume &#8658;</a>";
                    echo "</div>";
                    //$i++;
                    //if ($i == 3) $i = 0;
                }
                ?>
            <!--<aside id='djatht' class="box">
                <h2 class="produktet">Menyja e embelsirave</h2>
                <nav id="artikujt">
                    <div class="ndarjet">
                        <img src="./Imazhet/272188502_2234704073362420_6152190897364154095_shampite.jpg">
                        <p>Lorem ipsum odor amet, consectetuer adipiscing elit. Purus at consequat diam purus ultricies qui</p>
                        <h4>Akullore</h4>
                    </div>
                    <div class="ndarjet">
                        <img src="./Imazhet/363437557_605654858356846_5831519065084806281_n.jpg">
                        <p>Lorem ipsum odor amet, consectetuer adipiscing elit. Purus at consequat diam purus ultricies quis</p>
                        <h4>Princes Francez</h4>
                    </div>
                    <div class="ndarjet">
                        <img src="./Imazhet/363437557_605654858356846_5831519065084806281_n.jpg">
                        <p>Lorem ipsum odor amet, consectetuer adipiscing elit. Purus at consequat diam purus ultricies quis</p>
                        <h4>Princes Francez</h4>
                    </div>
                    <div class="ndarjet">
                        <img src="./Imazhet/363437557_605654858356846_5831519065084806281_n.jpg">
                        <p>Lorem ipsum odor amet, consectetuer adipiscing elit. Purus at consequat diam purus ultricies quis</p>
                        <h4>Princes Francez</h4>
                    </div>
                    <div class="ndarjet">
                        <img src="./Imazhet/363437557_605654858356846_5831519065084806281_n.jpg">
                        <p>Lorem ipsum odor amet, consectetuer adipiscing elit. Purus at consequat diam purus ultricies quis</p>
                        <h4>Princes Francez</h4>
                    </div>
                    <div class="ndarjet">
                        <img src="./Imazhet/363437557_605654858356846_5831519065084806281_n.jpg">
                        <p>Lorem ipsum odor amet, consectetuer adipiscing elit. Purus at consequat diam purus ultricies quis</p>
                        <h4>Princes Francez</h4>
                    </div>
                </nav>
            </aside>-->
            
    </main>
    <?php
    require "inc/footer.php"?>