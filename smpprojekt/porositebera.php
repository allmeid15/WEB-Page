<?php
require "inc/header.php"?>
    <main class="baza faqe">
    <h2>Porosite e bera</h2>
    <div class="tabela-porosit">
        <table>
            <tr>
                <th>Emri dhe Mbiemri</th>
                <th>Artikulli</th>
                <th>Data e porosise</th>
                <th>Cmimi</th>
                <!--<th>Fshije</th>-->
            <tr>
             <?php
                $result=merrPorosiUser();
                $i=0;
                while($porosiUser = mysqli_fetch_assoc($result)) {?>
                    <?php
                    echo "<td>" . $porosiUser['emri'] . " " . $porosiUser['mbiemri']. "</td>";
                    echo "<td>" . $porosiUser['artikulli'] . "</td>";
                    echo "<td>" . $porosiUser['dataeporosise'] . "</td>";
                    echo "<td>" . $porosiUser['cmimi'] . "</td>";
                    echo "</tr>";
                    $i++;
                }
             ?>   
             </table>
            </div>
            </main>
             <?php
             require "inc/footer.php"?>