<header id="header" class="topbar-dark logo-center">
  <div class="topbar">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="topbar-left text-md-start text-center">
            <ul class="list-inline">
              @foreach ($setting as $item)
                  
          
              <li><i class="fa fa-envelope-o"> </i>  {{$item->email}}</li>
          
   
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="topbar-right text-md-end text-center">
            <ul class="list-inline">
              <li><i class="fa fa-phone"></i>{{$item->contact}}</li>
              <li>
                <a href="#"><i class="fa fa-facebook"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-instagram"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
              </li>           @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--=================================
mega menu -->

  <div class="menu">
    <!-- menu start -->
    <nav id="menu" class="mega-menu">
      <!-- menu list items container -->
      <section class="menu-list-items">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center position-relative">
              <!-- menu logo -->
              <ul class="menu-logo">
                <li>
                  <a href="/"><img id="logo_dark_img" src="{{asset('assets')}}/images/logo-dark.png" alt="logo" />
                  </a>
                </li>
              </ul>
              <!-- menu links -->
              <ul class="menu-links">
                <!-- active class -->
                <li class="active">
                  <a href="javascript:void(0)">
                    Anasayfa </a>
                  <!-- drop down multilevel  -->
                
                </li>
             
                <li>
                  <a href="javascript:void(0)">Kurumsal <i class="fa fa-angle-down fa-indicator"></i></a>
                  <!-- drop down multilevel  -->
                  <ul class="drop-down-multilevel">
                    <li>
                      <a href="javascript:void(0)">Faaliyet Alanlarımız
                       
                      </a>
                      <!-- drop down second level -->
                      
                    </li>
                    
                    <li>
                      <a href="javascript:void(0)">Hakkımızda   
                       
                      </a>
                      <!-- drop down second level -->
                      
                    </li>
                    <li>
                      <a href="javascript:void(0)">Sıkça Sorulan Sorular   
                       
                      </a>
                      <!-- drop down second level -->
                      
                    </li>
                   
                  </ul>
                </li>
                <li>
                  <a href="javascript:void(0)">Araçlarımız
                    <i class="fa fa-angle-down fa-indicator"></i></a>
                  <!-- drop down multilevel  -->
                  <ul class="drop-down-multilevel">
                    <li><a href="listing-01.html">text-md-start</a></li>
                   
                  </ul>
                </li>
                <li>
                  <a href="javascript:void(0)">Galeri   
                   
                  </a>
                  <!-- drop down second level -->
                  
                </li>
                <li>
                  <a href="javascript:void(0)">İş Ortaklarımız
                    <i class="fa fa-angle-down fa-indicator"></i></a>
                  <!-- drop down multilevel  -->
                  <ul class="drop-down-multilevel">
                    <li><a href="details-01.html">details 01</a></li>
                    <li><a href="details-02.html">details 02</a></li>
                  </ul>
                </li>
                <li>
                  <a href="javascript:void(0)">
                    İLETİŞİM </a>
                  <!-- drop down multilevel  -->
                 
                  
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </nav>
    <!-- menu end -->
  </div>
</header>