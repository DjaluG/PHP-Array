<?php
session_start(); //ekssekusi  session pada server dan menyimpan nnya pada browser

if(isset($_SESSION['name'])){ //memerikassa sebuah variabel
    $name = $_SESSION['name'];
    $nis = $_SESSION['nis'];
    $rayon = $_SESSION['rayon'];
}else{
    $name = [];
    $nis = [];
    $rayon = [];
}


if(isset($_POST['name'])){ //validasi
    $name[] = $_POST["name"];
    $nis[] = $_POST["nis"]; 
    $rayon[] = $_POST['rayon'];
}


$_SESSION["name"] = $name; //menyimpan data variabel
$_SESSION["nis"] = $nis;
$_SESSION["rayon"] = $rayon;
?>
<center>
 <form method="post" action=""> <!--form-->
    Name-<input type="text" name="name" requried><br><br>
    Nis-<input type="text" name="nis" required><br><br>
    Rayon-<input type="text" name="rayon" required><br><br>
    <input type="submit" value="Submit" requried><br><br><hr>

    <?php
    $timpah = 0;
    foreach($name as $isi=>$value){  //menampilkan data dan mengulangkan
        $timpah++;
        echo "</br>$timpah : Nama: $name[$isi],</br> Nis: $nis[$isi],</br> Rayon : $rayon[$isi]</br>";
    }
    ?>

 </form>