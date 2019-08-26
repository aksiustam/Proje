<?php 


?> 
<head>
	<link href="css/form.css" type="text/css" rel="stylesheet"/>
</head>

<div class="col-sm-9">
<div class="row">
    <div class="col-sm-9">
        <div class="panel panel-default text-left">
                <div class="panel-body">    
                    <h2 class="text-danger"> &nbsp;Öğrenci Filtrele	</h2>  
                </div>
        </div>
    </div>
</div> 



<div class="row">
	<div class="col-sm-9">
		
		<div class="well well-lg">
			<form action="?url=Ogrenci-Filtre" method="POST" enctype="multipart/form-data">

			<table>
                <tr> 
                    <td >Bölüm :</td>
                    <td style="padding-bottom: 5px"> 
                        <div class="form-inline">
                            <select class="form-control" name="ogrbolum" style="width: 250px ;height: 35px ;padding-bottom: 5px;">
                                <option value=""></option>
							<?php
							foreach ($values as $bolum)
							{

								echo '<option value="'.$bolum["bolum_id"].'">'.$bolum["bolum_ad"].'</option>'; 	
							}

							?>	
                               
                            </select>     
                        </div>
                    </td>
                     </tr>
                <tr>
                    <td >Ögrenci No :</td>
                    <td style="padding-bottom: 5px"> 
                        <div class="form-inline">
                       			<input class="form-control" name="ogrno"  placeholder="Ögrenci No giriniz" pattern="[0-9]{9}" maxlength="9" >         
                        </div>
                    </td>
                </tr>

                <tr>
                    <td >Ad ve Soyad :</td>
                    <td style="padding-bottom: 5px"> 
                       <div class="form-inline">
                           <input class="form-control" name="ogradsoyad"  placeholder="Ad Soyad Girin"  style="width: 230px" pattern="[^0-9,+%*]{2,}" maxlength="64">  
                        </div>
                    </td>
                </tr>
                <tr>
                    <td >Öğrenci Cep Tel  :</td>
                    <td style="padding-bottom: 5px"> 
                        <div class="form-inline">
                           <input class="form-control" name="ogrtel"  placeholder="Telefon giriniz" pattern="[0-9]{10}" maxlength="10" >  
                        </div>
                    </td>
                </tr>
                <tr>
                    <td >Doğum Yeri:</td>
                    <td style="padding-bottom: 7px"> 
                         <div class="form-inline">
                        <select class="form-control" name="ogrsehir" style="width: 150px ;height: 35px ;padding-bottom: 5px;" >
                            <option value=""></option>
                                <?php
									include 'model/Sehir.php';
								?>
                        </select> 
                        </div>
                    </td>
                </tr>

                <tr>
					<td colspan="20" style="text-align: center;" height="60px">
						<input type="submit" class="btn btn-danger"  value="Onayla" style="width: 200px; height: 50px;">
					</td>
				</tr>


                </table>
			
			</form>
		</div>
	</div>
</div>
