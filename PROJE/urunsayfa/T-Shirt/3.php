<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <link rel="stylesheet" href="../../css/b.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="css/searchStyle.css">
    <title></title>
	
  </head>
  <body>
   
    <header>
     
      <section class="nav-bar navbar-dark bg-dark">
        <div class="container-fluid px-0">
          <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="../../index.php">
            <img src="../../images/ova.png" class="d-inline-block align-top " alt="ovakent">
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
                            <a class="dropdown-item" href="../../sayfa/hesapbilgileri.php">Hesap Bilgileri</a>
                            <a class="dropdown-item" href="../../sayfa/sepetim.php">Sepetim</a>
                            <a class="dropdown-item" href="../../sayfa/siparislerim.php">Siparislerim</a>
                            <a class="dropdown-item" href="../../sayfa/sifre.php">Sifre Degistir</a>
                            
                          </div>
                          </div>';
                        echo '</li>';
                        echo '<li class="nav-item active">';
                        echo '<a class="btn btn-outline-primary" href="../../php/cıkısyap.php">Çıkış Yap</a>';
                        echo '</li>';
                        echo '</ul>';
                    } else {
                        echo '<ul class="navbar-nav">';
                        echo '<li class="nav-item active">';
                        echo '<a class="btn btn-outline-primary mr-2" href="../../sayfa/kayit.php">Kayıt Ol</a>';
                        echo '</li>';
                        echo '<li class="nav-item active">';
                        echo '<a class="btn btn-outline-primary" href="../../sayfa/giris.php">Giriş Yap</a>';
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
     
      <section class="category-nav">
        <div class="container-fluid">
          <ul class="nav justify-content-center">
            
			
			
			
			  <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn Secondary link dropdown-toggle" type="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kadın
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                             <a class="dropdown-item" href="../kadingiyim.php">Giyim</a>
                            <a class="dropdown-item" href="../ayakkabi.php">Ayakkabı</a>
                            <a class="dropdown-item" href="../aksesuar.php">Aksesuar</a>
                            <a class="dropdown-item" href="../canta.php">Çanta</a>
                            
                        </div>
                      </div>
                </li>
			
			     <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn Secondary link dropdown-toggle" type="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Erkek
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="../erkekgiyim.php">Giyim</a>
                            <a class="dropdown-item" href="../ayakkabi.php">Ayakkabı</a>
                            <a class="dropdown-item" href="../saat.php">Saat</a>
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
                            <a class="dropdown-item" href="../cocukgiyim.php">Bebek</a>
                            <a class="dropdown-item" href="../cocukgiyim.php">Kız Çocuk</a>
                            <a class="dropdown-item" href="../cocukgiyim.php">Erkek Çocuk</a>
                            <a class="dropdown-item" href="../cocukgiyim.php">Bebek Bakım</a>
                            
                        </div>
                      </div>
                </li>
			
			
			
			
           
			<li class="nav-item">
              <a class="nav-link" href="../gomlek.php">Gömlek</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="../tshirt.php">T-Shirt</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="../pantolon.php">Pantolon</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../ayakkabi.php">Ayakkabı</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../canta.php">Çanta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../aksesuar.php">Aksesuar</a>
            </li>
			 <li class="nav-item">
              <a class="nav-link" href="../kozmetik.php">Kozmetik</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../saat.php">Saat</a>
            </li>
            
            
          </ul>
        </div>
      </section>
    </header>
   



 <br class="my-10">
   
    <br class="my-10">

    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">

                <div class="card p-0 border-0 shadow">
                    <div class="card-body">
                       
                        <div id="carousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel" data-slide-to="0" class="active" style="background-color:gray;"></li>
                                <li data-target="#carousel" data-slide-to="1" style="background-color:gray;"></li>
                                <li data-target="#carousel" data-slide-to="2" style="background-color:gray;"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://cdn.dsmcdn.com/mnresize/1200/1800/ty114/product/media/images/20210520/5/89733890/175924394/0/0_org_zoom.jpg" class="d-block w-100" height="600" alt="cimbizaracgerec16">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://cdn.dsmcdn.com/mnresize/1200/1800/ty116/product/media/images/20210520/5/89733890/175924394/1/1_org_zoom.jpg" class="d-block w-100" height="600" alt="cimbizaracgerec16-1">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://cdn.dsmcdn.com/mnresize/1200/1800/ty116/product/media/images/20210520/5/89733890/175924394/2/2_org_zoom.jpg" class="d-block w-100" height="600" alt="cimbizaracgerec16-2">
                                </div>
                                </div>
                                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color:gray; border-radius: 2px;"></span>
                                <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true" style="background-color:gray; border-radius: 2px;"></span>
                                <span class="sr-only">Next</span>
                                </a>
                          </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <form method="POST" action="../../php/sepetekle.php">
                    <h1><input type="text" style="border:none transparent;outline:none;text-align:left;font-weight:500;" id="urunAdi" name="urunAdi" value=" Panda Baskılı Tshirt" readonly></h1>
                    
                    <hr>

                    <h6>Pasage Oversize Panda Baskılı Tshirt </h6>
                    <ul class="unstyled">
                        <li class="text-muted">
                            * Oversize - Geniş Kalıp * %100 Pamuk, Örme Kumaş * Unisex * Yaka Detayı Ribanadır. * Elde ve ya Makinede 800 devirde maksimum 30 derecede tersten yıkama yapınız. * Beden tablosu görsellerde mevcuttur. Beden tablosuna göre siparişinizi oluşturabilirsiniz. * Ürünlerimiz sizler için özel tasarlanmış silindir kutunun içerisinde gönderilmektedir. * Pasage tarafından özenle seçilen ve sizler için özel olarak tasarlanan kumaşlara su bazlı ve %100 organik boyalarla baskılar gerçekleştiriyoruz. Boyalarımız kumaşla birlikte esneyerek hava almasını sağlar. Aldığınız her bir Pasage ürününün etiketinde bu organikliği hissedeceksiniz. Biz sizler için tasarlıyoruz ve tabii ki sizlerin sağlığı ve rahatı bizler için son derece önemli. Pasage markası altında her şeyi Oeko-Tex sertifikalı pamuktan ve boyalardan üretiyoruz. Üretimde kumaşların hassas ciltlere hak ettikleri özeni gösterecek yumuşaklıkta olmasına özellikle dikkat ediyoruz.
                        </li>
                        
                        <li class="text-muted">
                            Konsept çekimlerinde renkler ışık farklılığından dolayı değişiklik gösterebilir
                        </li>
						
						
						<li class="text-muted">
                           Kampanya fiyatından satılmak üzere 100 adetten fazla stok sunulmuştur.
                        </li>
						
                    </ul>
                   
					<h2 class="float-right text-danger"><input type="text" class="text-danger mb-5" style="border:none transparent;outline:none;text-align:right;font-weight:500;" id="urunFiyat" name="urunFiyati" value="89" readonly>TL  <small><span class="text-secondary" style="text-align:right"><del>184TL</del></span></small></h2>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <div class="input-group">
                        <input class="form-control" type="number" min="1" placeholder="Adet" id="urunAdet" name="urunAdet" required>
                            <div class="input-group-append">
                                <button class="btn btn-warning" name="sepeteEkle" id="sepeteEkle">Sepete Ekle</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>

        <br class="my-10">
        <br class="my-10">
        <br class="my-10">
        <hr class="my-5">
    </div>









  
  
  

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
                      
                            <a href="../../sayfa/hakkimizda.php" >Hakkımızda</a>
                </div>

                <div class="col-6 col-md-3">
                    
                    <ul class="list-unstyled">
                        <li>
                            <a href="../../sayfa/kayitkosullari.php" >Kayıt Koşulları</a>
                        </li>
                        <li>
                            <a href="../../sayfa/sikcasorulansorular.php">Sıkça Sorulan Sorular</a>
                        </li>
                       

                </div>
				 <div class="col-6 col-md-3">
                   
                    <ul class="list-unstyled">
                      
                             <li>
                            <a href="../../sayfa/musterihizmetleri.php">Satış Sözleşmesi ve Müşteri Hizmetleri</a>
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
