<?php require "inc/header.php";?>
       <!-- <header id="header">
            <nav class="navbar">
                <a href="index.html" id="logo">
                    <img src="./Imazhet/462186680_850749977180665_6920670492982404461_n.jpg" alt="Ballkan Special">
                </a>
                <ul id="listapa">
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">Historiku</a></li>
                    <li><a href="#">Pikat</a></li>
                    <li><a href="#">Kontaktet</a></li>
                </ul>
            </nav>
            <section id="baneri">
                <img src="./Imazhet/292372955_2368088843357275_3147772036722999181_n.jpg" alt="Ballkan">
            </section>
        </header>-->
        <h1 class="hederi">Ballkan Special</h1>
        <main class="baza faqe">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <div class="login-produkte">
                <aside id="anash">

                <?php
                    if(isset($_POST['Kycy'])){
                        login($_POST['email'],$_POST['fjalekalimi']);
                    }
                ?>
                <h2 class="produktet">Forma per hyrje</h2>
            <form id="forma" class="login" method="post">
                    <fieldset>
                        <label>Email</label>
                        <input type="text" name="email">
                    <?//php if(!empty($email)) echo $email //qa kthejke qikjo edhe pse o problem te logini ?> 
                    </fieldset> 
                    <fieldset>
                        <label>Fjalekalimi</label>
                        <input type="password" name="fjalekalimi">
                    </fieldset> 
                    <input type="submit" name="Kycy" id="Kycy" value="Kycy">
            </form>
            </aside>
            <aside id='djatht' class="box">
                <h2 class="produktet">Produktet kryesore</h2>
                <nav id="artikujt">
                    <div class="ndarjet">
                        <img src="./Imazhet/244135814_2145525382280290_3608457298201572592_Indianka.jpg">
                        <p>Lorem ipsum odor amet, consectetuer adipiscing elit. Purus at consequat diam purus ultricies quis.</p>
                        <h4>Indianka</h4>
                    </div>
                    <div class="ndarjet">
                        <img src="./Imazhet/272188502_2234704073362420_6152190897364154095_shampite.jpg">
                        <p>Lorem ipsum odor amet, consectetuer adipiscing elit. Purus at consequat diam purus ultricies qui</p>
                        <h4>Kaqamaku</h4>
                    </div>
                    <div class="ndarjet">
                        <img src="./Imazhet/363437557_605654858356846_5831519065084806281_n.jpg">
                        <p>Lorem ipsum odor amet, consectetuer adipiscing elit. Purus at consequat diam purus ultricies quis</p>
                        <h4>Princes Francez</h4>
                    </div>
                </nav>
            </aside>
            </div>
            <section>
                <div class="title-histori"><!--pse qiky div perzihet edhe e shtin historikun me kto nalt-->
                    <h1 id="poshte">Historiku</h1>
                    
                </div>
                <div id="historia">
                    <div>
                        <img src="./Imazhet/441073132_760273342894996_493262051196845473 lokali.jpg">
                    </div>
                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, 
                            sunt in culpa qui officia deserunt mollit anim id est laborum.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, 
                            sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                        </div>
                </div>
            </section>
        </main>
        <?php require "inc/footer.php"?>


