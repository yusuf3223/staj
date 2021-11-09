<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <link rel="stylesheet" href="../css/b.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="css/searchStyle.css">
    <title>admin</title>
	
  </head>
  <body>
   
    <header>
      
      <section class="nav-bar navbar-dark bg-dark">
        <div class="container-fluid px-0">
          <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="../index.php">
            <img src="../images/ova.png" class="d-inline-block align-top " alt="ovakent">
        </a>
            
           
            <div class="collapse navbar-collapse pr-5" id="navbarNav">
              <div class="mr-auto"></div>
              <ul class="navbar-nav">
               
                <li class="nav-item item-2">
                
				
				<form method="post">
                <?php
                    
                        echo '<ul class="navbar-nav">';
                       
                        echo '<li class="nav-item active">';
                        echo '<a class="btn btn-outline-primary" href="../php/cıkısyap.php">Çıkış Yap</a>';
                        echo '</li>';
                        echo '</ul>';
                  
                ?>
                
				</form>
				
				
				
				
				 
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </section>
     
      
    </header>
   
   
 







 <br class="my-10">
   <br class="my-10">
   <br class="my-10">
   <br class="my-10">
 



<div class ="container">
<div class="row">
<div class="card mx-auto">
<div class="card-header bg-bremary" >
			 <h4 style="text-align:center">Siparis İzleme Bölümü</h4>
            </div>
     <div class="card-body">
                            
              <?php
include '../php/baglan.php';




$sorgu = "select * from siparisler";

$kayitlar = $DBConnection -> prepare($sorgu);
$kayitlar -> execute();




if($kayitlar->rowCount()){
	    echo '<div class="table-responsive">';
        echo '<table class="table table-bordered border-primary">';
        echo '<thead>';
        echo '<tr>';
        echo '<th scope="col">Email</th>';
        echo '<th scope="col">Tarih</th>';
		
		echo '<th scope="col">Adres</th>';
        
		echo '<th scope="col">Urun İsmi</th>';
		echo '<th scope="col">İşlem</th>';
        echo '</tr>';
        echo '</thead>';
	
	
	
	    while($satir= $kayitlar->fetch(PDO::FETCH_ASSOC)){
			if($satir['kargodurumu'] == "Kargoya verilmedi."){
			echo '<tbody>';
            echo '<tr>';
           
		    echo '<td>';
            echo '<input style="border:none transparent;outline:none;" name="email" value="'.$satir['email'].'">';
            echo '</td>';
			
            echo '<td>';
            echo '<input style="border:none transparent;outline:none;" name="urunismi" value="'.$satir['tarih'].'">';
            echo '</td>';
						
			
			echo '<td>';
            echo '<input style="border:none transparent;outline:none;" name="urunismi" value="'.$satir['adres'].'">';
            echo '</td>';
			
				
			echo '<td>';
            echo '<input style="border:none transparent;outline:none;" name="urunismi" value="'.$satir['urun'].'">';
            echo '</td>';
			
			echo '<td>';
            echo '<button class="btn btn-primary float-left" data-toggle="modal" data-target="#siparisModal">Kargoya Ver</button>
                            <div class="modal fade" id="siparisModal" tabindex="-1" role="dialog" aria-labelledby="siparisModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                           
                                            <div class="modal-body">
                                                <form action="../php/kargo.php" method="POST">
                                                  
                                                    <div class="form-group">
                                                        <label for="kargotakip" class="col-form-label">Kargo Takip No Olustur</label>
                                                        <input type="text" name="kargotakip" class="form-control">
                                                    </div>
													
													<div class="form-group">
                                                        <label for="adres" class="col-form-label">Alıcı Email</label>
                                                        <input type="name" name="email" class="form-control">
                                                    </div>
                                                  
                                                    <hr class="my-5">
                                                    <div class="form-group">
                                                     
                                                        <button type="submit" class="btn btn-primary" id="kargover" name="kargover">kargoya Ver</button>
                                                    </div>
                                                </form>
                                            </div>
                                           
                                        </div>
                                </div>
                            </div>';
            echo '</td>';
            
           		   
		   
            echo '</tr>';
            echo '</tbody>';
					
			}
			 	
				
			}
			
			echo '</table>';
            echo '</div>';
            echo '<hr class="my-3">';
           
}



?>               
                            
							
                                                                            
                            
</div>
</div>
</div>
</div>





   
   
   
   <br class="my-10">
   <br class="my-10">
   <br class="my-10">
   <br class="my-10">
   
   



















    <!-- Boostrap js -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js " integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js " integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js " integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6 " crossorigin="anonymous "></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
  
  </body>
</html>
