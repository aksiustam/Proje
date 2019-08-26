<?php
  
if(!isset($_SESSION))
        {
            session_start();    
        }



$vt= new mysqli("localhost","root","","edanisman");
$vt->set_charset("UTF8");
/*
function tum_blok_cek()
{
    global $vt;
    
    $ham = $vt->query("SELECT * FROM anket ORDER BY ID DESC");
    
    $anketler = $ham->fetch_all(1);
    
    return $anketler;
}
*/
function danisman_tek($id) 
{
    global $vt;
    $ham = $vt->query("SELECT * FROM danisman WHERE danisman_id='$id'");
    $kullanici = $ham->fetch_assoc();
   
    return $kullanici;
    
}

function abd_tek($id) 
{
    global $vt;
    $ham = $vt->query("SELECT * FROM abd WHERE abd_id='$id'");
    $kullanici = $ham->fetch_assoc();
   
    return $kullanici;
    
}

function admin_tek($id) 
{
    global $vt;
    $ham = $vt->query("SELECT * FROM admin WHERE admin_id='$id'");
    $kullanici = $ham->fetch_assoc();
   
    return $kullanici;
    
}


function danisman_cek() 
{
    global $vt;
    $ham = $vt->query("SELECT * FROM danisman ORDER BY danisman_id");
    $danisman = $ham->fetch_all(1);
   
    return $danisman;
    
}

function abd_cek() 
{
    global $vt;
    $ham = $vt->query("SELECT * FROM abd ORDER BY abd_id");
    $abd = $ham->fetch_all(1);
   
    return $abd;
    
}

function bolum_cek() 
{
    global $vt;
    $ham = $vt->query("SELECT * FROM bolum ORDER BY bolum_id");
    $bolum = $ham->fetch_all(1);
   
    return $bolum;
    
}

function ogr_cek()
{
    global $vt;
    $ham = $vt->query("SELECT * FROM ogrenci_bilgi ORDER BY ogrenci_id");
    $ogrenci = $ham->fetch_all(1);
   
    return $ogrenci;
}

function ogr_tek($id) 
{
    global $vt;
    $ham = $vt->query("SELECT * FROM ogrenci_bilgi WHERE ogrenci_id='$id'");
    $ogrenci = $ham->fetch_assoc();
   
    return $ogrenci;
    
}

function ogr_tek_no($id)
{
    global $vt;
    $ham = $vt->query("SELECT * FROM ogrenci_bilgi WHERE ogrenci_okulno='$id'");
    $ogrenci = $ham->fetch_assoc();
   
    return $ogrenci;
}
?>

