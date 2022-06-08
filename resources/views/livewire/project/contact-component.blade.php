
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
   contact -->  <section class="contact page-section-ptb white-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-title">
              <span>Haritadan yol tarifi alarak bulunduğumuz konuma ulaşabilirsiniz.</span>
              <h2>KONUM</h2>
              <div class="separator"></div>
            </div>
          </div>
        </div>
        <section class="contact-map">
          <div class="container-fluid">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12648.671629833352!2d36.92840216851988!3d37.574663693441856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152ddd133a479f5b%3A0x29c5f6e85c5f6a7c!2sKahramanmara%C5%9F%20Oto%20Kiralama%20Efem%20Rent%20A%20Car!5e0!3m2!1str!2str!4v1654601758481!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </section>
    
        </div>
      </div>
    </section>