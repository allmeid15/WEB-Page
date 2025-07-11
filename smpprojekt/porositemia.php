<?php
require "inc/header.php"?>
    <main class="baza faqe">
        <table>
            <tr>
                <th>Emri </th>
                <th>Mbiemri</th>
                <th>Artikulli</th>
                <th>Cmimi</th>
            <tr>
        <?php
            if(isset($_GET['uid'])){
                $userId=$_GET['uid'];
            };
            porositMia($userId);
            ?>
            <?php
                $mia=porositMia($userId);
                $i=0;
                while($result=mysqli_fetch_assoc($mia)){
                    echo "<td>" . $result['emri'] . " " . $result['mbiemri'] . "</td>";
                    echo "<td>" . $result['artikulli'] . "</td>";
                    echo "<td>" . $result['cmimi'] . "</td>";
                    echo "</tr>";
                    $i++;
                }
                ?>

            </table>
            </main>