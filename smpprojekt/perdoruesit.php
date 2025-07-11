<?php
require "inc/header.php"?>

<main class="baza faqe">
<h2>Perdoruesit</h2>
        <table class="tabela-kufizim">
            <tr>
                <th>Emri dhe Mbiemri</th>
                <th>Email</th>
                <th>Komuna</th>
                <th>Telefoni</th>
                <th>EDIT</th>
                <th>Fshije</th>
            <tr>
                <?php
                $result=merrPerdorues();
                $i=0;
                while($perdorues=mysqli_fetch_assoc($result)){
                    $perdoruesId=$perdorues['userid'];
                    echo "<td>" . $perdorues['emri'] . " " . $perdorues['mbiemri'] . "</td>";
                    echo "<td>" . $perdorues['email'] . "</td>";
                    echo "<td>" . $perdorues['komuna'] . "</td>";
                    echo "<td>" . $perdorues['telefoni'] . "</td>";
                    echo "<td><a href='modifikoperdorues.php?uid={$perdoruesId}'>EDIT</a></td>"; 
                    echo "<td><a href='fshiperdorues.php?uid={$perdoruesId}'>DELETE</a></td>";
                    echo "</tr>";
                    $i++;
                }
                echo "<a href='shtoperdorues.php'>Shto</a>";
                ?>

                </table>
            </main>
            <?php
            require "inc/footer.php"?>