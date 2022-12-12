<?php 
 $angka= $_GET['angka']='10';
 for ($i=$angka; $i < ; $i--) { 
    for ($j=0; $j < ; $j++) { 
        echo $j;
    }
    echo "<br />";
 }
 if (isset ($_GET["angka"])) {
    $angka = "Angka Tidak Diset di Method Get";
    echo $angka;
 }
 ?>