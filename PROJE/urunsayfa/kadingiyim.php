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
    <title></title>
	
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
                            Hesab??m
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="../sayfa/hesapbilgileri.php">Hesap Bilgileri</a>
                            <a class="dropdown-item" href="../sayfa/sepetim.php">Sepetim</a>
                            <a class="dropdown-item" href="../sayfa/siparislerim.php">Siparislerim</a>
                            <a class="dropdown-item" href="../sayfa/sifre.php">Sifre Degistir</a>
                            
                          </div>
                          </div>';
                        echo '</li>';
                        echo '<li class="nav-item active">';
                        echo '<a class="btn btn-outline-primary" href="../php/c??k??syap.php">????k???? Yap</a>';
                        echo '</li>';
                        echo '</ul>';
                    } else {
                        echo '<ul class="navbar-nav">';
                        echo '<li class="nav-item active">';
                        echo '<a class="btn btn-outline-primary mr-2" href="../sayfa/kayit.php">Kay??t Ol</a>';
                        echo '</li>';
                        echo '<li class="nav-item active">';
                        echo '<a class="btn btn-outline-primary" href="../sayfa/giris.php">Giri?? Yap</a>';
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
                            Kad??n
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                 <a class="dropdown-item" href="kadingiyim.php">Giyim</a>
                            <a class="dropdown-item" href="ayakkabi.php">Ayakkab??</a>
                            <a class="dropdown-item" href="aksesuar.php">Aksesuar</a>
                            <a class="dropdown-item" href="canta.php">??anta</a>
                        </div>
                      </div>
                </li>
			
			     <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn Secondary link dropdown-toggle" type="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Erkek
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                             <a class="dropdown-item" href="erkekgiyim.php">Giyim</a>
                            <a class="dropdown-item" href="ayakkabi.php">Ayakkab??</a>
                            <a class="dropdown-item" href="saat.php">Saat</a>
                            <a class="dropdown-item" href="#">Ki??i??el Bak??m</a>
                            
                        </div>
                      </div>
                </li>
				
				<li class="nav-item">
                    <div class="dropdown">
                        <button class="btn Secondary link dropdown-toggle" type="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ??ocuk
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                           <a class="dropdown-item" href="cocukgiyim.php">Bebek</a>
                            <a class="dropdown-item" href="cocukgiyim.php">K??z ??ocuk</a>
                            <a class="dropdown-item" href="cocukgiyim.php">Erkek ??ocuk</a>
                            <a class="dropdown-item" href="cocukgiyim.php">Bebek Bak??m</a>
                            
                        </div>
                      </div>
                </li>
			
			
			
			
           
			<li class="nav-item">
              <a class="nav-link" href="gomlek.php">G??mlek</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="tshirt.php">T-Shirt</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="pantolon.php">Pantolon</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ayakkabi.php">Ayakkab??</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="canta.php">??anta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aksesuar.php">Aksesuar</a>
            </li>
			 <li class="nav-item">
              <a class="nav-link" href="kozmetik.php">Kozmetik</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="saat.php">Saat</a>
            </li>
            
            
          </ul>
        </div>
      </section>
    </header>
   
<br><br>

<div class="text-center">
  <h5> Kad??n Giyim</h5>
</div>





 
 
<div class="container">
<div class="row">

 




<div class="col-md-3 col-sm-6 p-3">
<div class="card text-center">
<div class="card-block">
<img src="https://cdn.dsmcdn.com/mnresize/1200/1800/ty124/product/media/images/20210604/14/95922805/183030197/1/1_org_zoom.jpg" class="img-fluid">
<div class="card-title">
<h5>Aerobin Kuma?? Elbise</h5>
</div>

<h6 class="text-center py4">
 <small><span class="text-secondary"><del>246TL</del></span></small>
 <big><span class="text-danger">123TL</span></big>
</h6>


<a style="margin-top: 10px;" href="Kad??ngiyim/1.php" class="btn btn-outline-secondary btn-block">Sat??n Al</a>


</div>
</div>
</div>









<div class="col-md-3 col-sm-6 p-3">
<div class="card text-center">
<div class="card-block">
<img src="https://cdn.dsmcdn.com/mnresize/1200/1800/ty143/product/media/images/20210707/17/107977600/199029564/1/1_org_zoom.jpg" class="img-fluid">
<div class="card-title">
<h5> Flok Kuma?? Astarl?? Elbise </h5>
</div>

<h6 class="text-center py4">
 <small><span class="text-secondary"><del>219TL</del></span></small>
 <big><span class="text-danger">185TL</span></big>
</h6>


<a style="margin-top: 10px;" href="Kad??ngiyim/2.php" class="btn btn-outline-secondary btn-block">Sat??n Al</a>


</div>
</div>
</div>




<div class="col-md-3 col-sm-6 p-3">
<div class="card text-center">
<div class="card-block">
<img src="https://cdn.dsmcdn.com/mnresize/1200/1800/ty154/product/media/images/20210806/19/116371039/223198594/1/1_org_zoom.jpg" class="img-fluid">
<div class="card-title">
<h5>D????meli Keten Elbise </h5>
</div>

<h6 class="text-center py4">
 <small><span class="text-secondary"><del>200TL</del></span></small>
 <big><span class="text-danger">104TL</span></big>
</h6>


<a style="margin-top: 10px;" href="Kad??ngiyim/3.php" class="btn btn-outline-secondary btn-block">Sat??n Al</a>


</div>
</div>
</div>


<div class="col-md-3 col-sm-6 p-3">
<div class="card text-center">
<div class="card-block">
<img src="https://cdn.dsmcdn.com/mnresize/1200/1800/ty144/product/media/images/20210714/12/110303923/203333122/1/1_org_zoom.jpg" class="img-fluid">
<div class="card-title">
<h5> K??sa Kollu Elbise</h5>
</div>

<h6 class="text-center py4">
 <small><span class="text-secondary"><del>219TL</del></span></small>
 <big><span class="text-danger">249TL</span></big>
</h6>


<a style="margin-top: 10px;" href="Kad??ngiyim/4.php" class="btn btn-outline-secondary btn-block">Sat??n Al</a>


</div>
</div>
</div>





















</div>
</div>












  
  
  

    <footer class="bg-dark text-white pt-5 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-3">
                    <h5>??leti??im</h5>
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
                      
                            <a href="../sayfa/hakkimizda.php" >Hakk??m??zda</a>
                </div>

                <div class="col-6 col-md-3">
                    
                    <ul class="list-unstyled">
                        <li>
                            <a href="../sayfa/kayitkosullari.php" >Kay??t Ko??ullar??</a>
                        </li>
                        <li>
                            <a href="../sayfa/sikcasorulansorular.php">S??k??a Sorulan Sorular</a>
                        </li>
                       

                </div>
				 <div class="col-6 col-md-3">
                   
                    <ul class="list-unstyled">
                      
                             <li>
                            <a href="../sayfa/musterihizmetleri.php">Sat???? S??zle??mesi ve M????teri Hizmetleri</a>
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
