<?php

include 'baglan.php';


if($_POST){
	
	$sifre = $_POST["sifre"];
	$yenisifre = $_POST["yenisifre"];
	$yenisifretekrar = $_POST["yenisifretekrar"];
	
	$ara = $_SESSION["uye"];
    $sorgu = "select * from uyeler where email like '%$ara%'"; 
	
	$kayitlar = $DBConnection -> prepare($sorgu);
    $kayitlar -> execute();
	
	if($kayitlar->rowCount()){
			$satir= $kayitlar->fetch(PDO::FETCH_ASSOC);
			
			if ($sifre== $satir["sifre"]){
				
				if($yenisifre !== $yenisifretekrar){
					
					echo '<div class="alert alert-danger">Yeni şifreniz birbirinden farklı. Yeniden deneyiniz!!!</div>';
					
				}else{
					$sorguu = "UPDATE uyeler set sifre='" .$yenisifre. "' WHERE email='" .$ara. "'";
		            $kayitlarr = $DBConnection -> prepare($sorguu);
                    $kayitlarr -> execute([$yenisifre,$ara]);
					echo '<div class="alert alert-success">Sifre Değiştirildi</div>';
					
				}
				
			}else{
				echo '<div class="alert alert-danger">Yanliş Şifre Girdiniz, Lütfen Tekrar Deneyininiz!!!</div>';
			}
			
			
			
			
			
		}
	
	
	
	
	
	
	
	
	
		
		
		
	
	
}




?>