<?php

if($_SESSION['Yetki'] != '4')
		{
			header("location:index.php?url=anasayfa");
			exit();
		}




 ?>
 <head>
<link href="css/admin_panel_table.css" type="text/css" rel="stylesheet"/>
</head>

<div class="col-sm-7">
	<div class="row">
	        <div class="col-sm-12">
	            <caption><h3>A.B.D. Danisman Düzenle<h3></caption>
	            <table class="w3-table-all w3-hoverable">
					
					
					<thead>
						<tr class="w3-amber">
							<th>abd ID</th>
							<th>abd Kullanıcı</th>
							<th>abd Adı</th>
							<th>abd Soyadı</th>
							<th>abd Bölüm</th>
							<th>Düzenle</th>
						</tr>
					</thead>
						<?php
						 foreach ($values as $abd)
							{

								echo '<tr>
								<td>'.$abd["abd_id"].'</td>
								<td>'.$abd["abd_kulad"].'</td>
								<td>'.$abd["abd_ad"].'</td>
								<td>'.$abd["abd_soyad"].'</td>
								<td>'.$abd["abd_bolum"].'</td>
								<td><a href="?url=Kullanici/abd&id='.$abd["abd_id"].'">Düzenle</a></td>
								</tr>'; 	
							}
						  ?>
					
				</table> 
	        </div>      
	 </div>       
		 <div class="row">
			        <div class="col-lg-6 text-center">
						 <input type="button" class="btn btn-link" name="A.B.D. Ekle" value="[A.B.D. Ekle]"  data-toggle="modal" data-target="#formpopup">
						 &nbsp;&nbsp;
						
			        </div>
			         <div class="col-lg-6 text-center">
						 
						 <input type="button" class="btn btn-link" name="A.B.D. Yazdır" value="[Yazdır]">
			        </div>
		</div>         
</div> 




<!-- Modal -->
<div id="formpopup" class="modal fade" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-body">

        <form role="form" action="?url=Veri-Ekle-Sil" method="POST" id="reused_form">

        <table>

				<tr>
                    <td >Bölüm:</td>
                     <td >
                         
                         <div class="form-inline">
                           <select class="form-control" name="ogrbolum" style="width: 300px ;height: 32px">

							<?php
							foreach ($value as $bolum)
							{

								echo '<option value="'.$bolum["bolum_id"].'">'.$bolum["bolum_ad"].'</option>'; 	
							}

							?>	
                               
                            </select>  
                        </div>
                     </td>
                </tr>
                <tr>
                    <td >Kullanıcı Adı:</td>
                     <td >
                         
                         <div class="form-inline">
                           <input class="form-control" type="text" name="adi"  placeholder="Kullanıcı adı giriniz" >  
                        </div>
                     </td>
                </tr>
                <tr>
                    <td >Şifre:</td>
                     <td >
                         
                         <div class="form-inline">
                           <input class="form-control" type="password" name="sifre"  >  
                        </div>
                     </td>
                </tr>
                <tr>
                    <td >Adı:</td>
                     <td >
                         
                         <div class="form-inline">
                            <input class="form-control" type="text" name="adi"  placeholder="Ad girin" >   
                        </div>
                     </td>
                </tr>
                <tr>
                    <td >Soyadı:</td>
                     <td >
                         
                         <div class="form-inline">
                           <input class="form-control" type="text" name="soyadi" placeholder="Soyad girin" >  
                        </div>
                     </td>
                </tr>
                <tr>
                    <td >E-Posta Adresi:</td>
                     <td >
                         
                         <div class="form-inline">
                           <input class="form-control" type="email" name="e_posta" pattern=".{6,50}" maxlength="50" placeholder="eposta@site.com" >  
                        </div>
                     </td>
                </tr>
                <tr>
                    <td >Telefon (5XX-XXX-XXXX):</td>
                     <td >
                         
                         <div class="form-inline">
                           <input class="form-control" type="tel" name="telno"  pattern="[0-9]{10}" placeholder="Telefon Numarası girin" >  
                        </div>
                     </td>
                </tr>
                <tr>
                    <td >Web Sayfası (https://...):</td>
                     <td >
                         
                         <div class="form-inline">
                           <input type="url" class="form-control" style="resize: none" name="web_sayfasi" pattern=".{4,50}" maxlength="50" placeholder="Geçerli bir Web Adresi girin"> 
                        </div>
                     </td>
                </tr>
                
                <tr>
                	<td >
               			 <input type="submit" class="btn btn-primary" name="profil_guncelle_buton" value="Gönder">
                 </td>
                </tr>


        </table>
    </form>
</div>
</div>
</div>
</div>

