<?php
include 'baglan.php';



if(isset($_POST['kargover'])){
$durum="Kargoya verildi.";	
$takipno=$_POST['kargotakip'];
$email = $_POST['email'];

$sorgu = "select * from siparisler where email like '%$email%'";
$kayitlar = $DBConnection -> prepare($sorgu);
$kayitlar -> execute();
$kayitlarsayi=$kayitlar->rowCount();


      
	  if($kayitlarsayi>0){
                       
            
            while($satir= $kayitlar->fetch(PDO::FETCH_ASSOC)){
                 if($satir['kargodurumu'] == "Kargoya verilmedi."){
					 
					if($satir['takipno'] == 0){
						
										
						
					$sorguu = "UPDATE siparisler set kargodurumu='" .$durum. "' WHERE email='" .$email. "'";
		            $kayitlarr = $DBConnection -> prepare($sorguu);
                    $kayitlarr -> execute([$durum,$email]);
					
					$sorguuu = "UPDATE siparisler set takipno='" .$takipno. "' WHERE email='" .$email. "'";
					$kayitlarrr = $DBConnection -> prepare($sorguuu);
                    $kayitlarrr -> execute([$takipno,$email]);	
					
					
					
					
					echo "<script>window.open('../sayfa/admin.php','_self')</script>";
				
					}
                }
				
            }
        }else {
			echo "<script>window.open('../sayfa/admin.php','_self')</script>";
			
		}

}





?>