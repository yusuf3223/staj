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
    <title>sepetim</title>
	
  </head>
  <body>
    
    <header>
     
      <section class="nav-bar navbar-dark bg-dark">
        <div class="container-fluid px-0">
          <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="../index.php">
            <img src="../images/ova.png" class="d-inline-block align-top " alt="ovakent">
        </a>
            
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse pr-5" id="navbarNav">
              <div class="mr-auto"></div>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <form action="#" class="search-nav form-inline">
                    <input type="text" class="" />
                    <button>
                      <i class="fas fa-search form-control-feedback mb-1"></i>
                    </button>
                  </form>
                </li>
                <li class="nav-item item-2">
                
				
				<form method="post">
                <?php
                    if(isset($_SESSION['uye'])){
                        echo '<ul class="navbar-nav ">';
                        echo '<li class="nav-item active">';
                        echo '<div class="dropdown">
                        <button class="btn Secondary link dropdown-toggle" type="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Hesabım
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="hesapbilgileri.php">Hesap Bilgileri</a>
                            <a class="dropdown-item" href="sepetim.php">Sepetim</a>
                            <a class="dropdown-item" href="siparislerim.php">Siparislerim</a>
                            <a class="dropdown-item" href="sifre.php">Sifre Degistir</a>
                            
                          </div>
                          </div>';
                        echo '</li>';
                        echo '<li class="nav-item active">';
                        echo '<a class="btn btn-outline-primary" href="../php/cıkısyap.php">Çıkış Yap</a>';
                        echo '</li>';
                        echo '</ul>';
                    } else {
                        echo '<ul class="navbar-nav">';
                        echo '<li class="nav-item active">';
                        echo '<a class="btn btn-outline-primary mr-2" href="kayit.php">Kayıt Ol</a>';
                        echo '</li>';
                        echo '<li class="nav-item active">';
                        echo '<a class="btn btn-outline-primary" href="giris.php">Giriş Yap</a>';
                        echo '</li>';
                        echo '</ul>';
                    }
                ?>
                
				</form>
				
				
				
				
				 
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </section>
      <!-- Category navbar -->
      <section class="category-nav">
        <div class="container-fluid">
          <ul class="nav justify-content-center">
            
			
			
			
			  <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn Secondary link dropdown-toggle" type="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kadın
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="../urunsayfa/kadingiyim.php">Giyim</a>
                            <a class="dropdown-item" href="../urunsayfa/ayakkabi.php">Ayakkabı</a>
                            <a class="dropdown-item" href="../urunsayfa/aksesuar.php">Aksesuar</a>
                            <a class="dropdown-item" href="../urunsayfa/canta.php">Çanta</a>
                            
                        </div>
                      </div>
                </li>
			
			     <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn Secondary link dropdown-toggle" type="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Erkek
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="../urunsayfa/erkekgiyim.php">Giyim</a>
                            <a class="dropdown-item" href="../urunsayfa/ayakkabi.php">Ayakkabı</a>
                            <a class="dropdown-item" href="../urunsayfa/saat.php">Saat</a>
                            <a class="dropdown-item" href="#">Kişişel Bakım</a>
                            
                        </div>
                      </div>
                </li>
				
				<li class="nav-item">
                    <div class="dropdown">
                        <button class="btn Secondary link dropdown-toggle" type="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Çocuk
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="../urunsayfa/cocukgiyim.php">Bebek</a>
                            <a class="dropdown-item" href="../urunsayfa/cocukgiyim.php">Kız Çocuk</a>
                            <a class="dropdown-item" href="../urunsayfa/cocukgiyim.php">Erkek Çocuk</a>
                            <a class="dropdown-item" href="../urunsayfa/cocukgiyim.php">Bebek Bakım</a>
                            
                        </div>
                      </div>
                </li>
			
			
			
			
           
			<li class="nav-item">
              <a class="nav-link" href="../urunsayfa/gomlek.php">Gömlek</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="../urunsayfa/tshirt.php">T-Shirt</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="../urunsayfa/pantolon.php">Pantolon</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../urunsayfa/ayakkabi.php">Ayakkabı</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../urunsayfa/canta.php">Çanta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../urunsayfa/aksesuar.php">Aksesuar</a>
            </li>
			 <li class="nav-item">
              <a class="nav-link" href="../urunsayfa/kozmetik.php">Kozmetik</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../urunsayfa/saat.php">Saat</a>
            </li>
            
            
          </ul>
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
			 <h4 style="text-align:center">Sepetim</h4>
            </div>
     <div class="card-body">
                            <form action="../php/sepet.php" method="get">
                                <?php 
                                include "../php/sepet.php";
                                ?>
                            </form>
							 <div class="form-group">
                                                        <label for="toplamFiyat" class=" float-left col-form-label">Toplam Fiyat: &nbsp </label>
                                                        <?php
                                                        include "../php/fiyatopla.php";
                                                        ?>
                                                         <h6 class="float-left text-primary"><label for="toplamFiyat" class=" float-left col-form-label"><?php echo $toplamFiyat; ?> TL &nbsp </label></h6>
														
                                                    </div>
                            <form action="../php/sepetsil.php" method="post">
                            <button class="btn btn-outline-danger float-right ml-2" name="sil" id="sil">sil</button>
                            </form>
                            <button class="btn btn-primary float-left" data-toggle="modal" data-target="#siparisModal">Sipariş Ver</button>
                            <div class="modal fade" id="siparisModal" tabindex="-1" role="dialog" aria-labelledby="siparisModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="siparisModalLabel">Sipariş Ver</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="../php/order.php" method="POST">
                                                    <div class="form-group">
                                                        <label for="toplamFiyat" class="col-form-label">Toplam Fiyat: </label>
                                                       
                                                        <input type="text" class="form-control bg-transparent" id="toplamFiyat" name="toplamFiyat" value=" <?php echo $toplamFiyat; ?> TL" READONLY>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="adres" class="col-form-label">Adres: </label>
                                                        <textarea class="form-control" id="adres" name="adres" rows="5"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="container border border-primary mb-2">
                                                            <label for="hesapNumara" class="col-form-label">Hesap Numarası: </label>
                                                            <input type="text" class="form-control mb-2" id="hesapnumara" name="hesapnumara" maxlength="16">
                                                            <label for="sonKullanmaTarihi" class="col-form-label">Son Kullanma Tarihi: </label>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <input type="text" class="form-control w-100" id="sonkullanmatarihi" name="sonkullanmatarihiay" maxlength="2" placeholder="Ay"> 
                                                                </div>
                                                                <div class="col">
                                                                <input type="text" class="form-control w-100" id="sonkullanmatarihi" name="sonkullanmatarihiyil" maxlength="2" placeholder="Yıl">
                                                                </div>
                                                            </div>
                                                            <label for="cvc2" class="col-form-label">CVC2: </label>
                                                            <input type="text" class="form-control mb-2" maxlength="3" id="cvc2" name="cvc2">
                                                        </div>
                                                    </div>
                                                    <hr class="my-5">
                                                    <div class="form-group">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                                                        <button type="submit" class="btn btn-primary" id="ver" name="ver">Sipariş Ver</button>
                                                    </div>
                                                </form>
                                            </div>
                                            
                                        </div>
                                </div>
                            </div>
                            <br><br>
                        </div>
</div>
</div>
</div>





   
   
   
   <br class="my-10">
   <br class="my-10">
   <br class="my-10">
   <br class="my-10">
   
   
   


  
  
  

    <footer class="bg-dark text-white pt-5 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-3">
                    <h5>İletişim</h5>
                    <ul class="list-unstyled">
                       
						 <li>
                            
							<a class="text-muted">0535 123 11 11</a>
							
                        </li>
						 <li>
                        
							<a class="text-muted">yusuf@gmail.com</a>
                        </li>
						 <li>
                        
							<a class="text-muted">Hatay/Antakya</a>
                        </li>
                    </ul>
                </div>

                

                <div class="col-6 col-md-3">
                   
                    <ul class="list-unstyled">
                      
                            <a href="hakkimizda.php" >Hakkımızda</a>
							
                </div>

                <div class="col-6 col-md-3">
                    
                    <ul class="list-unstyled">
                        <li>
                            <a href="kayitkosullari.php" >Kayıt Koşulları</a>
                        </li>
                        <li>
                            <a href="sikcasorulansorular.php">Sıkça Sorulan Sorular</a>
                        </li>
                       

                </div>
				 <div class="col-6 col-md-3">
                   
                    <ul class="list-unstyled">
                      
                             <li>
                            <a href="musterihizmetleri.php">Satış Sözleşmesi ve Müşteri Hizmetleri</a>
                        </li>
                </div>
				
            </div>
    </footer>


















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
