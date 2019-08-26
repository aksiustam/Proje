<?php 
include 'controller/vt_islem.php';

function anasayfa()
{
 
    sayfa_goster('view/anasayfa.php','anasayfa');
}

function Ogrenci_Giris()
{

    $bolum = bolum_cek();
    sayfa_goster('view/Ogrenci_Giris.php','Ogrenci_Giris',$bolum);
}

function Ogrenci_Liste()
{
    $ogrenci = ogr_cek();
    $bolum = bolum_cek();
    sayfa_goster('view/Ogrenci_Liste.php','Ogrenci_Liste',$ogrenci,$bolum);
}

function Ogrenci_Filtre()
{
    $bolum = bolum_cek();
    sayfa_goster('view/Ogrenci_Filtre.php','Ogrenci_Filtre',$bolum);
}




function Ogrenci_Ekle()
{
    $bolum = bolum_cek();
    sayfa_goster('controller/Ogrenci-Ekle.php','Ogrenci-Ekle',$bolum);
}


function Ogrenci_Sil()
{

	//Bla BLa Bla Sildim anam. 

    sayfa_goster('controller/Ogrenci-Sil.php','Ogrenci-Ekle');
}


function Ogrenci_Filtrele()
{
    sayfa_goster('controller/Ogrenci-Filtre.php','Ogrenci-Filtre');
}



function giris()
{
		if(isset($_SESSION['Ad']))
		{
			header("location:index.php?url=anasayfa");
			exit();
		}

    sayfa_goster('view/Giris.php','Giris');
}

function giris_kontrol()
{
    sayfa_goster('controller/Giris-kontrol.php','Giris-kont');
}

function cikis()
{
	session_destroy();
	header("location:index.php?url=anasayfa");
}

function Kullanici($kulad)
{

    $bolum = bolum_cek();

    if($kulad == "danisman")
    {
        $id = $_GET["id"];
        $kullanici = danisman_tek($id);
       
    }

    if($kulad == "abd")
    {
        $id = $_GET["id"];
        $kullanici = abd_tek($id);
        
    }
   if($kulad == "Ogr")
    {

       $id = $_GET["id"];
       $kullanici = ogr_tek($id);    
        
    }
     if($kulad == "me")
    {
        
        $kullanici = "";
    }

  


     ozel_goster('view/Kullanici.php','Kullanici',$kullanici , $kulad , $bolum);
}

function Kullanici_ayar()
{
 
    sayfa_goster('controller/Kullanici-ayar.php','Kullanici-ayar');
}


function Bölüm()
{
    $bolum = bolum_cek();
 
    sayfa_goster('view/Bolum.php','Bölüm',$bolum);
}

function Bölüm_sil()
{

	//Bla BLa Bla Sildim anam. 
 
    sayfa_goster('view/Bolum.php','Bölüm');
}



function Danisman()
{
    $Danisman = danisman_cek();
    $bolum = bolum_cek();
 
    sayfa_goster('view/Danisman.php','Danisman',$Danisman , $bolum);
}

function Danisman_sil()
{

	 
 
    sayfa_goster('view/Danisman.php','DanismanSil');
}


function ABD_Liste()
{

    $abd = abd_cek();
    $bolum = bolum_cek();
 
    sayfa_goster('view/ABD.php','ABD',$abd,$bolum);
}

function ABD_Sil()
{

	
 
    sayfa_goster('view/ABD-sil.php','ABD-Sil');
}


function Veri_Ekle_Sil()
{

    sayfa_goster('controller/Veri-Ekle-Sil.php','VES');
}




?>
