<section class="inner-intro bg-1 bg-overlay-black-70">
    <div class="container">
        <div class="row text-center intro-title">
            <div class="col-md-6 text-md-start d-inline-block">
                <h1 class="text-white">HAKKIMIZDA</h1>
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
                    <li><span>HAKKIMIZDA</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>



<section class="welcome-4 page-section-ptb white-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
           <div class="section-title">
             <span>EFEM RENT A CAR</span>
             <h2>HAKKIMIZDA</h2>
             <div class="separator"></div>
           @foreach ($about as $item)
               
      
             <p> {{$item->description }}</p>
           </div>

           @endforeach
        </div>
      </div>
     
      
    </div>
  </section>