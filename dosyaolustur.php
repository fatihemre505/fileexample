<?php 

if(isset($_POST['dosyaolustur'])) {

	$dosyaadi = $_POST['dosyaadi'];
 	
 	if (empty($dosyaadi)) {

 		echo "dosya adı  boş geçilemez";
 
 	}else {
 
 	// string  içerisinde uzantı kontrolü 

 	 $noktavarmi = strstr($dosyaadi, ".");

 	  if (!$noktavarmi) {
 	  
 	  	echo "Dosya uzantısı giriniz";

 	  }else {
 	  	
 	 //  Dosya oluşturma  kodu 

   	  	  $olustur = touch($dosyaadi);

 	  	  if ($olustur) {
 	  	  	
 	  	  	 echo "dosya oluşturuldu";
 	  	  
 	  	  }else {

 	  	  	echo "Dosya oluşturulamadı";
 	  	  
 	  	  }
 	  
 	  }

   }
}


?>


<link rel="stylesheet" type="text/css" href="css/olustur.css">

<form method="post" action="dosyaolustur.php">
	<div class="container">
		<input type="text" autofocus placeholder="Dosya adı giriniz" name="dosyaadi">
		<input type="submit" value="Oluştur" name="dosyaolustur">
	<a class="mainpage" href="index.php">Anasayfa</a>
	</div>
</form>