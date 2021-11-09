<?php 

 include 'baglan.php';
				
if($_POST){
	
$Gelenadi = $_POST['adi'];
$Gelensoyadi = $_POST['soyadi'];
$Gelenemail=$_POST['email'];
$Gelensifre=$_POST['sifre'];
$Gelensifree=$_POST['sifree'];


   if ($Gelenadi != "" and $Gelensoyadi != "" and $Gelenemail != "" and $Gelensifre != "" and $Gelensifree != ""){
	    if ($Gelensifree == $Gelensifre){
		  
          $emailsorgu=$DBConnection->prepare("select * from uyeler where email = ? LIMIT 1");
		  $emailsorgu->execute([$Gelenemail]);
		  $emailsorgusayi=$emailsorgu->rowCount();
          if($emailsorgusayi > 0){
			  echo '<div class="alert alert-danger">Bu email adresi kullanımda, başka adres kullanın!!!</div>';
			  
		  }else{
			   $sorgu = $DBConnection -> prepare("INSERT INTO uyeler (adi, soyadi, email, sifre) VALUES(?,?,?,?)");
		  $sorgu -> execute([$Gelenadi,$Gelensoyadi,$Gelenemail,$Gelensifre]);
		  $sorgusayi = $sorgu -> rowCount();
		    if($sorgusayi > 0) {
			  echo '<div class="alert alert-success">Kayıt Başarılı</div>';
			  
		    } else {
			  echo '<div class="alert alert-danger">Kayıt Hatalı(Başarısız), Tekrar Deneyiniz</div>';
				
			}
			  
		  }

		  
	
        } else {
	      echo '<div class="alert alert-danger">Şifreler uyuşmuyor</div>';
	
         }
	
    } else{
	    echo '<div class="alert alert-danger">Lütfen Boş Bırakmayınız</div>';
    }
	
	
}
	
	
?>
	