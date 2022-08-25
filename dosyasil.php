<?php 


if (isset($_POST['dosyasil'])) {

$dosyaadi = $_POST['dosyaadi'];

	if (empty($dosyaadi)) {
		
		echo "Dosya Adı boş geçilemez";

	}else {

		// dosya  uzantısı kontrolü yapılıyor.

		$noktavarmi = strstr($dosyaadi, ".");

		if (!$noktavarmi) {
			
			echo "Dosya uzantası giriniz";
		
		}else {

           $dosyavarmi = file_exists($dosyaadi);

             if (!$dosyavarmi) {
               
               echo "Girilen isimde  dosya bulunmamaktadır.";

             }else {
             	
                $dosyasilindimi = unlink($dosyaadi);
             
                if ($dosyasilindimi) {
                	echo "Dosya silme işlemi başarılı..";
                }else {
                	echo "Dosya silme işlemi başarısız";
                }
             }
		}
	}

}


?>

<link rel="stylesheet" type="text/css" href="css/sil.css">

<form method="post" action="dosyasil.php">
	<div class="container">
		<input type="text" autofocus placeholder="Dosya adı giriniz" name="dosyaadi">
		<input type="submit" value="Sil" name="dosyasil">
<a class="mainpage" href="index.php">Anasayfa</a>
	</div>
</form>