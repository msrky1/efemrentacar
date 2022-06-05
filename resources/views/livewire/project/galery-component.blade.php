<section class="inner-intro bg-1 bg-overlay-black-70">
    <div class="container">
        <div class="row text-center intro-title">
            <div class="col-md-6 text-md-start d-inline-block">
                <h1 class="text-white">GALERİ</h1>
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
                    <li><span>Galeri</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="recent-vehicle white-bg page-section-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <span>Efem RENT A CAR</span>
                    <h2>GALERİ</h2>
                    <div class="separator"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0">

        <div class="row g-0">
            <div class="col-md-12">
                <div class="isotope popup-gallery column-5">
                    @foreach ($galery as $item)
                        
                   
                    <div class="grid-item mercedes hyundai">
                        <div class="car-item-3">
                            <img class="img-fluid center-block" src="{{ asset('storage')}}/galery/{{$item->image}}" alt="">
                            <div class="car-popup">
                                <a class="popup-img" href="{{ asset('storage')}}/galery/{{$item->image}}"><i
                                        class="fa fa-plus"></i></a>
                            </div>
                            <div class="car-overlay text-center">
                                <a class="link" href="#">Toyota avalon hybrid </a>
                                <span class="price">$32,698</span>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
