
    <section class="inner-intro bg-1 bg-overlay-black-70">
        <div class="container">
          <div class="row text-center intro-title">
            <div class="col-md-6 text-md-start d-inline-block">
              <h1 class="text-white">ARAÇLARIMIZ</h1>
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
                <li><span>Araçlarımız</span></li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="our-team white-bg page-section-ptb">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-title">
                <span>Araç Filomuz</span>
                <h2>EFEM RENT A CAR HİZMET ARAÇLARIMIZ</h2>
                <div class="separator"></div>
              </div>
            </div>
          </div>
          <div class="row">
           
           @foreach ($team as $item)
               
         
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="team  text-center mb-sm-0 mb-4">
                <div class="team-image">
                  <img class="img-fluid icon" src="{{asset('storage')}}/team/{{$item->image}}" alt="">
                   <div class="team-social">
                     <ul>
                      <li>
                        <a class="icon-1" href="https://www.facebook.com/ayaz4666"
                          ><i class="fa fa-facebook"></i
                        ></a>
                      </li>
                      <li>
                        <a class="icon-2" href="https://www.instagram.com/efemotokiralama46/"
                          ><i class="fa fa-instagram"></i
                        ></a>
                      </li>
                    </ul>
                   </div>
                </div>
                <div class="team-name">
                  <h5 class="text-black">{{$item->name}}</h5>
                  <span class="text-black">{{$item->date_birth}} Model</span>
                  <span class="text-black">{{$item->about}} Vites</span>
                  <a href="https://wa.me/05369265914" target="_blank">     <button
                  id="submit"
                  name="submit"
                  type="submit"
                  value="Send"
                  class="button red"
                >
                <i class="fa fa-whatsapp"></i>
               İletişim
                 
                </button></a>
                 </div>
              </div>
            </div>
            @endforeach
{{--          
    
            <div class="col-lg-3 col-md-6 col-sm-6">            @foreach ($team as $item)
              <div class="team text-center mb-0">
                <div class="team-image">
                  <img class="img-fluid icon" src="{{asset('storage')}}/team/{{$item->image}}" alt="" />
                  <div class="team-social">
                    <ul>
                      <li>
                        <a class="icon-1" href="https://www.facebook.com/ayaz4666"
                          ><i class="fa fa-facebook"></i
                        ></a>
                      </li>
                      <li>
                        <a class="icon-2" href="https://www.instagram.com/efemotokiralama46/"
                          ><i class="fa fa-instagram"></i
                        ></a>
                      </li>
                     
                    </ul>
                  </div>
                </div>
                <div class="team-name">
                  <h5 class="text-black">{{$item->name}}</h5>
                  <span class="text-black">{{$item->date_birth}} Model</span>
                  <span class="text-black">{{$item->about}} Vites</span>
                </div>
              </div>
              @endforeach
            </div>
        --}}
          </div>

   
        </div>
      </section>
  
  