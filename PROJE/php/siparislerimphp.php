<?php
include 'baglan.php';



$ara = $_SESSION["uye"];
$sorgu = "select * from siparisler where email like '%$ara%'";

$kayitlar = $DBConnection -> prepare($sorgu);
$kayitlar -> execute();




if($kayitlar->rowCount()){
	    echo '<div class="table-responsive">';
        echo '<table class="table table-bordered border-primary">';
        echo '<thead>';
        echo '<tr>';
        
        echo '<th scope="col">Ürün Adı</th>';
        echo '<th scope="col">Kargo Durumu</th>';
		echo '<th scope="col">Kargo Takip No</th>';
        echo '</tr>';
        echo '</thead>';
	
	
	
	    while($satir= $kayitlar->fetch(PDO::FETCH_ASSOC)){
			echo '<tbody>';
            echo '<tr>';
           
            echo '<td>';
            echo '<input style="border:none transparent;outline:none;" name="urunismi" value="'.$satir['urun'].'">';
            echo '</td>';
              if($satir['kargodurumu'] == "Kargoya verilmedi.") {
                echo '<td>';
                echo '<input type="button" class="btn btn-danger" style="border:none transparent;outline:none;cursor:default;" name="adet" value="'.$satir['kargodurumu'].'">';
                echo '</td>';
			    echo '<td>';
                echo '<input style="border:none transparent;outline:none;" name="takipno" value="'.$satir['takipno'].'">';
                echo '</td>';
            } else {
                echo '<td>';
                echo '<input type="button" class="btn btn-success" style="border:none transparent;outline:none;cursor:default;" name="adet" value="'.$satir['kargodurumu'].'">';
                echo '</td>';
				echo '<td>';
                echo '<input style="border:none transparent;outline:none;" name="takipno" value="'.$satir['takipno'].'">';
                echo '</td>';
				
            }
           		   
		   
            echo '</tr>';
            echo '</tbody>';
					
			}
			echo '</table>';
            echo '</div>';
            echo '<hr class="my-3">';
           
}



?>