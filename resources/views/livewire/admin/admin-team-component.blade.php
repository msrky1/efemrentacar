<main>
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <a href="{{route('admin.team.add')}}" class="btn app-btn-primary">Ekle</a>
                <h1 class="app-page-title">Ekibim</h1>
              

                <!--//app-card-->


                <!--//row-->



      
                <div class="row g-4 mb-4">
                    @foreach ($lawyer as $law)
                        
                

                    
                  
                    <div class="col-12 col-lg-4">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('storage/team')}}/{{$law->image}}"
                                alt="Card image cap">
                                <div class="col-md-3">
                                    <div class="app-card-actions">
                                        <div class="dropdown">
                                            <div class="dropdown-toggle no-toggle-arrow" data-toggle="dropdown"
                                                aria-expanded="false">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                    class="bi bi-three-dots-vertical" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                                </svg>
                                            </div>
                                            <!--//dropdown-toggle-->
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a class="dropdown-item" href="#"><svg width="1em" height="1em"
                                                            viewBox="0 0 16 16" class="bi bi-eye mr-2" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z" />
                                                            <path fill-rule="evenodd"
                                                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                        </svg>Görüntüle</a></li>
                                                <li><a class="dropdown-item" href="{{ route('admin.team.edit', ['lawyer_id' => $law->id]) }}"><svg width="1em" height="1em"
                                                            viewBox="0 0 16 16" class="bi bi-pencil mr-2"
                                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                                        </svg>Düzenle</a></li>
                                              
                                                <li><a class="dropdown-item" href="#" wire:click.prevent="deleteTeam({{ $law->id }})" ><svg width="1em"  height="1em"
                                                            viewBox="0 0 16 16" class="bi bi-trash mr-2" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                            <path fill-rule="evenodd"
                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                        </svg>Sil</a></li>
                                            </ul>
                                            
                                        </div>
                                        
                                        <!--//dropdown-->
                                    </div>
                                    <!--//app-card-actions-->
                                  
                                </div>
                             
                            <div class="card-body">
                                <h5 class="card-title">{{$law->name}}</h5>
                          
                                <p class="card-text">{!! $law->about = Str::limit($law->about, 100) !!}</p>
                               
                                
                            </div>
                        </div>
                        
                        <!--//app-card-->
                    </div>
                    @endforeach

                </div>
          
                <!--//row-->

            </div>

            <!--//container-fluid-->
        </div>
        <!--//app-content-->
</main>