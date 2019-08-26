<?php
include 'controller/Kontrol.php';
include 'Model/gorunum.php';
		if(!isset($_SESSION))
		{
			session_start();	
		}

		if(!isset($_SESSION['Yetki']))
		{
			$_SESSION['Yetki'] = '0';	
		}
ob_start();


if(!empty($_GET["url"]))
{
    
     $url = $_GET["url"];
     
     switch ($url)
     {
         case "anasayfa"                 : anasayfa();           break;

         

         case "Ogrenci_Giris"            : Ogrenci_Giris();           break;

         case "Ogrenci_Liste"            : Ogrenci_Liste();           break;

         case "Ogrenci_Filtre"           : Ogrenci_Filtre();           break;





         case "Ogrenci-Ekle"             : Ogrenci_Ekle();           break;

         case "Ogrenci-Sil"              : Ogrenci_Sil();           break;

         case "Ogrenci-Filtre"           : Ogrenci_Filtrele();           break;





         case "Giris"                 	 : giris();           break;

         case "Giris-Kontrol"            : giris_kontrol();           break;

         case "Cikis"                 	 : cikis();           break;
 

         case "Kullanici"                : Kullanici("me");           break;

         case "Kullanici/Ogrenci"        : Kullanici("Ogr");           break;

         case "Kullanici/danisman"       : Kullanici("danisman");           break;

         case "Kullanici/abd"            : Kullanici("abd");           break;

         case "Kullanici-ayar"           : Kullanici_ayar();           break;


         case "Bölüm_Liste"          	 : Bölüm();           break;

         case "Bölüm-sil"                : Bölüm_sil();           break;



         case "Danisman"                 : Danisman();           break;

         case "Danisman-sil"             : Danisman_sil();           break;



         case "ABD_Liste"                : ABD_Liste();           break;

         case "ABD-Sil"                  : ABD_Sil();           break;



         case "Veri-Ekle-Sil"            : Veri_Ekle_Sil();       break;


   
         default                         : anasayfa();           break;
     }
}
else
{
    hata(" url değeri boş veya tanımlı değil ");
}
   



?>
        
   
