
    <section class="inner-intro bg-1 bg-overlay-black-70">
        <div class="container">
          <div class="row text-center intro-title">
            <div class="col-md-6 text-md-start d-inline-block">
              <h1 class="text-white">İLETİŞİM</h1>
            </div>
            <div class="col-md-6 text-md-end float-end">
              <ul class="page-breadcrumb">
                <li>
                  <a href="#"><i class="fa fa-home"></i> Anasayfa</a>
                  <i class="fa fa-angle-double-right"></i>
                </li>
                <li>
                  <a href="#">Sayfalar</a> <i class="fa fa-angle-double-right"></i>
                </li>
                <li><span>İletişim</span></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
  
      <!--=================================
   inner-intro -->
  
      <!--=================================
   contact -->
  
      <section class="contact page-section-ptb white-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-title">
                <span>BİR ARABAYA MI İHTİYACINIZ VAR?</span>
                <h2>HEMEN BİZİ ARAYIN!</h2>
                <div class="separator"></div>
              </div>
            </div>
          </div>
          @foreach ($setting as $item)
              

          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="contact-box text-center grey-border">
                <i class="fa fa-map-marker"></i>
                <h5>Adres</h5>
                <p>{{$item->address}}</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="contact-box text-center grey-border">
                <i class="fa fa-phone"></i>
                <h5>Telefon</h5>
                <p>{{$item->contact}}</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-2 mb-sm-0">
              <div class="contact-box text-center grey-border mb-4 mb-sm-0">
                <i class="fa fa-envelope-o"></i>
                <h5>Email</h5>
                <p>{{$item->email}}</p>
              </div>
            </div>
            
          </div>
          @endforeach
        </div>
      </section>
  
      <!--=================================
   contact -->