<?php

$db = new PDO("mysql:host=localhost;dbname=uyelik;charset=utf8", "root", "adminadmin");


$kadi = $_POST['kadi'];
$mail = $_POST['mail'];
$tel = $_POST['tel'];
$adres = $_POST['adres'];
$pw = $_POST['pw'];

if (!$kadi || !$mail || !$tel || !$adres || !$pw ) {
    die("lütfen boş alan bırakmayınız.");
}

$ekle = $db->prepare("INSERT INTO uye SET uye_adi = ?, uye_mail = ?, uye_tel = ?, uye_adres = ?, uye_pw = ?");
$ekle->execute([$kadi, $mail, $tel,$adres,$pw]);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    

                <h2 class="display-2" style="text-align:center; margin-top:300px; color:red;"><?php 
                if ($ekle) { 
                    echo "TEŞEKKÜRLER... GİRİŞ YAPABİLİRSİNİZ";

                    header("refresh: 4; url=index.php");
                }                  
                else {
                         echo "Bir hata oluştu. Ana sayfaya Yönlendiriliyorsunuz....";

                        header("refresh: 4; url=index.php");
                }       
                ?></h2>
                
                
                <div class="d-flex justify-content-center">
  <div class="spinner-border" role="status">
    <span class="sr-only">Loading...</span>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
			


</body>
</html>