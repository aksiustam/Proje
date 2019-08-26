<?php


// Veritabanı
global $vt;
// Kullanıcı adı ve şifre bölümünde yazanları değişkenlere eşitle.
$kullanici_adi = $_POST['uname'];
$sifre = md5($_POST['psw']);
// Giriş bilgilerini yapan sorgular hazırlanır.

$giris_sorgu1=mysqli_query($vt,'SELECT * FROM admin WHERE admin_kulad="'.$kullanici_adi.'" AND admin_sifre="'.$sifre.'"');
$giris_sorgu2=mysqli_query($vt,'SELECT * FROM abd WHERE abd_kulad="'.$kullanici_adi.'" AND abd_sifre="'.$sifre.'"');
$giris_sorgu3=mysqli_query($vt,'SELECT * FROM danisman WHERE danisman_kulad="'.$kullanici_adi.'"  AND danisman_sifre="'.$sifre.'"');
$giris_sorgu4=mysqli_query($vt,'SELECT * FROM ogrenci WHERE ogrenci_no="'.$kullanici_adi.'" AND ogrenci_sifre="'.$sifre.'"');

// Giriş yapan kullanıcının veritabanında bulunduğu tablodan bilgileri alır.
$giris_sonuc1 = mysqli_num_rows($giris_sorgu1);
$giris_sonuc2 = mysqli_num_rows($giris_sorgu2);
$giris_sonuc3 = mysqli_num_rows($giris_sorgu3);
$giris_sonuc4 = mysqli_num_rows($giris_sorgu4);
if($giris_sonuc1 > 0)// Eğer admin giriş yapmış ise
{
	$bilgiler = mysqli_fetch_array($giris_sorgu1);
	$_SESSION['giris_yapildi'] = true;
	$_SESSION['Kullanici_adi'] = $bilgiler['admin_kulad'];
	$_SESSION['Sifre'] = $bilgiler['admin_sifre'];
	$_SESSION['Ad'] = $bilgiler['admin_ad'];
	$_SESSION['Soyad'] = $bilgiler['admin_soyad'];
	$_SESSION['Email'] = $bilgiler['admin_email'];
	$_SESSION['Tel'] = $bilgiler['admin_tel'];
	$_SESSION['Web'] = $bilgiler['admin_web'];
	$_SESSION['Bolum'] = $bilgiler['admin_bolum'];

	$_SESSION['Yetki'] = "4";
	$_SESSION['id'] = $bilgiler['admin_id'];


}
else if($giris_sonuc2 > 0)// Eğer abd giriş yapmış ise
{
	$bilgiler = mysqli_fetch_array($giris_sorgu2);
	$_SESSION['giris_yapildi'] = true;
	$_SESSION['Kullanici_adi'] = $bilgiler['abd_kulad'];
	$_SESSION['Sifre'] = $bilgiler['abd_sifre'];
	$_SESSION['Ad'] = $bilgiler['abd_ad'];
	$_SESSION['Soyad'] = $bilgiler['abd_soyad'];
	$_SESSION['Email'] = $bilgiler['abd_email'];
	$_SESSION['Tel'] = $bilgiler['abd_tel'];
	$_SESSION['Web'] = $bilgiler['abd_web'];
	$_SESSION['Bolum'] = $bilgiler['abd_bolum'];

	$_SESSION['Yetki'] = "3";
	$_SESSION['id'] = $bilgiler['abd_id'];

}
else if($giris_sonuc3 > 0)// Eğer danisman giriş yapmış ise
{
	$bilgiler = mysqli_fetch_array($giris_sorgu3);
	$_SESSION['giris_yapildi'] = true;
	$_SESSION['Kullanici_adi'] = $bilgiler['danisman_kulad'];
	$_SESSION['Sifre'] = $bilgiler['danisman_sifre'];
	$_SESSION['Ad'] = $bilgiler['danisman_ad'];
	$_SESSION['Soyad'] = $bilgiler['danisman_soyad'];
	$_SESSION['Email'] = $bilgiler['danisman_email'];
	$_SESSION['Tel'] = $bilgiler['danisman_tel'];
	$_SESSION['Web'] = $bilgiler['danisman_web'];
	$_SESSION['Bolum'] = $bilgiler['danisman_bolum'];

	$_SESSION['Yetki'] = "2";
	$_SESSION['id'] = $bilgiler['danisman_id'];

}
else if($giris_sonuc4 > 0)// Eğer ogrenci giriş yapmış ise
{
	$bilgiler = mysqli_fetch_array($giris_sorgu4);
	$_SESSION['giris_yapildi'] = true;
	$_SESSION['Kullanici_adi'] = $bilgiler['ogrenci_no'];
	$_SESSION['Sifre'] = $bilgiler['ogrenci_sifre'];
	$_SESSION['Ad'] = $bilgiler['ogrenci_adsoyad'];
	

	$_SESSION['Yetki'] = "1";
	

}
else// Giriş bilgileri uyuşmuyor ise
{
	$mesaj= "Hatalı giriş!','Lütfen kullanıcı adı veya şifrenizi kontrol edin.";
}




if(!$mesaj)
{
		header("location:index.php?url=anasayfa");
		exit();
}

 ?>

<div class="col-sm-7">

<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default text-left"> 
            <hr class="border-light">
            
                <br>
                <br>
            <h5><?php echo $mesaj; ?></h5>
         <br><br>
            
            </div>
        </div>
 </div>       
 </div>