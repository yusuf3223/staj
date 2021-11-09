<?php

session_start();



if(isset($_SESSION['uye'])){
include 'baglan.php';

if($_POST){
	  $email = $_SESSION['uye'];
      $urunismi = $_POST['urunAdi'];
      $fiyat = $_POST['urunFiyati'];
      $adet = $_POST['urunAdet'];
	  
	  
	  
	 
			$ekle = $DBConnection -> prepare("INSERT INTO sepetim (email, urunismi, adet, fiyat) VALUES(?,?,?,?)");
		    $ekle -> execute([$email,$urunismi,$adet,$fiyat]);
		    $eklesayi = $ekle -> rowCount();
		    if($eklesayi > 0) {
			  echo "<script>window.open('../sayfa/sepetim.php','_self')</script>";
			  
		    } else {
			  echo 'hata';
				
			}
			
		
	
	
	
	
	
	
}

}


?>