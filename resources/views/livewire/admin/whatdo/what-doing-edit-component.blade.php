<main>
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <h1 class="app-page-title">Neler Yapıyoruz</h1>
                <hr class="mb-4">
                <div class="row g-4 settings-section">
                    <div class="col-12 col-md-4">
                        <h3 class="section-title">Neler Yapıyoruz?</h3>
                        <div class="section-intro">Eklemek için formu eksiksiz doldurun<a
                                href="{{ route('admin.help') }}"><br>
                                Daha
                                Fazla Öğren</a></div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="app-card app-card-settings shadow-sm p-4">
                            @if (Session::has('message'))
                                <div class="alert alert-success">
                                    <strong>{{ Session::get('message') }}</strong> <a style="color: red"
                                        href="{{ route('admin.whatdo') }}"> Neler Yapıyoruz!</a>
                                </div>
                            @endif
                            <div class="app-card-body">
                                <form wire:submit.prevent="updateWhatdo()">
                                    @csrf
                                    <div class="mb-3">

                                        <label for="setting-input-2" class="form-label">Başlık </label>:
                                        <input type="text" name="title" class="form-control" wire:model="title"
                                            required>


                                    </div>
                                    <div class="mb-3">

                                        <label for="setting-input-2" class="form-label">Uzantı </label>:
                                        <input type="text" name="title" class="form-control" wire:model="slug"
                                            wire:keyup="generateSlug">


                                    </div>

                                    <div class="mb-3" wire:ignore>
                                        <label for="setting-input-2" class="form-label">İçerik </label>:<br>

                                        <textarea wire:model.defer="description" class="form-control" id="description" name="description">{!! $description !!}
                                        
                                        </textarea>
                                    </div>
                                    <div class="mb-3" wire:ignore>
                                        <label for="setting-input-2" class="form-label">İkon Belirle </label>:<br>
                                         
                                        <select class="form-select" aria-label="Default select example" 
                                        wire:model = "icon">
                                        <option selected>İkon Belirleyin</option>
                                        <option value="<i class='fa fa-users'></i>">Kullanıcı</option>
                                        <option value="<i class='fa fa-pencil-square-o'></i>">Kalem</option>
                                        <option value="<i class='fa fa-line-chart'></i>">Çizelge</option>
                                        <option value="<i class='fa fa-briefcase'></i>">İş Çantası</option>
                                            
                                          </select>
                                    </div>  
                                    <div class="mb-3">
                                        <input type="file" name="image" wire:model="newimage" />
                                    </div>
                                    <div class="mb-3">


                                        
                                        @if ($newimage)
                                            <img src="{{ $newimage->temporaryUrl() }}" width="250">
                                        @else
                                            <img src="{{ asset('storage/whatdoing') }}/{{ $image }}"
                                                width="250">
                                        @endif
                                    </div>











                                    <button class="btn app-btn-primary" type="submit">
                                        Güncelle
                                    </button>
                                </form>


                            </div>
                            <!--//app-card-body-->

                        </div>
                        <!--//app-card-->
                    </div>
                </div>


                <!--//row-->


                <hr class="my-4">
                <div class="row g-4 settings-section">
                    <div class="col-12 col-md-4">
                        <h3 class="section-title">Web Sitesi Plan</h3>
                        <div class="section-intro">Web Sitesi Pro <a href="{{ route('admin.help') }}">Web Sitesi Pro
                                Panel</a></div>
                        <div class="section-intro">Geliştirici Mahmut Sarıkaya
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="app-card app-card-settings shadow-sm p-4">

                            <div class="app-card-body">
                                <div class="mb-2"><strong>Web Sitesi</strong> Pro</div>
                                <div class="mb-2"><strong>Statüsü:</strong> <span
                                        class="badge bg-success">Aktif</span></div>
                                <div class="mb-2"><strong>Bitiş:</strong> 2030-09-24</div>
                                <div class="mb-4"><strong>Faturalar:</strong> <a href="#">Görüntüle</a></div>
                                <div class="row justify-content-between">
                                    <div class="col-auto">
                                        <a class="btn app-btn-primary" href="#">Full Sürüm --version 1.00</a>
                                    </div>

                                </div>

                            </div>
                            <!--//app-card-body-->

                        </div>
                        <!--//app-card-->
                    </div>
                </div>
                <!--//row-->

            </div>
            <!--//container-fluid-->
        </div>
        <!--//app-content-->
</main>
<script>
    ClassicEditor
        .create(document.querySelector('#description'))
        .then(editor => {
            editor.model.document.on('change:data', () => {
                @this.set('description', editor.getData());
            })
        })
        .catch(error => {
            console.error(error);
        });
</script>
