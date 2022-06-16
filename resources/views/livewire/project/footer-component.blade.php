<footer class="footer footer-black bg-2 bg-overlay-black-90">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="social">
                    <ul>
                        <li>
                            <a class="facebook" href="https://www.instagram.com/efemotokiralama46/">İnstagram <i
                                    class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a class="twitter" href="#">twitter <i class="fa fa-twitter"></i>
                            </a>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">

                @foreach ($setting as $item)
                    <div class="about-content">
                        {{-- <img class="img-fluid" id="logo-footer" src="{{asset('storage')}}/image/{{$item->image}}" alt="" /> --}}
                        <h2 style="color: white">
                            {{ $item->name }}
                        </h2>
                    </div>
                    <div class="address">
                        <ul>
                            <li>
                                <i class="fa fa-map-marker"></i><span>{{ $item->address }}</span>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i><span>{{ $item->contact }}</span>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i><span>{{ $item->email }}</span>
                            </li>
                        </ul>
                    </div>
            </div>
            @endforeach

            <div class="col-lg-3 col-md-6">
                <div class="usefull-link">
                    <h6 class="text-white">Araçlarımız</h6>
                    <ul>

                        @foreach ($team as $item)
                            <li>
                                <a href="/tum-araclarimiz"><i class="fa fa-angle-double-right"></i> {{ $item->name }}
                                </a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="recent-post-block">
                    <h6 class="text-white">Galeri</h6>
                    <div class="recent-post">
                        <div class="recent-post-image">
                            @foreach ($galery as $item)
                                <a href="/galeri"> <img src="{{ asset('storage') }}/galery/{{ $item->image }}"
                                        alt="" /> </a>
                            @endforeach

                        </div>

                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="news-letter">
                    <h6 class="text-white">Hakkımızda</h6>
                    <p>
                        @foreach ($about as $item)
                            {{ $item->title_one }}
                        @endforeach
                    </p>

                </div>
            </div>
        </div>


    </div>

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="text-lg-start text-center">
                        <p>
                            Created By Mahmut Sarıkaya
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <ul class="list-inline text-lg-end text-center">
                        <li><a href="/faaliyet-alanlarimiz">Faaliyet Alanlarımız</a> |</li>
                        <li><a href="/hakkimizda">Hakkımızda </a> |</li>
                        <li><a href="/iletisim">İletişim</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="https://wa.me/905369265914" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>
