
<?php

if($_SESSION['Yetki'] == '1')
        {
            require_once 'controller/vt_islem.php';
            $id = $_SESSION['Kullanici_adi'];
            $kullanici = ogr_tek_no($id);


        }

$ogrenci = $kullanici;
?>



<div class="col-sm-9">
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default text-left">
                <div class="panel-body">    
                    <h2 class="text-danger"> &nbsp;Ögrenci Profil</h2>  
                </div>
        </div>
    </div>
</div> 

<head>
    <link href="css/OgrGiris.css" type="text/css" rel="stylesheet"/>
</head>

<div class="row">
	<div class="col-sm-12">	
		<div class="well well-sm">
            
		 	<form action="?url=Kullanici-ayar" method="POST" >
		 	<table>

                <colgroup>
                    <col width="5%"><col width="5%">
                    <col width="5%"><col width="5%">
                    <col width="5%"><col width="5%">
                    <col width="5%"><col width="5%">
                    <col width="5%"><col width="5%">
                    <col width="5%"><col width="5%">
                    <col width="5%"><col width="5%">
                    <col width="5%"><col width="5%">
                    <col width="5%"><col width="5%">
                    <col width="5%"><col width="5%"> 
                </colgroup>


                <tr> 
                    <td colspan="2" height="50">Bölüm :</td>
                    <td colspan="8"> 
                        <div class="form-inline">
                            <select class="form-control" name="ogrbolum" style="width: 300px" >

							<?php
							foreach ($bolum as $bolum)
							{

								echo '<option value="'.$bolum["bolum_id"].'">'.$bolum["bolum_ad"].'</option>'; 	
							}

							?>	
                               
                            </select>     
                        </div>
                    </td>
                    <td colspan="3" rowspan="3">
                    
                    	
                    </td>
                    <td colspan="3" rowspan="4">
                    	<div class="form-inline">
                    		&nbsp;<img src="img/nobody.jpg" height="180" width="180"> 
                    	</div>


                    </td>
                    
                </tr>


                <tr> 
                    <td colspan="3" height="50">Ad ve Soyad :</td>
                    <td colspan="7"> 
                        <div class="form-inline">
                           <input class="form-control" name="ogradsoyad"  placeholder="Ad Soyad Girin"  style="width: 300px" pattern="[^0-9,+%*]{2,}" maxlength="64" value="<?php echo $ogrenci["ogrenci_ad_soyad"];?>">  
                        </div>
                    </td>
                   
                </tr>

                <tr>
                	<td colspan="3" height="50">Ögrenci No :</td>
                    <td colspan="7"> 
                        <div class="form-inline">                         
                                <input class="form-control" name="ogrno"  placeholder="Ögrenci No'su giriniz" pattern="[0-9]{9}" maxlength="9" value="<?php echo $_SESSION['Kullanici_adi'];  ?>" readonly>
                        </div>
                    </td>

                    

                    
                </tr>

                 <tr>
                    <td colspan=4 height="50px">Öğrenci Cep Tel </td>
                    <td colspan=6>
                         <div class="form-inline">
                           <input class="form-control" name="ogrtel"  placeholder="Telefon giriniz" pattern="[0-9]{10}" maxlength="10" value="<?php echo $ogrenci["ogrenci_ceptel"];?>" >  
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan=2 height="50px">E-posta</td>
                    <td colspan=7>
                         <div class="form-inline">
                           <input class="form-control" type="email" name="ogrmail"  placeholder="E-posta giriniz"  pattern=".{6,50}" maxlength="50" value="<?php echo $ogrenci["ogrenci_eposta"];?>">  
                        </div>
                    </td>
                    <td colspan=3> Resmi Değiştir : </td>
                    <td colspan="3" ><!-- DOSYAAA -->
                    	
                    	<input type="file" name="ogrresim" > 
                    </td>
                </tr>
                <tr>
                    <td colspan=4 height="50px">Doğum Yeri ve Tarihi</td>
                    <td colspan=4>
                         <div class="form-inline">
                        <select class="form-control" name="ogrsehir" style="width: 130px" >
                                <?php
									include 'model/Sehir.php';
								?>
                        </select> 
                        </div>
                    </td>
                    <td colspan=4>
                        <div class="form-inline">
                        <select class="form-control"  name="ogrtarih" style="width: 130px" >
                                <?php
                               		setlocale(LC_ALL,"hu_HU.UTF8");
									$today = strftime("%Y");
									for ($i=1970; $i < $today - 15; $i++) { 
										echo '<option>'.$i.'</option>'; 
									}
								?>
                        </select>  
                        </div>
                    </td>
                        
                    
                    <td colspan=2>Uyruğu</td>
                    <td colspan=6> 
                        <div class="form-inline">
                           <input class="form-control" name="ogruyruk" style="width: 200px" pattern="[^0-9,+%*]{2,}" maxlength="32">  
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan=3 height="80px" >Öğrenci Konya adresi</td>
                     <td colspan=10 >
                         
                         <div class="form-inline">
                           <textarea class="form-control" name="ogrkonyaadres" rows="3" cols="40" style="resize:none;width:95%;" placeholder="Bu alana Konya’daki adresinizi yazın..." ></textarea>  
                        </div>
                     </td>
                </tr>
               

                 <tr>
                    <td colspan=4 height="50px">Öğrenime Kimin Yanında Devam ettiği</td>
                    <td colspan=8>
                         <div class="form-inline">
                           <input class="form-control" name="ogrdestek"  placeholder="İsim giriniz" style="width: 250px" pattern=".{2,50}" maxlength="32">  
                        </div>
                    </td>
                    <td colspan=4>Fakülteye Giriş Puanı</td>
                    <td colspan=4>
                         <div class="form-inline">
                           <input class="form-control" name="ogrpuan"  placeholder="000.00" style="width: 100px" pattern="^[\d]{1,3}([.,']+[\d]{0,2}$)" maxlength="6">  
                        </div>
                    </td>
                </tr>

                 <tr>
                    <td colspan=4 rowspan="2" height="80px" >Konya dışından geliyorsa diğer adresi</td>
                    <td colspan=11 rowspan="2" >
                        
                        <div class="form-inline">
                           <textarea class="form-control" name="ogrmemadres" rows="3" cols="40" style="resize:none;width:95%;" placeholder="Bu alana diğer adresinizi yazınız.Yoksa Boş bırakın." ></textarea>  
                        </div>
                    </td>
                    <td colspan=5 style="text-align: center;" > Konya Telefonu</td>

                   
                </tr>

                <tr>
                    <td colspan=5 >
                        
                        <div class="form-inline">
                             <input class="form-control" name="ogrmemtel"  placeholder="Telefon giriniz" style="width: 190px" pattern="[0-9]{10}" maxlength="10">  
                        </div>
                    </td>
                </tr>



                 <tr>
                   <td colspan=6 height="40px"> Buradan önce mezun olduğu okul</td>
                    <td colspan=14>
                        <div class="form-inline">
                           <input class="form-control" name="ogrmezunokul"  placeholder="Okul adı giriniz" style="width:550px" maxlength="32">  
                        </div>
                    </td>
                </tr>
            </table>

            <hr class="border-dark">
            <table >

            <colgroup>
            <col width="5%"><col width="5%">
            <col width="5%"><col width="5%">
            <col width="5%"><col width="5%">
            <col width="5%"><col width="5%">
            <col width="5%"><col width="5%">
            <col width="5%"><col width="5%">
            <col width="5%"><col width="5%">
            <col width="5%"><col width="5%">
            <col width="5%"><col width="5%">
            <col width="5%"><col width="5%"> 
            </colgroup>

                <tr>
                   <td colspan=2 rowspan="2" height="40px"> Anne</td>
                    <td colspan=2>Adı Soyadı</td>
                    <td colspan=4><input class="form-control" name="anneadsoyad" pattern="[^0-9,+%*]{2,}" maxlength="64">  </td>
                    <td colspan=2 rowspan="2">Öğrenim Durumu:</td>
                    <td colspan=4 rowspan="2"><input class="form-control" name="anneogrenim" maxlength="32">  </td>
                    <td colspan=6> 
                        <div class="form-inline">
                        <input type="radio" name="annesag" class="form-check-input" value="1" > &nbsp;Sağ
                        </div>
                    </td>
                </tr>


                <tr>
                   
                    <td colspan=2>İşi</td>
                    <td colspan=4><input class="form-control" name="anneis" maxlength="32"></td>
                    <td colspan=6> 
                        <div class="form-inline">
                        <input class="form-control" name="anneyil" placeholder="0000" pattern="[0-9]{4}" style="width:60px"> &nbsp;yılında vefat etti &nbsp;
                        <input type="radio" name="annesag" class="form-check-input" value="0" >
                        </div>
                    </td>
                </tr>

                <tr>
                   <td colspan=2 rowspan="2" height="40px"> Baba</td>
                    <td colspan=2>Adı Soyadı</td>
                    <td colspan=4><input class="form-control" name="babaadsoyad" pattern="[^0-9,+%*]{2,}" maxlength="64"></td>
                    <td colspan=2 rowspan="2">Öğrenim Durumu:</td>
                    <td colspan=4 rowspan="2"><input class="form-control" name="babaogrenim" maxlength="32">  </td>
                    <td colspan=6> 
                        <div class="form-inline">
                        <input type="radio" name="babasag"  class="form-check-input" value="1" > &nbsp; Sağ
                        </div>
                    </td>
                </tr>

                <tr>
                   
                    <td colspan=2>İşi</td>
                    <td colspan=4><input class="form-control" name="babais" maxlength="32"></td>
                    <td colspan=6> 
                        <div class="form-inline">
                        <input class="form-control" name="babayil" placeholder="0000" pattern="[0-9]{4}" style="width:60px"> &nbsp;yılında vefat etti &nbsp;
                        <input type="radio" name="babasag" class="form-check-input" value="0" >
                        </div>
                    </td>
                </tr>

                <tr>

                    <td colspan=6 height="70px" >Ailede bir arada yaşayan birey sayısı ve geçim sorumluluğunu taşıyan kişinin kim olduğu</td>
                    <td colspan=11  >
                        
                        <div class="form-inline">
                           <textarea class="form-control" name="ailedurum" rows="3" cols="40" style="resize:none;width:95%;" ></textarea>  
                        </div>
                    </td>


                </tr>
                <tr>

                    <td colspan=6 height="70px" >Kardeş(ler)in sayısı eğitim/iş durumları</td>
                    <td colspan=11>
                        
                        <div class="form-inline">
                           <textarea class="form-control" name="kardesdurum" rows="3" cols="40" style="resize:none;width:95%;" ></textarea>  
                        </div>
                    </td>


                </tr>
                <tr>

                    <td colspan=4 rowspan="3" height="70px" >Öğrenci Sağlık Bilgileri </td>
                    <td colspan=4 >Kan grubu</td>
                    <td colspan=8>
                        <div class="form-inline">
	                        <select class="form-control" name="ogrkan" style="width: 300px" >
			                        <option>A Rh(+)</option>
									<option>A Rh(-)</option>
									<option>B Rh(+)</option>
									<option>B Rh(-)</option>
									<option>AB Rh(+)</option>
									<option>AB Rh(-)</option>
									<option>0 Rh(+)</option>
									<option>0 Rh(-)</option>
							</select>
                        </div>
                    </td>


                </tr>
                <tr>

                    
                    <td colspan=4 >Hastalık(lar)</td>
                    <td colspan=8>
                        <div class="form-inline">
                           <input class="form-control" name="ogrhasta" style="width:300px" maxlength="32">  
                        </div>
                    </td>


                </tr>
                <tr>

                    
                    <td colspan=5 >Bedensel engel varsa niteliği</td>
                    <td colspan=8>
                        <div class="form-inline">
                           <input class="form-control" name="ogrengel" style="width:260px" maxlength="32">  
                        </div>
                    </td>


                </tr>

            </table>
            <hr class="border-dark">
            <table>

                <colgroup>
                    <col width="5%"><col width="5%">
                    <col width="5%"><col width="5%">
                    <col width="5%"><col width="5%">
                    <col width="5%"><col width="5%">
                    <col width="5%"><col width="5%">
                    <col width="5%"><col width="5%">
                    <col width="5%"><col width="5%">
                    <col width="5%"><col width="5%">
                    <col width="5%"><col width="5%">
                    <col width="5%"><col width="5%"> 
                </colgroup>


                <tr>

                    
                    <td colspan=4  rowspan="2" >Ailenin mal varlığı</td>
                    <td colspan=2>Ev:</td>
                    <td colspan=2>
                        <div class="form-inline">
                        Yok &nbsp;<input type="radio" class="form-control shadow-none" name="aileev" value="0">  
                        </div>
                    </td>
                    
                    <td colspan=2>
                        <div class="form-inline">
                        Var &nbsp;<input type="radio" class="form-control shadow-none" name="aileev" value="1">  
                        </div>
                    </td>

                    <td colspan=2>
                        <div class="form-inline">
                           <input class="form-control" type="number" min="1" max="20" name="aileevsayi" style="width:60px">  
                        </div>
                    </td>
                    <td colspan=2 >Adet</td>


                </tr>
                <tr>
                    <td colspan=2>Araba:</td>
                    <td colspan=2>
                        <div class="form-inline">
                        Yok &nbsp; <input type="radio" class="form-control shadow-none" name="ailearaba" value="0">  
                        </div>
                    </td>
                    
                    <td colspan=2>
                        <div class="form-inline">
                        Var &nbsp;<input type="radio" class="form-control shadow-none" name="ailearaba" value="1">  
                        </div>
                    </td>
                    <td colspan=2>
                        <div class="form-inline">
                           <input class="form-control" type="number" min="1" max="20" name="ailearabasayi" style="width:60px">  
                        </div>
                    </td>
                    <td colspan=2>Adet</td>


                </tr>

            

                <tr>
                   <td colspan=5 height="30px"> Sosyal güvencesi hangi kurumdan ve kim üzerine</td>
                    <td colspan=11>
                        <div class="form-inline">
                           <input class="form-control" name="ogrssk"   style="width:500px" maxlength="32">  
                        </div>
                    </td>
                </tr>


                <tr>
 
                    <td colspan=5>Aile aylık toplam geliri </td>            
                    <td colspan=4>
                        <div class="form-inline">
                        0-1500 TL  &nbsp;<input type="radio" class="form-control shadow-none" name="ailepara" value="0-1500 TL">  
                        </div>
                    </td>
                    
                    <td colspan=4>
                        <div class="form-inline">
                        1500-5000 TL   &nbsp;<input type="radio" class="form-control shadow-none" name="ailepara" value="1500-5000 TL">  
                        </div>
                    </td>
                    <td colspan=4>
                        <div class="form-inline">
                        5000 TL üstü   &nbsp;<input type="radio" class="form-control shadow-none" name="ailepara" value="5000 TL üstü">  
                        </div>
                    </td>
                </tr>
                <tr>
                   <td colspan=5 height="30px"> Öğrencinin aldığı kredi ve/veya burslar</td>
                    <td colspan=11>
                        <div class="form-inline">
                           <input class="form-control" name="ogrburs"   style="width:500px" maxlength="64">  
                        </div>
                    </td>
                </tr>

                <tr>
 
                    <td colspan=5>Öğrencinin Konya’daki ortalama geliri </td>            
                    <td colspan=4>
                        <div class="form-inline">
                        0-1500 TL  &nbsp;<input type="radio" class="form-control shadow-none" name="ogrpara" value="0-1500 TL">  
                        </div>
                    </td>
                    
                    <td colspan=4>
                        <div class="form-inline">
                        1500-5000 TL   &nbsp;<input type="radio" class="form-control shadow-none" name="ogrpara" value="1500-5000 TL">  
                        </div>
                    </td>
                    <td colspan=4>
                        <div class="form-inline">
                        5000 TL üstü   &nbsp;<input type="radio" class="form-control shadow-none" name="ogrpara" value="5000 TL üstü">  
                        </div>
                    </td>
                </tr>

            </table>

             <hr class="border-dark">

              <table>

                <colgroup>
                    <col width="5%"><col width="5%">
                    <col width="5%"><col width="5%">
                    <col width="5%"><col width="5%">
                    <col width="5%"><col width="5%">
                    <col width="5%"><col width="5%">
                    <col width="5%"><col width="5%">
                    <col width="5%"><col width="5%">
                    <col width="5%"><col width="5%">
                    <col width="5%"><col width="5%">
                    <col width="5%"><col width="5%"> 
                </colgroup>

                <tr>
                    
                   <td colspan=10 height="30px"> Kendisi ile ilgili ulaşılabilecek bir yakınının</td>
                </tr>

                <tr>
                    <td colspan=2 height="40px">Adı Soyadı</td>
                    <td colspan=8>
                         <div class="form-inline">
                           <input class="form-control" name="yakınadsoyad" pattern="[^0-9,+%*]{2,}" maxlength="64" style="width:240px"  >  
                        </div>
                    </td>
                    <td colspan=8 style="text-align: center;">Yakınlılık Durumu </td>
                    
                </tr>

                <tr>
                    <td colspan=2 height="40px">Tel no</td>
                    <td colspan=8>
                         <div class="form-inline">
                           <input class="form-control" name="yakintel" pattern="[0-9]{10}" maxlength="10" style="width:240px"  >  
                        </div>
                    </td>
                    
                    <td colspan=3>
                         <div class="form-inline">
                        Arkadaş &nbsp;<input type="radio"  class="form-control shadow-none" name="yakındurum" value="Arkadaş">  
                        </div>
                    </td>
                     <td colspan=2>
                         <div class="form-inline">
                        Akraba   &nbsp;<input type="radio" class="form-control shadow-none" name="yakındurum" value="Akraba">  
                        </div>
                    </td>
                     <td colspan=5>
                         <div class="form-inline">
                        (Açıklayınız..):  &nbsp; <input class="form-control" name="yakındurum"  maxlength="15" style="width:90px" >   
                        </div>
                    </td>
                </tr>
                <tr>

                    <td colspan=5 height="80px" >Belirtmek istediği özel durumlar (Yoksa boş bırakın) :</td>
                    <td colspan=15>
                        
                        <div class="form-inline">
                           <textarea class="form-control" name="ogrnot" rows="3" cols="40" style="resize:none;width:95%;" ></textarea>  
                        </div>
                    </td>
                </tr>

              

                <tr>
					<td colspan="20" style="text-align: center;" height="60px">
						<input type="submit" class="btn btn-danger" name="Giris" value="Onayla" style="width: 200px; height: 50px;">
					</td>
				</tr>

            </table>



			</form>

					 
		</div>
	</div>
</div>

<script>
var d = new Date();
document.getElementById("date").innerHTML = d.getFullYear();
</script>