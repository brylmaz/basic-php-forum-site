<?php
    session_start();
    if (isset($_SESSION['user'])) {
        
        header("location:girisindex.php");
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForumSitesi.org</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="brs.css">

</head>
<body>

<div class="container">
  <div class="row">

<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
     <img src="http://localhost:82/Sitem/image/indir.png" width="30" height="30" class="d-inline-block align-top" alt=""> 
    ForumSitesi.org
  </a>
</nav>




  <div class="col-12">
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">ANASAYFA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="iletisim.php">İletişim <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="hakkinda.php">Hakkında</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Açılır menu
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">İçerik 1</a>
          <a class="dropdown-item" href="#">İçerik 2</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">İçerik 3</a>
        </div>
      </li>
      <li class="nav-item">
        
      </li>
    </ul>
    <div class="form-inline my-2 my-lg-0">
      <div class="container">
		<div class="row">
			<!-- Button trigger modal -->
                    <div class="">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uyegiris">
                        Üye Giriş
                      </button>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kayitol">
                        Kayıt Ol
                      </button>
                    </div>
			
			<!-- Modal -->
                      <div class="modal fade" id="kayitol" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Ücretsiz Kayıt OL</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              
                              <form action="kayit.php" method="POST">
                                <label>Ad Soyad</label>
                                <input class="form-control" type="text" name="kadi">
                                <label>Mail Adresi</label>
                                <input class="form-control" type="email" name="mail">
                                <label>Telefon</label>
                                <input class="form-control" type="number" name="tel">
                                <label>Adres</label>
                                <input class="form-control" type="text" name="adres">
                                <label>Şifreniz</label>
                                <input class="form-control" type="password" name="pw">
                                <br>
                                <button type="submit" class="btn btn-success">Kayit OL</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
                              </form>
                              
                            </div>
                          </div>
                        </div>
                      </div>

			<!-- Modal -->
                      <div class="modal fade" id="uyegiris" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Üye Giriş</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form action="giris.php" method="POST">
                                <label>Kullanıcı Adınız</label>
                                <input class="form-control" type="text" name="kadi">
                                <label>Şifreniz</label>
                                <input class="form-control" type="password" name="pw">
                                <br>
                                <button type="submit" class="btn btn-primary">Giriş Yap</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>	
    </div> 
    </div>
  </div>
</nav>

    </div>

  
  
              <div id="carouselExampleIndicators" class="carousel slide brs" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="http://localhost:82/Sitem/image/iStock-520374378.jpg" class="d-block img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="http://localhost:82/Sitem/image/macbook-calendar-scheduled.jpeg" class="d-block img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="http://localhost:82/Sitem/image/effective-study-habits.jpg" class="d-block img-fluid" alt="...">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>    
  
  

  








<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
			


</div>	 


          <form action="veriler.php" method="GET">
                <div class="alert alert-success">
                  <strong>SEZAR ŞİFRELEMESİ!</strong> Bir kelime yaz ve şifreli halini gör.
                  
                 
                  

                 <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary" type="submit" name="gonder">ŞİFRELE</button>
            
                      </div>
          
                   
                    
                    
                    <input type="text" class="form-control" placeholder="" aria-label="" name="sezarname" aria-describedby="basic-addon1" value=" ">
          
          
                  </div>

                </div>
        
          </form>

          




</body>
</html>