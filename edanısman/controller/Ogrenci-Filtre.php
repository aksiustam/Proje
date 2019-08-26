<?php 
if(!isset($_SESSION))
        {
            session_start();    
        }


$vt= new mysqli("localhost","root","","edanisman");
$vt->set_charset("UTF8");



    $ogrbolum = $_POST["ogrbolum"];
    $ogrno =  $_POST["ogrno"];
    $ogradsoyad =  $_POST["ogradsoyad"];    
    $ogrsehir =  $_POST["ogrsehir"];
    $ogrtel =  $_POST["ogrtel"]; 



    //Do real escaping here

    $query = "SELECT * FROM ogrenci_bilgi";
    $conditions = array();

    if(! empty($ogrbolum)) {
      $conditions[] = " ogrenci_bölüm_id='$ogrbolum'";
    }
    if(! empty($ogrno)) {
      $conditions[] = " ogrenci_okulno='$ogrno'";
    }
    if(! empty($ogradsoyad)) {
      $conditions[] = " ogrenci_ad_soyad='$ogradsoyad'";
    }
    if(! empty($ogrsehir)) {
      $conditions[] = " ogrenci_dogumyer='$ogrsehir'";
    }
     if(! empty($ogrtel)) {
      $conditions[] = "ogrenci_ceptel='$ogrtel'";
    }


    $sql = $query;
    if (count($conditions) > 0) {
      $sql .= " WHERE " . implode(' AND ', $conditions);
    }
    global $vt;
    $ham = $vt->query($sql);
    $values = $ham->fetch_all(1);
    
    include "View/Ogrenci_Liste.php";

?>