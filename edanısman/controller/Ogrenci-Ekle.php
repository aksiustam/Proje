<?php 



$mesaj = "";

global $vt;

$oldErr = error_reporting(0);

$ogrenci = [
    'ogrid' => NULL,
    'ogrbolum' => $_POST["ogrbolum"],
    'ogrno' => $_POST["ogrno"] ,
    'ogrsifre' => NULL,
    'ogradsoyad' => $_POST["ogradsoyad"] ,
    'ogrresim' => "" ,
    'ogrresimtip' => "" ,
    'ogrsehir' => $_POST["ogrsehir"] ,
    'ogrtarih' => $_POST["ogrtarih"] ,
    'ogruyruk' => $_POST["ogruyruk"] ,
    'ogrkonyaadres' => $_POST["ogrkonyaadres"] ,
    'ogrtel' => $_POST["ogrtel"] ,
    'ogrmail' => $_POST["ogrmail"] ,
    'ogrdestek' => $_POST["ogrdestek"] ,
    'ogrpuan' => $_POST["ogrpuan"] ,
    'ogrmemadres' => $_POST["ogrmemadres"] ,
    'ogrmemtel' => $_POST["ogrmemtel"] ,
    'ogrmezunokul' => $_POST["ogrmezunokul"] ,
    'anneadsoyad' => $_POST["anneadsoyad"] ,
    'anneogrenim' => $_POST["anneogrenim"] ,
    'annesag' => "" ,
    'anneis' => $_POST["anneis"] ,
    'babaadsoyad' => $_POST["babaadsoyad"] ,
    'babaogrenim' => $_POST["babaogrenim"] ,
    'babasag' => "" ,
    'babais' => $_POST["babais"] ,
    'ailedurum' => $_POST["ailedurum"] ,
    'kardesdurum' => $_POST["kardesdurum"] ,
    'ogrkan' => $_POST["ogrkan"] ,
    'ogrdurum' => "",
    'ailemalvarlik' => "" ,
    'ogrssk' => $_POST["ogrssk"] ,
    'ailepara' => $_POST["ailepara"] ,
    'ogrburs' => $_POST["ogrburs"] ,
    'ogrpara' => $_POST["ogrpara"] ,
    'yakınadsoyad' => $_POST["yakınadsoyad"] ,
    'yakintel' => $_POST["yakintel"] ,
    'yakındurum' => "" ,
    'ogrnot' => $_POST["ogrnot"] ,
    'danismannot' => "" ,
    

    
];


if($ogrenci["ogrdurum"] == "")
{
    $ogrenci["ogrdurum"] = $_POST["ogrhasta"] . " , "  . $_POST["ogrengel"];
}


if($_POST["annesag"] == "0" )
{
    $ogrenci["annesag"] = $_POST["anneyil"];

}
elseif ($_POST["annesag"] == "1") {
    $ogrenci["annesag"] = "1";
}

if($_POST["babasag"] == "0")
{
    $ogrenci["babasag"] = $_POST["babayil"];

}
elseif ($_POST["babasag"] == "1") {
    $ogrenci["babasag"] = "1";
}

if($_POST["aileev"] == "0")
{
    $ogrenci["ailemalvarlik"] .= "0 , ";
}
else if($_POST["aileev"] == "1")
{
    $ogrenci["ailemalvarlik"] .= $_POST["aileevsayi"] . " , ";
}

if($_POST["ailearaba"] == "0")
{
    $ogrenci["ailemalvarlik"] .= "0";
}
else if($_POST["ailearaba"] == "1")
{
    $ogrenci["ailemalvarlik"] .= $_POST["ailearabasayi"];
}


if($_POST["yakındurum"] == "Arkadaş")
{
    $ogrenci["yakındurum"] = "Arkadaş";
}
else if($_POST["yakındurum"] == "Akraba")
{
    if(isset($_POST["yakındurumad"]))
    {
        $ogrenci["yakındurum"] = "Akraba"; 
    }
    else {
        $ogrenci["yakındurum"] = $_POST["yakındurumad"];
    }
}

if(count($_FILES) > 0)
{



    if (is_uploaded_file($_FILES['ogrresim']['tmp_name'])) {
        
        $ogrenci["ogrresim"] = addslashes(file_get_contents($_FILES['ogrresim']['tmp_name']));
        $imageProperties = getimageSize($_FILES['ogrresim']['tmp_name']);
        $ogrenci["ogrresimtip"] = $imageProperties['mime'];
        
    }
    
}


$sql = "INSERT INTO `ogrenci_bilgi` (`ogrenci_bölüm_id`, `ogrenci_okulno`,`ogrenci_ad_soyad`, `ogrenci_resim`, `ogrenci_resimtip`,`ogrenci_dogumyer`, `ogrenci_dogumtarih`, `ogrenci_uyrugu`, `ogrenci_konyaadres`, `ogrenci_ceptel`, `ogrenci_eposta`, `ogrenci_destek`, `ogrenci_okulpuan`, `ogrenci_memleketadres`, `ogrenci_memlekettel`, `ogrenci_mezunokul`, `anne_adi`, `anne_meslek`, `anne_ogrenim`, `anne_sag`, `baba_adi`, `baba_meslek`, `baba_ogrenim`, `baba_sag`, `aile_durum`, `kardes_sayi`, `kan_grubu`, `ogrenci_durum`, `aile_malvarlik`, `ogrenci_sgk`, `aile_gelir`, `ogrenci_burs`, `ogrenci_gelir`, `yakin_ad`, `yakin_tel`, `yakin_durum`, `diger_not`, `danisman_not`) VALUES ('".$ogrenci["ogrbolum"]."', '".$ogrenci["ogrno"]."', '".$ogrenci["ogradsoyad"]."', '".$ogrenci["ogrresim"]."', '".$ogrenci["ogrresimtip"]."','".$ogrenci["ogrsehir"]."', '".$ogrenci["ogrtarih"]."', '".$ogrenci["ogruyruk"]."', '".$ogrenci["ogrkonyaadres"]."', '".$ogrenci["ogrtel"]."', '".$ogrenci["ogrmail"]."', '".$ogrenci["ogrdestek"]."', '".$ogrenci["ogrpuan"]."', '".$ogrenci["ogrmemadres"]."', '".$ogrenci["ogrmemtel"]."', '".$ogrenci["ogrmezunokul"]."', '".$ogrenci["anneadsoyad"]."', '".$ogrenci["anneis"]."', '".$ogrenci["anneogrenim"]."', '".$ogrenci["annesag"]."', '".$ogrenci["babaadsoyad"]."', '".$ogrenci["babais"]."', '".$ogrenci["babaogrenim"]."', '".$ogrenci["babasag"]."', '".$ogrenci["ailedurum"]."', '".$ogrenci["kardesdurum"]."', '".$ogrenci["ogrkan"]."', '".$ogrenci["ogrdurum"]."', '".$ogrenci["ailemalvarlik"]."', '".$ogrenci["ogrssk"]."', '".$ogrenci["ailepara"]."', '".$ogrenci["ogrburs"]."', '".$ogrenci["ogrpara"]."', '".$ogrenci["yakınadsoyad"]."', '".$ogrenci["yakintel"]."', '".$ogrenci["yakındurum"]."', '".$ogrenci["ogrnot"]."', '".$ogrenci["danismannot"]."')";

        
$sonuc = mysqli_query($vt, $sql );



?>



<div class="col-sm-7">

<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default text-left"> 
            <hr class="border-light">
            
                <br>
                <br>
            <h5><?php echo $mesaj; //echo "ERROR: Could not able to execute . " . mysqli_error($vt); ?> </h5>
         <br><br>
            
            </div>
        </div>
 </div>       
 </div>