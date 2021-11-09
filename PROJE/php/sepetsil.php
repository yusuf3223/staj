<?php
session_start();

include 'baglan.php';



if(isset($_SESSION['uye'])){
    if(isset($_POST['sil'])){
        
        
            $ara = $_SESSION['uye'];
            $sorgu = "DELETE from sepetim where email like '%$ara%'";
			$kayitlar = $DBConnection -> prepare($sorgu);
            $kayitlar -> execute();
            
            echo "<script>window.open('../sayfa/sepetim.php','_self')</script>";
        
        
    }
}
?>
