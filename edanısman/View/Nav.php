
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark" id="mainNav">
          <div class="container-fluid">
                <div class="navbar-header">
                   <a class="navbar-brand" href="?url=anasayfa">S.Ü. Teknoloji Fakültesi</a>
                </div> 
  
                        <div class="collapse navbar-collapse" id="navbar-Responsive">
                          
                          <ul class="navbar-nav ml-auto ">
                            
                                
                               <?php // NAGİVASYON SOL

                               if($_SESSION['Yetki'] >= '0')
                              {
                                                              
                              }
                              if($_SESSION['Yetki'] >= '1')
                              {
                                  echo '<li class="nav-item ">
                            <a class="nav-link js-scroll-trigger" href="?url=Ogrenci_Giris">
                                  Öğrenci Giris
                              </a>
                             </li>';                              
                              }

                              if($_SESSION['Yetki'] >= '2')
                              {
                                 echo '
                            <li class="nav-item">
                                
                              <a class="nav-link js-scroll-trigger" href="?url=Ogrenci_Liste">
                                  Öğrenci Listele
                              </a>
                            </li>
                            <li class="nav-item">
                                
                              <a class="nav-link js-scroll-trigger" href="?url=Ogrenci_Filtre">
                                  Öğrenci Filtrele
                              </a>
                            </li>';
                              }

                             if($_SESSION['Yetki'] >= '3')
                              {
                                echo ' <li class="nav-item">                        
                              <a class="nav-link js-scroll-trigger" href="?url=Danisman">
                                  Danisman Listele
                              </a>
                            </li>';
                              } 

                              if($_SESSION['Yetki'] >= '4')
                              {
                                echo ' <li class="nav-item">                        
                              <a class="nav-link js-scroll-trigger" href="?url=ABD_Liste">
                                  A.B.D Listele
                              </a>
                            </li>
                            <li class="nav-item">                        
                              <a class="nav-link js-scroll-trigger" href="?url=Bölüm_Liste">
                                  Bölüm Listele
                              </a>
                            </li>
                            <li class="nav-item">                        
                              <a class="nav-link js-scroll-trigger" href="?url=C">
                                  Form Ayarlar
                              </a>
                            </li>
                            <li class="nav-item">                        
                              <a class="nav-link js-scroll-trigger" href="?url=C">
                                  Mesajlar
                              </a>
                            </li>';
                              } 

                              ?>
       
                            </ul>
                            <ul class="navbar-nav navbar-right">
                            <?php  //NAGİVASYON SAĞ

                            if(isset($_SESSION['Ad']))
                            {
                              $ad = $_SESSION['Ad'];


                              echo '
                              <li class="nav-item" >                        
                              <a class="nav-link js-scroll-trigger" href="?url=Kullanici">
                                  '.$ad.'
                              </a>
                            </li>
                            <li class="nav-item" >                        
                              <a class="nav-link js-scroll-trigger " href="?url=Cikis">
                                  Çıkış
                              </a>
                            </li>
                            ';
            
                              
                            }
                            else
                            {
                              echo '
                            <li class="nav-item" >                        
                              <a class="nav-link js-scroll-trigger " href="?url=Giris">
                                  Giriş
                              </a>
                            </li>';
                            }
                            ?>

                              
                            
                            </ul>
    
                          
                        </div>
          </div>
    </nav>