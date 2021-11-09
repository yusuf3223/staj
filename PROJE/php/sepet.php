<?php
include 'baglan.php';


$ara = $_SESSION["uye"];
$sorgu = "select * from sepetim where email like '%$ara%'";

$kayitlar = $DBConnection -> prepare($sorgu);
$kayitlar -> execute();

if($kayitlar->rowCount()){
	    echo '<div class="table-responsive">';
        echo '<table class="table table-bordered border-primary">';
        echo '<thead>';
        echo '<tr>';
        echo '<th scope="col">Email</th>';
        echo '<th scope="col">Ürün Adı</th>';
        echo '<th scope="col">adet</th>';
        echo '<th scope="col">fiyat</th>';
		echo '<th scope="col">Sepete Ekleme Tarihi</th>';
        echo '</tr>';
        echo '</thead>';
	
	
	
	    while($satir= $kayitlar->fetch(PDO::FETCH_ASSOC)){
			echo '<tbody>';
            echo '<tr>';
            echo '<td>';
            echo '<input style="border:none transparent;outline:none;" name="email" value="'.$satir['email'].'">';
            echo '</td>';
            echo '<td>';
            echo '<input style="border:none transparent;outline:none;" name="urunismi" value="'.$satir['urunismi'].'">';
            echo '</td>';
            echo '<td>';
            echo '<input style="border:none transparent;outline:none;" name="adet" value="'.$satir['adet'].'">';
            echo '</td>';
            echo '<td>';
            echo '<input style="border:none transparent;outline:none;" name="fiyat" value="'.$satir['fiyat'].'">';
            echo '</td>';
			echo '<td>';
            echo '<input style="border:none transparent;outline:none;" name="tarih" value="'.$satir['tarih'].'">';
            echo '</td>';
            echo '</tr>';
            echo '</tbody>';
					
			}
			echo '</table>';
            echo '</div>';
            echo '<hr class="my-3">';
	
}



?>