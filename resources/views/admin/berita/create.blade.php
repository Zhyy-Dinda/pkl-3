<div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="container mt-5 mb-5">
                    <button type="button" class="btn-close mb-3" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h4 class="modal-title" id="myLargeModalLabel"> </h4> 
                    <div class="row">
                        <div class="col-md-12">

                            <div class=" border-0  rounded">
                                <div class="card-body">
                                    <form action="{{ route('berita.store') }}" method="post"
                                        enctype="multipart/form-data">

                                        @csrf

                                        <div class="form-group">
                                            <label class="font-weight-bold mt-3">GAMBAR</label>
                                            <input type="file"
                                                class="form-control @error('image') is-invalid @enderror"
                                                name="image">

                                            <!-- error message untuk title -->
                                            @error('image')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="font-weight-bold mt-3">JUDUL</label>
                                            <input type="text"
                                                class="form-control @error('title') is-invalid @enderror" name="title"
                                                value="{{ old('title') }}" placeholder="Masukkan Judul Post">

                                            <!-- error message untuk title -->
                                            @error('title')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="font-weight-bold mt-3">Info</label>
                                            <input type="date"
                                                class="form-control @error('info') is-invalid @enderror" name="info"
                                                value="{{ old('info') }}" placeholder="Masukkan info Post">

                                            <!-- error message untuk title -->
                                            @error('title')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="font-weight-bold mt-3">KONTEN</label>
                                            <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5"
                                                placeholder="Masukkan Konten Post">{{ old('content') }}</textarea>

                                            <!-- error message untuk content -->
                                            @error('content')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        {{-- button --}}

                                        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                        <button type="reset" class="btn btn-md btn-warning">RESET</button>

                                      

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body">...</div>
        </div> <!-- /.modal-content -->
    </div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->
