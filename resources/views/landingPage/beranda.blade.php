@extends('app')

@section('content')
<section class=" hero-section position-relative overflow-hidden mb-0 mb-lg-11">
    <div class="bg-img-info col-xl-6 d-none d-xl-block"></div>
    <div class="container ">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="hero-content  my-1 my-xl-0 my-xl-text-secondary"><i
                        class="ti ti-rocket text-secondary fs-6"></i>
                    @forelse ($data2 as $dt)
                        
                    <h1 class="fw-bolder mb-4 fs-13" data-aos="fade-up" data-aos-delay="400"
                        data-aos-duration="1000">
                        <span class="text-primary ">{{ $dt->heading_1 }}
                            <P style="font-size: 12px">{{ $dt->sub_heading }}</P>
                        </span>{{ $dt->heading_2 }}
                    </h1>
                    <h6 class="d-flex align-items-center text-center gap-2 fs-4 fw-semibold mb-3"
                        data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">{{ $dt->selogan }}
                    </h6>
                    @empty
                        
                    <div class="card shadow">
                        <div class="alert alert-danger">
                            belulm ada data
                        </div>
                    </div>
                    
                    @endforelse


                    {{-- modal --}}

                    <!-- Long Content Scroll Modal -->
                    <div class="modal fade" id="scrollable-modal" tabindex="-1" role="dialog"
                        aria-labelledby="scrollableModalTitle" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="scrollableModalTitle">More </h5> <button
                                        type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h1>Profil Lombok Tengah-CSIRT</h1>
                                    <p>“(Ingatlah) Kechilafan Satu Orang Sahaja Tjukup Sudah Menjebabkan Keruntuhan
                                        Negara” MAYJEN TNI DR. ROEBIONO KERTOPATI</p>

                                    <p>Pemerintah Kota mataram - Computer Security Incident Response Team (
                                        MataramKota-CSIRT).</p>

                                    <p>Bertanggung Jawab sebagai ketua MataramKota-CSIRT adalah Kepala Dinas
                                        Komunikasi
                                        dan Informatika Kota Mataram.</p>

                                    <p>Anggota Tim dari MataramKota-CSIRT adalah beberapa staf yang ada pada Dinas
                                        Komunikasi dan Informatika Kota Mataram dan beberapa Pranata Komputer di
                                        lingkungan Pemerintah Kota Mataram. Dalam Pembentukannya, MataramKota-CSIRT
                                        mengemban misi :</p>

                                    <p>a. Menciptakan Keamanan Siber pada Pemerintah Kota Mataram;</p>

                                    <p>b. Membangun Kapasitas Sumber Daya Keamanan Siber pada Pemerintah Kota
                                        Mataram.
                                        Konstituen MataramKota-CSIRT yaitu Instansi Pemerintah pengguna TIK di
                                        lingkungan Kota Mataram.</p>
                                </div>
                                <div class="modal-footer"> <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal"> Close </button>
                                    {{-- <button type="button" class="btn btn-primary"> Save changes </button>  --}}
                                </div>
                            </div> <!-- /.modal-content -->
                        </div> <!-- /.modal-dialog -->
                    </div> <!-- /.modal -->

                    {{-- end modal --}}


                    <div class="d-sm-flex align-items-center gap-3 mb-6" data-aos="fade-up" data-aos-delay="700"
                        data-aos-duration="1000">
                        <div class="button-group">
                            <button type="button" class="btn mb-1 me-1 btn-primary" data-bs-toggle="modal"
                                data-bs-target="#scrollable-modal" fdprocessedid="flss0a"> Read More </button>
                        </div>

                        <a class="btn mb-1 me-1 btn-light d-block scroll-link" href="/berita">Lapor Insident</a>
                    </div>
                    <div class="d-sm-flex align-items-center text-primary gap-3 mb-4" data-aos="fade-up"
                        data-aos-delay="1000" data-aos-duration="1000">
                        <div class="border border-dashed px-3 py-2 rounded text-center text-sm-start mb-3 mb-sm-0">
                            <h5 class="mb-1 fw-bolder">425+</h5>
                            <p class="mb-0 ">Page Templates</p>
                        </div>
                        <div class="border border-dashed px-3 py-2 rounded text-center text-sm-start mb-3 mb-sm-0">
                            <h5 class="mb-1 fw-bolder">150+</h5>
                            <p class="mb-0">UI Components</p>
                        </div>
                        <div class="border border-dashed px-3 py-2 rounded text-center text-sm-start">
                            <h5 class="mb-1 fw-bolder">2000+</h5>
                            <p class="mb-0">Font Icons</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 d-none d-xl-block">
                <div class="hero-img-slide position-relative p-4 rounded">
                    <div class="d-flex flex-row">
                        <div class="">
                            <div class="banner-img-1 slideup">
                                <img src="dist/images/hero-img/banner.svg" alt="" class="img-fluid">
                            </div>
                            <div class="banner-img-1 slideup">
                                <img src="dist/images/hero-img/banner.svg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="">
                            <div class="banner-img-2 slideDown">
                                <img src="dist/images/hero-img/banner-2.svg" alt="" class="img-fluid">
                            </div>
                            <div class="banner-img-2 slideDown">
                                <img src="dist/images/hero-img/banner-2.svg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection