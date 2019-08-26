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
        <div class="col-lg-12">
            

			<caption><h3>Bölüm Düzenle<h3></caption>

            <table class="w3-table-all w3-hoverable">

					<thead>
						<tr class="w3-blue-grey">
							<th>Bölüm ID</th>
							<th>Bölüm Adı</th>
							<th>Düzenle/Sil</th>
						</tr>
					</thead>

					<?php
							foreach ($values as $bolum)
							{

								echo '<tr>
								<td>'.$bolum["bolum_id"].'</td>
								<td>'.$bolum["bolum_ad"].'</td>
								<td><input type="submit" class="btn btn-primary" name="Bölüm Sil" value="Sil"></td>
								</tr>'; 	
							}

							 ?>			
			</table>            
            
        </div>
 </div>       

		<div class="row">
		        <div class="col-lg-6 text-center">
					 <input type="button" class="btn btn-link" name="Bölüm Ekle" value="[Bölüm Ekle]" data-toggle="modal" data-target="#formpopup">
					 &nbsp;&nbsp;
					
		        </div>
		         <div class="col-lg-6 text-center">
					 
					 <input type="button" class="btn btn-link" name="Bölüm Yazdır" value="[Yazdır]">
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
                    <td >Bölüm ekle:</td>
                     <td >
                         
                         <div class="form-inline">
                           <input class="form-control" type="text" name="bolum"  placeholder="Bölüm adı giriniz" style="width: 350px">  
                        </div>
                     </td>
                </tr>
              
                
                <tr>
                	<td>
               			 <input type="submit" class="btn btn-primary" name="profil_guncelle_buton" value="Gönder" style="text-align: center;">
                 </td>
                </tr>


        </table>
    </form>
</div>
</div>
</div>
</div>

