<?php

include 'baglan.php';


if($_POST){
	$email = $_POST['email'];
	$sifre = $_POST['sifre'];
	
	
	if($email != "" and $sifre != ""){
		
		$uyesorgusu = $DBConnection -> prepare("SELECT *FROM uyeler WHERE email = ? and sifre = ? ");
		$uyesorgusu -> execute([$email, $sifre]);
		$uyesorgususayi = $uyesorgusu -> rowCount();
		
		if($uyesorgususayi > 0){
			$_SESSION['uye']=$email;						
		}else{
			echo '<div class="alert alert-danger">email adresi veya sifre yanlış!!!</div>';			
		}
		if(isset($_SESSION["uye"]) && $email == "admin@gmail.com" && $sifre == "admin") {
        echo "<script>window.open('../sayfa/admin.php','_self')</script>";
        }else{
			if(isset($_SESSION["uye"])){
				echo "<script>window.open('../index.php','_self')</script>";
			}
		}
		
	}else{
		echo '<div class="alert alert-danger">Lütfen Boş Bırakmayınız</div>';
	}
	
}




?>