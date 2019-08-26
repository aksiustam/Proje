<?php
function sayfa_goster($src , $title = false, $values = false,$value = false )
{
    include 'view/header.php';
    include $src;
    include 'view/footer.php';
}

function ozel_goster($src , $title = false, $values = false , $Kulad = false , $bolum = false)
{

$kullanici = $values;
$kaynak = $src;


switch ($Kulad) {
		case 'danisman':
		$uye = [

							'id' => $kullanici["danisman_id"] ,
							'Kullanici_adi' => $kullanici["danisman_kulad"] ,
							'Sifre' => $kullanici["danisman_sifre"] ,
							'Bolum' => $kullanici["danisman_bolum"] ,
							'Ad' => $kullanici["danisman_ad"] ,
							'Soyad' => $kullanici["danisman_soyad"] ,
							'Email' => $kullanici["danisman_email"] ,
							'Tel' => $kullanici["danisman_tel"] ,
							'Web' => $kullanici["danisman_web"] ,
							
					
					
				];
		break;

		case 'abd':
		$uye = [

							
							'id' => $kullanici["abd_id"] ,
							'Kullanici_adi' => $kullanici["abd_kulad"] ,
							'Sifre' => $kullanici["abd_sifre"] ,
							'Bolum' => $kullanici["abd_bolum"] ,
							'Ad' => $kullanici["abd_ad"] ,
							'Soyad' => $kullanici["abd_soyad"] ,
							'Email' => $kullanici["abd_email"] ,
							'Tel' => $kullanici["abd_tel"] ,
							'Web' => $kullanici["abd_web"] ,
							
	
				];
		break;

		case 'Ogr':
			$kaynak = 'view/Ogrenci_Kullanici.php';
		break;


		case 'me':
		{

			if($_SESSION['Yetki'] == "1")
			{
				$kaynak = 'view/Ogrenci_Kullanici.php';
			}
			else{	
				$uye = [

							'id' => $_SESSION['id'] ,
							'Kullanici_adi' => $_SESSION['Kullanici_adi'] ,
							'Sifre' => $_SESSION['Sifre'] ,
							'Bolum' => $_SESSION['Bolum'] ,
							'Ad' => $_SESSION['Ad'] ,
							'Soyad' => $_SESSION['Soyad'] ,
							'Email' => $_SESSION['Email'] ,
							'Tel' => $_SESSION['Tel'] ,
							'Web' => $_SESSION['Web'] ,		
					];
			}
		}
		break;
	
	
}

    include 'view/header.php';
    include $kaynak;
    include 'view/footer.php';
}

function hata($mesaj)
{
    sayfa_goster("view/hata.php", 'HATA!', $mesaj);
}


?>




