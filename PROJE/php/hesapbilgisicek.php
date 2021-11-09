<?php

include 'baglan.php';


$ara = $_SESSION["uye"];
$sorgu = "select * from uyeler where email like '%$ara%'";

$kayitlar = $DBConnection -> prepare($sorgu);
$kayitlar -> execute();

if($kayitlar->rowCount()){
	while($satir= $kayitlar->fetch(PDO::FETCH_ASSOC)){
					$adi = $satir['adi'];
                    $soyadi= $satir['soyadi'];
					$email = $satir['email'];
					$sifre =$satir['sifre'];
					$tarih =$satir['tarih'];
				}
	
}






?>