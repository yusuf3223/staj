<?php
session_start();
include 'baglan.php';

if(isset($_POST['ver'])){
    

    
        $ara = $_SESSION['uye'];
		
		$bul = "select * from uyeler where email like '%$ara%'";
        $adbul = $DBConnection -> prepare($bul);
        $adbul -> execute();
		$adbulsayi=$adbul->rowCount();
		if($adbulsayi>0){
			while($adlar= $adbul->fetch(PDO::FETCH_ASSOC)){
                $ad = "".$adlar['adi']." ".$adlar['soyadi'].", ";
            }
		}
			
		
    
        $sorgu = "select * from sepetim where email like '%$ara%'";
        $kayitlar = $DBConnection -> prepare($sorgu);
        $kayitlar -> execute();
		
		$toplamFiyat = 0;
        
        $kayitlarsayi=$kayitlar->rowCount();
        if($kayitlarsayi>0){
            $email = $ara;
            $urun = "";
            
            while($satir= $kayitlar->fetch(PDO::FETCH_ASSOC)){
                $urun .= "".$satir['urunismi']." (".$satir['adet']."), ";
            }

            $toplamFiyat = $_POST['toplamFiyat'];
            $adres = $_POST['adres'];
            $kargoDurumu = "Kargoya verilmedi.";
			
			

            if(empty($_POST['adres']) || empty($_POST['hesapnumara']) || empty($_POST['sonkullanmatarihiay']) || empty($_POST['sonkullanmatarihiyil']) || empty($_POST['cvc2'])) {
                echo "<script>window.open('../sayfa/sepetim.php','_self')</script>";
            }
            else {
				$sorguu = $DBConnection -> prepare("INSERT INTO siparisler (adsoyad, email, urun, toplamfiyat, adres, kargodurumu) VALUES(?,?,?,?,?,?)");
		        $sorguu -> execute([$ad,$email,$urun,$toplamFiyat,$adres,$kargoDurumu]);
		        $sorgusayii = $sorguu -> rowCount();
				
				if($sorgusayii>0){
					$sepetbul = "DELETE from sepetim where email like '%$ara%'";
                    $sepetsil = $DBConnection -> prepare($sepetbul);
                    $sepetsil -> execute();
					 echo "<script>window.open('../sayfa/siparislerim.php','_self')</script>";
				}
				
				
                

              
            }
        }
    
    
}

?>