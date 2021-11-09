<?php

include 'baglan.php';


$ara = $_SESSION["uye"];
$sorgu = "select * from sepetim where email like '%$ara%'";

$kayitlar = $DBConnection -> prepare($sorgu);
$kayitlar -> execute();

$toplamFiyat = 0;

if($kayitlar->rowCount()){
	while($satir= $kayitlar->fetch(PDO::FETCH_ASSOC)){
		    $urunFiyati = $satir['fiyat'];
            $urunFiyati = floatval($urunFiyati);
            $urunFiyati = $urunFiyati * $satir['adet'];
            $toplamFiyat += $urunFiyati;
		
	}
	
	
}




?>