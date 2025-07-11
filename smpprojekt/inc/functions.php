<?php
session_start();
 $dbconn ="";
 function dbConnection() {
    global $dbconn;
    $dbconn=mysqli_connect("localhost", "root", "", "delivery");
    if(!$dbconn) {
        die(mysqli_error($dbconn));
    }
 }
 dbConnection();
 //funksionet per Menyne;
 function merrMeny(){
    global $dbconn;
    $sql="SELECT * FROM menyja ";
    return mysqli_query($dbconn, $sql);
 }
 function merrEmbelsire() {
    global $dbconn;
    $sql="SELECT * FROM menyja WHERE kategoria LIKE 'embelsire'";
    return mysqli_query($dbconn, $sql);
 }
 function merrUshqim() {
    global $dbconn;
    $sql="SELECT * FROM menyja WHERE kategoria LIKE 'ushqim'";
    return mysqli_query($dbconn, $sql);
 }
 function merrMenyId($menyjaid) {
    global $dbconn;
    $sql="SELECT * FROM menyja WHERE menyjaid=$menyjaid";
    $result=mysqli_query($dbconn, $sql);
    return mysqli_fetch_assoc($result);
 }
 function fshijMeny($menyjaid){
    global $dbconn;
    $sql="DELETE FROM menyja WHERE menyjaid=$menyjaid";
    $result= mysqli_query($dbconn, $sql);
    if($result) {
        echo "Artikulli u fshi me sukses";
    }else{
         mysqli_error($dbconn);
    }
 }
 function modifikoMeny($menyjaid, $kategoria, $artikulli, $pershkrimi, $kosto,$imazh) {
    global $dbconn;
    $sql="UPDATE menyja SET kategoria='$kategoria', artikulli='$artikulli', pershkrimi='$pershkrimi', kosto='$kosto', imazh='$imazh'
    WHERE menyjaid=$menyjaid";
    $result=mysqli_query($dbconn, $sql);
    if($result){
        echo "Artikulli u modifikua me sukses";
    }else{
        mysqli_error($dbconn);
    }
 }
 function shtoMeny($kategoria, $artikulli, $pershkrimi, $kosto, $imazh) {
    global $dbconn;
    $sql="INSERT INTO menyja(kategoria, artikulli, pershkrimi, kosto, imazh) VALUES('$kategoria','$artikulli', '$pershkrimi', '$kosto', '$imazh')";
    $result=mysqli_query($dbconn, $sql);
    if($result){
        echo "Artikulli u shtua me sukses";
    }else{
        mysqli_error($dbconn, $sql);
    }
 }
 //Funskionet per usera
 function shtoUser($emri, $mbiemri, $telefoni, $email, $komuna, $roli, $fjalekalimi){
 global $dbconn;
 $sql="INSERT INTO userat(emri, mbiemri, telefoni, email, komuna, roli, fjalekalimi)
 VALUES('$emri', '$mbiemri', '$telefoni', '$email', '$komuna', '0', '$fjalekalimi')";
 $result=mysqli_query($dbconn, $sql);
 if($result){
    echo "Useri u shtua me sukses";//masi regjistrohesh me sukses, 3 sekonda me ta qit kto taj redirect index.php qe me mujt login me bo;
    header("Location: index.php");
 }else{
    mysqli_error($dbconn, $sql);
 }
}
function login($email, $fjalekalimi){
    global $dbconn;
    $sql="SELECT * FROM userat WHERE email='$email' AND fjalekalimi='$fjalekalimi'";
    $result=mysqli_query($dbconn, $sql);
    if(mysqli_num_rows($result)==1){
        $userData=mysqli_fetch_assoc($result);
        $user=array();
        $user['userid']=$userData['userid'];
        $user['emrimbiemri']=$userData['emri']. " " . $userData['mbiemri'];
        $user['telefoni']=$userData['telefoni'];
        $user['email']=$userData['email'];
        $user['komuna']=$userData['komuna'];
        $user['roli']=$userData['roli'];
        $user['fjalekalimi']=$userData['fjalekalimi'];
        $_SESSION['user'] = $user;
        header('Location: menyja.php');
    }else{
        echo "Nuk ka User";
    }
}
//Funskione per porosite-usera
function merrPorosiUser(){
   global $dbconn;
   $sql=" SELECT u.emri, u.mbiemri, m.artikulli,p.dataeporosise, po.cmimi
      FROM porosidetajet po INNER JOIN porosia p ON po.porosiaid=p.porosiaid INNER JOIN menyja m ON po.menyjaid=m.menyjaid
      INNER JOIN userat u ON p.userid=u.userid
      ORDER BY po.poid DESC
      LIMIT 25;";
   return mysqli_query($dbconn, $sql);
}
function merrPerdorues() {
   global $dbconn;
   $sql="SELECT * FROM userat";
   return mysqli_query($dbconn, $sql);
}
function merrPerdoruesId($userid) {
   global $dbconn; 
   $sql="SELECT * FROM userat WHERE userid=$userid";
   $result=mysqli_query($dbconn, $sql);
   return mysqli_fetch_assoc($result);
}
function shtoPerdorues($emri, $mbiemri, $email, $komuna, $telefoni) {
   global $dbconn;
   $sql="INSERT INTO userat(emri, mbiemri, email, komuna, telefoni) VALUES('$emri', '$mbiemri', '$email', '$komuna', '$telefoni')";
   $result=mysqli_query($dbconn, $sql);
   if($result) {
      echo "Perdoruesi u shtua me sukses";
   }else{
      mysqli_error($dbconn, $sql);
   }
}
function modifikoPerdorues($userId, $emri, $mbiemri, $email, $komuna, $telefoni) {
   global $dbconn;
   $sql="UPDATE userat SET emri='$emri', mbiemri='$mbiemri', email='$email', komuna='$komuna', telefoni='$telefoni'
   WHERE userid=$userId";
   $result=mysqli_query($dbconn, $sql);
   if($result){
      echo "Perdoruesi u modifikua me sukses";
   }else{
      mysqli_error($dbconn, $sql);
   }
}
function fshiPerdorues($userId){
   global $dbconn;
   $sql="DELETE FROM userat WHERE userid=$userId";
   $result=mysqli_query($dbconn, $sql);
   if($result){
      echo "Perdoruesi u fshi me sukses";
   }else{
      mysqli_error($dbconn, $sql);
   }
}
function porositMia($userId) {
   global $dbconn;
   $sql="SELECT u.emri, u.mbiemri, m.artikulli, po.cmimi
      FROM porosidetajet po INNER JOIN porosia p ON po.porosiaid=p.porosiaid INNER JOIN menyja m ON po.menyjaid=m.menyjaid
      INNER JOIN userat u ON p.userid=u.userid WHERE u.userid=$userId";
   return mysqli_query($dbconn, $sql);
}
//Funksione per porosi-berje
function shtoPorosiDetalje($porosiaid, $menyjaid, $cmimi) {
   global $dbconn;
   $sql = "INSERT INTO porosidetajet (porosiaid, menyjaid, cmimi) VALUES ('$porosiaid', '$menyjaid', '$cmimi')";

   $result = mysqli_query($dbconn, $sql);

   if ($result) {
       return true;
   } else {
       return false;
   }
}

function shtoPorosi($userid) {
   global $dbconn;

   $dataeporosise = date('Y-m-d H:i:s');
   $sql = "INSERT INTO porosia (dataeporosise, userid) VALUES ('$dataeporosise', '$userid')";
   $result = mysqli_query($dbconn, $sql);

   if ($result) {
       $porosiaid = mysqli_insert_id($dbconn);
       return $porosiaid;
   } else {
       return false;
   }
}