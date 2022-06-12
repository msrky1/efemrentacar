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
                <a target="_blank" href="https://www.facebook.com/ayaz4666"><i class="fa fa-facebook"></i></a>
              </li>
              <li>
                <a target="_blank" href="https://www.instagram.com/efemotokiralama46/"><i class="fa fa-instagram"></i></a>
              </li>
                   @endforeach
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
                  <a href="/">
                    ANASAYFA </a>
                  <!-- drop down multilevel  -->
                
                </li>
             
                <li>
                  <a href="javascript:void(0)">KURUMSAL <i class="fa fa-angle-down fa-indicator"></i></a>
                  <!-- drop down multilevel  -->
                  <ul class="drop-down-multilevel">
                    
                    
                    <li>
                      <a href="/hakkimizda">Hakkımızda   
                       
                      </a>
                      <!-- drop down second level -->
                      
                    </li>
                    <li>
                      <a href="/sss">Sıkça Sorulan Sorular   
                       
                      </a>
                      <!-- drop down second level -->
                      
                    </li>
                   
                  </ul>
                </li>
                <li>
                  <a href="javascript:void(0)">ARAÇLARIMIZ
                    <i class="fa fa-angle-down fa-indicator"></i></a>
                  <!-- drop down multilevel  -->
                  <ul class="drop-down-multilevel">
                    <li><a href="/tum-araclarimiz">Tüm Araçlarımız</a></li>
                   
                  </ul>
                </li>
                <li>
                  <a href="/galeri">GALERİ   
                   
                  </a>
                  <!-- drop down second level -->
                  
                </li>
                {{-- <li>
                  <a href="javascript:void(0)">İş Ortaklarımız
                    <i class="fa fa-angle-down fa-indicator"></i></a>
                  <!-- drop down multilevel  -->
                  <ul class="drop-down-multilevel">
                    <li><a href="details-01.html">details 01</a></li>
                    <li><a href="details-02.html">details 02</a></li>
                  </ul>
                </li> --}}
                <li>
                  <a href="/iletisim">
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