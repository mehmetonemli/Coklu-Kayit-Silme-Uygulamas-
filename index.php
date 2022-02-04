<?php 
require_once("baglan.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sonuc.php" method="post">
    <table width="500" align="center" border="0" cellpadding="0" cellspacing="0">

    <?php
    
    $sorgu = $VeriTabanı->prepare("SELECT * FROM kisiler");
    $sorgu->execute();

    $kayitsayisi = $sorgu->rowcount();

    $kayitlar = $sorgu->fetchAll(PDO::FETCH_ASSOC);

    foreach($kayitlar as $kayitsatiri){
    ?>

    <tr>
        <td width="25" height="30" align="left"><input type="checkbox" name="secim[]" value="<?php echo $kayitsatiri["id"]; ?>"></td>
        <td><?php echo $kayitsatiri["adi"]. " ".$kayitsatiri["soyadi"]; ?></td>
    </tr>
   

    <?php
    }    
    ?>
      <tr>
    <td height="50" colspan="2"><input type="submit" value="Seçili olanları sil"></td>
</tr>
    </table>
    </form>
</body>
</html>