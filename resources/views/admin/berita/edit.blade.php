    <div class="modal fade" id="edit.{{$dt->id}}" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="container mt-5 mb-5">
                        <button type="button" class="btn-close mb-3" data-bs-dismiss="modal" aria-label="Close"></button>
                        <h4 class="modal-title" id="myLargeModalLabel"> </h4> 
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card border-0  rounded">
                                    <div class="card-body">
                                        <form action="{{ route('berita.update', $dt->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                
                                            <div class="form-group">
                                                <label class="font-weight-bold">GAMBAR</label>
                                                <input type="file" class="form-control" name="image">
                                            </div>
                
                                            <div class="form-group">
                                                <label class="font-weight-bold">JUDUL</label>
                                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $dt->title) }}" placeholder="Masukkan Judul DT">
                                            
                                                <!-- error message untuk title -->
                                                @error('title')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                
                                            <div class="form-group">
                                                <label class="font-weight-bold">KONTEN</label>
                                                <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5" placeholder="Masukkan Konten DT">{{ old('content', $dt->content) }}</textarea>
                                            
                                                <!-- error message untuk content -->
                                                @error('content')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                
                                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
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

