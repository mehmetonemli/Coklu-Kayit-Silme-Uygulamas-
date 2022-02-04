<?php
try{
    $VeriTabanı = new PDO("mysql:host=localhost;dbname=coklusilme;charset=UTF8","root","");
}catch(PDOException $Hata){

    echo "Bağlantı Hatası ".$Hata->getMessage();
    die();

}

?>