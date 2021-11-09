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
    <title>Sıkca sorulan sorular</title>
	
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
   
   
   
   
   
   
   
   
   
    <div class="container my-5">
        <h1 data-aos="fade-up" class="display-3 text-center mb-2">Sıkça Sorulan Sorular</h1>
        <br>
        <h3 class="display-4 mb-2">Üyelik Hakkında Sorular</h3>
        <div class="panel-group" id="accordion">
          <div class="card ">
            <div class="card-header text-white bg-primary mb-3">
                <h5 class="card-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="color: white;">Nasıl üye olabilirim?</a>
                </h5>
              </div>
              <div id="collapse1" class="panel-collapse collapse in">
                <div class="card-body">
                    Electrobot.com’dan “ÜYE OL” linkine tıklayarak,üyelik formunu doldurup hemen üye olabilir ve alışverişe başlayabilirsiniz. Sitemize üye olmak için herhangi bir ücret ödemeniz gerekmemektedir.
                </div>
              </div>
            </div>
            <div class="card ">
              <div class="card-header text-white bg-primary mb-3">
                <h5 class="card-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" style="color: white;">Üye olmadan da alışveriş yapabilir miyim?</a>
                </h5>
              </div>
              <div id="collapse2" class="panel-collapse collapse">
                <div class="card-body">Electrobot'da üye olmadan da alışveriş yapamazsınız. </div>
              </div>
            </div>
            <div class="card ">
              <div class="card-header text-white bg-primary mb-3">
                <h5 class="card-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" style="color: white;">Şifremi unuttum ne yapmalıyım?</a>
                </h5>
              </div>
              <div id="collapse3" class="panel-collapse collapse">
                <div class="card-body">Şifrenizi unuttuysanız, üye girişi bölümünde bulunan ‘ŞİFREMİ UNUTTUM’ linkine tıklayıp, gelen sayfadaki kutuya üye olurken belirttiğiniz e-posta adresinizi yazmanız yeterli olacaktır. Şifrenizi değiştirebilmeniz içim mail adresinize bir link gönderilecektir. Linke tıklayarak yeni bir şifre belirleyebilirsiniz. </div>
              </div>
            </div>
            <div class="card ">
              <div class="card-header text-white bg-primary mb-3">
                <h5 class="card-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" style="color: white;">Kişisel verilerim korunuyor mu?</a>
                </h5>
              </div>
              <div id="collapse4" class="panel-collapse collapse">
                <div class="card-body">Electrobot sitesine  üye olurken ve alışveriş yaparken sağladığınız kişisel verileriniz 6698 sayılı Kişisel Verilerin Korunması Kanunu (“KVKK”) uyarınca işleme amacı ile bağlantılı, sınırlı ve ölçülü olacak şekilde, işlenmelerini gerektiren amaç çerçevesinde kaydedilir, depolanır, muhafaza edilir, yeniden düzenlenir, hukuken bu kişisel verileri talep etmeye yetkili olan kurumlar ile paylaşılır, KVKK’nın ve diğer kanunların öngördüğü koşullarda üçüncü kişilere aktarılabilir, devredilebilir ve KVKK’da sayılan diğer şekillerde işlenebilir.</div>
              </div>
            </div>
            <br>
            <h3 class="display-4 mb-2">Sipariş İle İlgili Sorular</h3>
            <div class="card ">
              <div class="card-header text-white bg-primary mb-3">
                  <h5 class="card-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" style="color: white;">Siparişimde değişiklik yapabilir miyim?</a>
                  </h5>
                </div>
                <div id="collapse5" class="panel-collapse collapse">
                  <div class="card-body">Siparişinizin içerisinde değişiklik yapılamamaktadır. Siparişinizde değişiklik yapmak isterseniz eğer siparişiniz kargoya verilmediyse eski siparişinizin ödemesi iade edilir. Daha sonra tekrar yeni bir sipariş oluşturmanız gerekmektedir. Eğer siparişiniz kargoya teslim edildiyse ürünleri tarafımıza değişim talebiyle göndermeniz gerekmektedir.</div>
                </div>
              </div>
              <div class="card ">
                <div class="card-header text-white bg-primary mb-3">
                  <h5 class="card-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse6" style="color: white;">Alışverişlerimde hangi ödeme seçeneklerini kullanabilirim?</a>
                  </h5>
                </div>
                <div id="collapse6" class="panel-collapse collapse">
                  <div class="card-body">Siparişlerinizin ödemesini, Kredi Kartı, Kapıda Ödeme, Banka Kartı, Havale/EFT ve BKM yöntemi ile gerçekleştirebilirsiniz.</div>
                </div>
              </div>
              <div class="card ">
                <div class="card-header text-white bg-primary mb-3">
                  <h5 class="card-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse7" style="color: white;">Siparişim ne kadar sürede elime ulaşır?</a>
                  </h5>
                </div>
                <div id="collapse7" class="panel-collapse collapse">
                  <div class="card-body">Siparişiniz, ödemenizin onaylanmasından sonra ortalama 2-3 iş günü içerisinde kargoya teslim edilecektir. Özel gün ve haftalar, resmi tatil dönemlerinde ve olağanüstü durumlarda, ürün teslimatlarında gecikmeler yaşanabilir.</div>
                </div>
              </div>
              <div class="card ">
                <div class="card-header text-white bg-primary mb-3">
                  <h5 class="card-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse8" style="color: white;">Yurt dışından sipariş verebilir miyim?</a>
                  </h5>
                </div>
                
                <div id="collapse8" class="panel-collapse collapse">
                  <div class="card-body">Yurtdışından sipariş henüz verilememektedir.</div>
                </div>
                </div>
                <div class="card ">
                  <div class="card-header text-white bg-primary mb-3">
                      <h5 class="card-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse9" style="color: white;">Aldığım ürünlerin fiyatına KDV dahil mi?</a>
                      </h5>
                    </div>
                    <div id="collapse9" class="panel-collapse collapse">
                      <div class="card-body">Sitemizde görmüş olduğunuz tüm fiyatlara KDV dahildir.</div>
                </div>
            </div>
            <div class="card ">
              <div class="card-header text-white bg-primary mb-3">
                        <h5 class="card-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse10" style="color: white;">Mesafeli satış sözleşmesi nedir?</a>
                        </h5>
                    </div>
                    <div id="collapse10" class="panel-collapse collapse">
                        <div class="card-body">Online alışveriş gibi uzaktan gerçekleştirilen satışlarda tüketiciyi koruma amaçlı düzenlenmiş ve tüketicinin siparişini oluşturmadan önce okuyup onaylaması gereken yasal metinlerdir.</div>
                </div>
            </div>
            <div class="card ">
              <div class="card-header text-white bg-primary mb-3">
                      <h5 class="card-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse11" style="color: white;">Siparişimi nasıl iptal edebilirim?</a>
                      </h5>
                    </div>
                    <div id="collapse11" class="panel-collapse collapse">
                      <div class="card-body">Electrobot'da siparişinizi oluşturduktan sonra, eğer ürününüz henüz paketlenmediyse, ''Hesabım/Sipariş Detayı''bölümünden ''Siparişi İptal Et'' butonuna tıklayarak siparişinizin iptal talebini tarafımıza gönderebilirsiniz. Siparişiniz gün içerisinde iptal edilecektir.</div>
                    </div>
                </div>
                <br>
                <h3 class="display-4 mb-2">Kargo ve Teslimat İle İlgili Sorular</h3>
                <div class="card ">
                  <div class="card-header text-white bg-primary mb-3">
                      <h5 class="card-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse12" style="color: white;">Hangi kargo firması ile çalışıyorsunuz?</a>
                      </h5>
                    </div>
                    <div id="collapse12" class="panel-collapse collapse">
                      <div class="card-body">Ürünlerimizi Aras Kargo, PTT Kargo ve HepsiJet Kargo ile teslim ediyoruz. Aynı şekilde iadelerinizi de Aras Kargo, PTT Kargo ve HepsiJet Kargo ile bize ücretsiz olarak gönderebilirsiniz.</div>
                </div>
            </div>
            <div class="card ">
              <div class="card-header text-white bg-primary mb-3">
                      <h5 class="card-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse13" style="color: white;">Kargo ücreti ne kadar?</a>
                      </h5>
                    </div>
                    <div id="collapse13" class="panel-collapse collapse">
                      <div class="card-body">Kargo ücreti her bir siparişiniz için ödeme aşamasında geldiğinizde seçmiş olduğunuz kargo firmasına göre hesaplanacaktır.</div>
                </div>
            </div>
            <div class="card ">
              <div class="card-header text-white bg-primary mb-3">
                      <h5 class="card-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse14" style="color: white;">Siparişimin kargoya verildiğini nasıl anlayacağım?</a>
                      </h5>
                    </div>
                    <div id="collapse14" class="panel-collapse collapse">
                      <div class="card-body">Siparişiniz kargoya teslim edildiğinde, sitemize üye olurken kullanmış olduğunuz mail adresinize kargo takip numaranızı da içeren bir bilgilendirme maili gönderilecektir.</div>
                </div>
            </div>
            <div class="card ">
              <div class="card-header text-white bg-primary mb-3">
                      <h5 class="card-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse15" style="color: white;">Siparişimin teslimat adresini değiştirebilir miyim?</a>
                      </h5>
                    </div>
                    <div id="collapse15" class="panel-collapse collapse">
                      <div class="card-body">Sipariş esnasında verilen teslimat adresi daha sonra değiştirilememektedir.</div>
                </div>
            </div>
            <div class="card ">
              <div class="card-header text-white bg-primary mb-3">
                      <h5 class="card-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse16" style="color: white;">Resmi tatil günlerinde teslimat yapılıyor mu?</a>
                      </h5>
                    </div>
                    <div id="collapse16" class="panel-collapse collapse">
                      <div class="card-body">Resmi tatil günlerinde teslimat yapılmamaktadır.</div>
                </div>
            </div>
            <div class="card ">
              <div class="card-header text-white bg-primary mb-3">
                      <h5 class="card-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse17" style="color: white;">Paket hasarlı geldi teslim almalı mıyım?</a>
                      </h5>
                    </div>
                    <div id="collapse17" class="panel-collapse collapse">
                      <div class="card-body">Hasarlı gelen paketleri teslim almayıp, kargo görevlisine paketin hasarlı olduğuna dair tutanak tutturmanız gerekmektedir. Daha sonra siparişinizle ilgili müşteri hizmetlerimizle iletişime geçebilirsiniz.</div>
                </div>
            </div>
            <div class="card ">
              <div class="card-header text-white bg-primary mb-3">
                      <h5 class="card-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse18" style="color: white;">Kapıda ödeme yapabilir miyim?</a>
                      </h5>
                    </div>
                    <div id="collapse18" class="panel-collapse collapse">
                      <div class="card-body">Electrobot'da kapıda ödeme seçeneği mevcuttur. Kapıda ödeme nakit ve kredi kartı ile yapilabilmektedir. Kapıda ödeme hizmet bedeli, kargo bedelinden ayrı olarak 5TL ‘dir. Kapıda ödeme hizmet bedeli ürün/ürünleri iade etmeniz durumunda tarafınıza iade edilmez.</div>
                </div>
            </div>
            <br>
                <h3 class="display-4 mb-2">İade İle İlgili Sorular</h3>
                <div class="card ">
                    <div class="card-header text-white bg-primary mb-3">
                      <h5 class="card-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse19" style="color: white;">İademi nasıl yapacağım?</a>
                      </h5>
                    </div>
                    <div id="collapse19" class="panel-collapse collapse">
                      <div class="card-body">Ürünlerinizi kullanılmamış olmak koşuluyla, tüm ürünleri ve iade formu ile birlikte eksiksiz bir şekilde 30 gün içerisinde ücretsiz olarak iade edebilirsiniz.</div>
                </div>
            </div>
                <div class="card ">
                    <div class="card-header text-white bg-primary mb-3">
                      <h5 class="card-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse20" style="color: white;"> İade süreci nasıl işliyor?</a>
                      </h5>
                    </div>
                    <div id="collapse20" class="panel-collapse collapse">
                      <div class="card-body">
                        -Paketten çıkan iade formunu eksiksiz olarak doldurunuz <br>
                        -İade etmek istediğiniz ürünün kodu, adı, iade nedeni ve istenen diğer bilgiler eksiksiz olarak dordurulmalıdır. <br>
                        -Almış olduğunuz ürünleri, anlaşmalı olduğumuz kargo firması PTT Kargo ve  Aras Kargo ile ücretsiz olarak gönderebilirsiniz. <br>
                        -Aras Kargo müşteri numaramız: 1423538011147. PTT Kargo müşteri numaramız: 703416566. <br>
                        -Bu kodu kargo paketinin üzerine yazınız. <br>
                        -Aras Kargo ve PTT Kargo dışındaki kargo firmaları ile gönderilen iadelerin kargo ücreti müşterimize aittir. <br>
                        -İadeniz öncelikle Electrobot müşteri temsilcileri tarafından incelenecek, yukarıda belirtilen şartlara uygun olup olmadığı araştırılacaktır. <br>
                        -İade prosedürlerine uygun olan ürünlerin iadesi onaylanacak, ürün ücreti 2 iş günü içerisinde hesabınıza yatırılacaktır. Bu ücretin hesabınıza yansıması banka prosedürleri gereği 7-15 iş gününü bulabilmektedir. <br>
                        -Bu 2 günlük süre, Electrobot'nin iade ettiğiniz ürünü almasıyla başlayacaktır.
                      </div>
                </div>
            </div>
                <div class="card ">
                    <div class="card-header text-white bg-primary mb-3">
                      <h5 class="card-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse21" style="color:white;">Ürünü nasıl değiştireceğim?</a>
                      </h5>
                    </div>
                    <div id="collapse21" class="panel-collapse collapse">
                      <div class="card-body"  >
                        -Ürün değişimi için, değişim talebinde bulunduğunuz ürünle beraber paketin içinde bulunan iade/değişim formu üzerine, yerine almak istediğiniz ürünün kodunu ve beden bilgisini yazarak Aras Kargo ile tarafımıza ücretsiz olarak gönderebilirsiniz. <br>
                        -Yerine almak istediğiniz ürün eğer stoklarımızda varsa değişim işleminiz gerçekleştirilecektir. <br>
                        -İstediğiniz ürünün stoklarımızda olmadığı görülürse, müşteri temsilcilerimiz size telefon ile ulaşacaklardır. <br>
                        -Aras Kargo dışındaki kargo firmaları ile gönderilen değişimlerin kargo ücreti müşterimize aittir .
                      </div>
                </div>
            </div>
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
