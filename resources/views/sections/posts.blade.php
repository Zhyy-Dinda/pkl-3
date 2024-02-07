{{-- last post --}}
<section class="production pb-10 pb-md-14 border-bottom" id="bootstrap-demos">
    <div class="container ">


        <div class="p-3 text-center"><img src="dist/images/logos/logo-light.png" alt="" class="img-fluid"></div>
        <h2 class="text-center fs-9 fw-bolder">Latest Post</h2>
        <p class="mb-0 fs-5 text-center">Collection of live demos included with package.</p>
        <div class="domo-contect position-relative">
            <div class="demos-view mt pt-lg-8">
                <div class="row justify-content-center">
                    <div class="row">
                        <!-- Column -->
                        @forelse ($data as $dt)
                        
                        <div class="col-lg-4 mt-3">
                            <div class="card">
                                <img class="card-img-top mt-3 img-responsive" style="max-height: 200px;
                                height: 200px;
                                object-fit: contain" src="{{ Storage::url('public/berita/').$dt->image }}" width="500" height="600" alt="Card image cap">
                                <div class="card-body">
                                    <div class="d-flex no-block align-items-center mb-3">
                                        <span class="d-flex align-items-center"><i class="ti ti-calendar me-1 fs-5"></i>{{$dt->info}}</span>
                                        <div class="ms-auto">
                                            <a href="javascript:void(0)" class="link text-muted"><i
                                                    class="ti ti-message-circle me-1 fs-5"></i>
                                                3 Comments</a>
                                        </div>
                                    </div>
                                    <h3 class="fs-6">
                                        {{$dt->title}}
                                    </h3>
                                    <p class="mb-0 mt-2 text-muted">
                                        {{$dt->content}}
                                    </p>
                                    <div class="text-end">
                                        <button class="btn btn-sm btn-outline-primary rounded-pill mt-3">
                                            Read more
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                            <div class="alert">Data belum ada</div>
                        @endforelse
                        <!-- Column -->
                        <div class="mt-3">
                            {{$data->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        {{-- card --}}
        
    </div>
    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>
</section>
