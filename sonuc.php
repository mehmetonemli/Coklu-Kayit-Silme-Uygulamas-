<?php

require_once("baglan.php");

function filtrele($deger){
    $bir = trim($deger);
    $iki = strip_tags($bir);
    $uc = htmlspecialchars($iki,ENT_QUOTES);
    $sonuc = $uc;
    return $sonuc;

}

$GelenSecim = $_POST["secim"];
$IDlerBirlestir = implode(", ",$GelenSecim);
$IDler = filtrele($IDlerBirlestir);

echo $IDler;
    
    $sil = $VeriTabanı->prepare("DELETE FROM kisiler WHERE id IN ($IDler)");
    $sil->execute();

    header("Location:index.php");
    exit();


?>