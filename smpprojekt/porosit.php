
<?php
    require "inc/header.php";
if(!$_SESSION['user']['userid']) {
    header("Location: index.php");
}
?>
    <main class="baza faqe">
        <h2 class="titulli-porosise">Beje Porosine</h2>
        <table>
            <tr>
                <th>Artikulli</th>
                <th>Pershkrimi</th>
                <th>Kosto</th>
                <th>ID</th>
                <th>Shto</th>
            <tr>
        <?php
        $result=merrMeny();
        while($menyja= mysqli_fetch_assoc($result)) {
            $menyjaid=$menyja['menyjaid'];?>
           <tr>
                <td><?php echo $menyja['artikulli']; ?></td>
                <td><?php echo $menyja['pershkrimi']; ?></td>
                <td><?php echo $menyja['kosto']; ?></td>
                <td class="menyjaid hidden"><?php echo $menyjaid; ?></td>
                <td><button id="shto" onclick="porosite(this)">Shto produkt</button></td>
            </tr>
        <?php } ?>
       </table>
       <table >
            <tr>
                <th>Artikulli</th>
                <th>Cmimi</th>
                <th>Fshije</th>
            </tr>
            <tbody id="tabela">
            </tbody>
       </table>
        <div id="artikull">
        </div>
        <div id="cmimi">
        </div>
        <button id="submitOrder" onclick="submitOrder()"> Submit Order </button>
        
        <script>
        let porosia = [];
        let kosto = [];

        function porosite(button) {
            let row = button.closest("tr");
            let artikulli = row.cells[0].innerHTML;
            let cmimi = row.cells[2].innerHTML;
            let menyjaid = row.cells[3].innerHTML;

            kosto.push(cmimi);
            let menyja = {
                artikulli: artikulli,
                cmimi: cmimi,
                menyjaid: menyjaid
            };
            porosia.push(menyja);

            shfaqMeny();
            shuma();
            buildTable(porosia);
        }
        function fshije(index) {
            porosia.splice(index, 1)
            kosto.splice(index, 1)

            shfaqMeny();
            shuma();
            buildTable(porosia);
        };

        function shuma() {
            let shumaFinale = document.getElementById("cmimi");
            shumaFinale.innerHTML = "";
            let result = 0;

            for (i = 0; i < kosto.length; i++) {
                result = parseFloat(result) + parseFloat(kosto[i]);
                shumaFinale.innerHTML = "cmimi: " + result;
            }

        }

        function shfaqMeny() {
            let menyja = document.getElementById("artikull");

            menyja.innerHTML = '';

            for (let i = 0; i < porosia.length; i++) {
                let artikulli = porosia[i].artikulli;
                let cmimi = porosia[i].cmimi;
                
                //menyja.innerHTML += "artikulli " + artikulli + " dhe cmimi: " + cmimi + "<br>"; 
            }
        }

        function buildTable(data){
            let table = document.getElementById("tabela");
            table.innerHTML = '';
            for (let i =0; i < data.length; i++){
                let row = `<tr>
                              <td>${data[i].artikulli}</td>
                              <td>${data[i].cmimi}</td>
                              <td><button id="fshi" onclick="fshije(${i})">Fshije</button></td>
                            </tr>`
                table.innerHTML += row;
            }
            
        }

        function submitOrder() {
            let userid = <?php echo $_SESSION['user']['userid']; ?>;
            fetch('submit_order.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    action: 'create_order',
                    userid: userid,
                    porosia: porosia
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Porosia u krijua me sukses!');
                } else {
                    alert('Ka ndodhur nje gabim!');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Ka ndodhur nje gabim!');
            });
        }
    </script>