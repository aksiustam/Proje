<?php

if(!isset($_SESSION['Ad']))
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
            <h5><?php echo $cevap; ?></h5>
            <a href="javascript:window.history.back();">  Geri Gel   </a>
         <br><br>
            
            </div>
        </div>
 </div>       
 </div>   