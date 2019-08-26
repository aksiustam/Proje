<?php

if($_SESSION['Yetki'] < '2')
		{
			header("location:index.php?url=anasayfa");
			exit();
		}



 ?>
 <head>
<link href="css/admin_panel_table.css" type="text/css" rel="stylesheet"/>
</head>

<div class="col-sm-9">

<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default text-left">
                <div class="panel-body">    
                    <caption><h2 class="text-danger"> &nbsp;Öğrenci Listele	</h2>  </caption>
                </div>
        </div>
    </div>
</div> 

	<div class="row">
	        <div class="col-sm-12">
	            
	            <table class="w3-table-all w3-hoverable w3-centered">
					
					
					<thead>
						<tr class="w3-yellow ">
							<th>ID</th>
							<th>Bölüm</th>
							<th>No</th>
							<th>AdSoyad</th>
							<th>Yer</th>
							<th>Tel</th>
							<th>Email</th>
							<th>Düzenle</th>
						</tr>
					</thead>
						<?php 

						foreach ($values as $ogrenci)
							{

								echo '<tr>
								<td>'.$ogrenci['ogrenci_id'].'</td>
								<td>'.$ogrenci['ogrenci_bölüm_id'].'</td>
								<td>'.$ogrenci['ogrenci_okulno'].'</td>
								<td>'.$ogrenci['ogrenci_ad_soyad'].'</td>
								<td>'.$ogrenci['ogrenci_dogumyer'].'</td>
								<td>'.$ogrenci['ogrenci_ceptel'].'</td>
								<td>'.$ogrenci['ogrenci_eposta'].'</td>
								<td><a href="?url=Kullanici/Ogrenci&id='.$ogrenci['ogrenci_id'].'">Düzenle</a></td>
								
								</tr>';
							}
						?>
					
				</table> 
	        </div>      
	 </div>       
		 <div class="row">
			        <div class="col-lg-6 text-center">
						 <input type="button" class="btn btn-link" name="Ögrenci Ekle" value="[Öğrenci Ekle]">
						 &nbsp;&nbsp;
						
			        </div>
			         <div class="col-lg-6 text-center">
						 
						 <input type="button" class="btn btn-link" name="Ögrenci Sil" value="[Yazdır]">
			        </div>
		</div>         
</div> 