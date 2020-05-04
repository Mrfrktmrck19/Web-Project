<?php
error_reporting(0);
$kullaniciAdi = "B181210019@ogr.sakarya.edu.tr";
$sifre  = "123";

if($sifre == $_POST["sifre"] && $kullaniciAdi == $_POST["kulAdi"]) {
    echo "Hoşgeldiniz B181210019 <br>Ömer Faruk Tomurcuk";
}
else {
    header ("Location:login.html");
}



?>