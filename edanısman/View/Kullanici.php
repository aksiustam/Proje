<?php 

if(!isset($_SESSION['Ad']))
{
	header("location:index.php?url=anasayfa");
	exit();
}


?> 


<div class="col-sm-7">


				<div class="row">
				    <div class="col-sm-12">
				        <div class="panel panel-default text-left">
				                <div class="panel-body">    
				                    <h2 class="text-danger"> &nbsp;Profil Bilgileri	</h2>  
				                </div>
				        </div>
				    </div>
				</div> 

<head>
	<link href="css/profile.css" type="text/css" rel="stylesheet"/>
</head>



<div class="row">
				    <div class="col-sm-12">
				    	
						<div class="well well-lg">

								
								<table>	
									<form action="?url=Kullanici-ayar" method="POST">
								<tr>
									<td>Bölüm</td>
									<td>:</td>
									<td><p class="form-control-static"><?php echo $uye["Bolum"]; ?></p></td>
								</tr>
								<tr>
									<td>Kullanıcı adı</td>
									<td>:</td>
									<td><p class="form-control-static"> <?php echo $uye["Kullanici_adi"]; ?> </p></td>
								</tr>
								<tr>
									<td>
										<p>Şifre (8-16 karakter)</p>

									</td>
									<td>
										<p>:</p>
		
									</td>
									<td>
										<div class="password_match form-inline" data-msg="Şifre eşleşmiyor.">
											<input class="form-control" type="password" name="pass" pattern=".{8,16}" maxlength="16">
											<span class="profil_span">*</span>
											
										</div>
									</td>
								</tr>
								<tr>
									<td>Adı</td>
									<td>:</td>
									<td>
										<div class="form-inline">
											<input class="form-control" type="text" name="adi"  value="<?php echo $uye["Ad"]; ?>" placeholder="Ad girin" >
											<span class="profil_span">*</span>
										</div>
									</td>
								</tr>
								<tr>
									<td>Soyadı</td>
									<td>:</td>
									<td>
										<div class="form-inline">
											<input class="form-control" type="text" name="soyadi" value="<?php echo $uye["Soyad"]; ?>" placeholder="Soyad girin" >
											<span class="profil_span">*</span>
										</div>
									</td>
								</tr>
								<tr>
									<td>E-Posta Adresi</td>
									<td>:</td>
									<td>
										<div class="form-inline">
											<input class="form-control" type="email" name="e_posta" pattern=".{6,50}" maxlength="50" value="<?php echo $uye["Email"]; ?>" placeholder="eposta@site.com" >
											<span class="profil_span">*</span>
										</div>
									</td>
								</tr>
								
								<tr>
									<td>Telefon (5XX-XXX-XXXX)</td>
									<td>:</td>
									<td>
										<div class="form-inline">
											<input class="form-control" type="tel" name="telno" value="<?php echo $uye["Tel"]; ?>" pattern="[0-9]{10}" placeholder="Telefon Numarası girin" >
											<span class="profil_span">*</span>
										</div>
									</td>
								</tr>
							
								<tr>
									<td>Web Sayfası (https://...)</td>
									<td>:</td>
									<td><div class="form-inline">
										<input type="url" class="form-control" style="resize: none" name="web_sayfasi"  maxlength="50" value="<?php echo $uye["Web"]; ?>" placeholder="Geçerli bir Web Adresi girin"></div>
									</td>
									
								</tr>
								
								
								<tr class="tr_son">
									<td><span class="help-block">Bu formda <span class="profil_span">*</span> işaretli alanlar gereklidir.</span></td>
									<td></td>
									<td>
										<input type="submit" class="btn btn-primary" name="profil_guncelle_buton" value="Profili Güncelle">
									</td>
								</tr>
								</form>
								</table>

											
						</div>

			</div>
		</div>


		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
		


		


</div>