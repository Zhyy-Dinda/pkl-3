@extends('admin.index')
{{-- berita --}}
@section('content')
    <div class="container-fluid">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow rounded">
                        <div class="card-body">
                            <button type="button" class="btn mb-5  shadow btn-secondary" data-bs-toggle="modal"
                                data-bs-target="#bs-example-modal-lg"> Add</button>
                            <hr>
                            <table class="table mt-5 table-bordered">
                                <thead>
                                    <tr class="text-center ">
                                        <th scope="col">No</th>
                                        <th scope="col">GAMBAR</th>
                                        <th scope="col">JUDUL</th>
                                        <th scope="col">CONTENT</th>
                                        <th scope="col">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @forelse ($data as $dt)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td class="text-center">
                                                <img src="{{ Storage::url('public/berita/') . $dt->image }}" class="rounded"
                                                    style="width: 150px">
                                            </td>
                                            <td>{{ $dt->title }}</td>
                                            <td>{!! $dt->content !!}</td>
                                            <td class="text-center">
                                                <button type="submit" class="btn mb-5 btn-sm shadow btn-secondary"
                                                    data-bs-toggle="modal" data-bs-target="#edit.{{$dt->id}}">
                                                    Edit</button>
                                            
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('berita.destroy', $dt->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn mb-5 btn-sm shadow btn-danger">HAPUS</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <div class="alert alert-danger">
                                            Data Post belum Tersedia.
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>
                            <div class="paginate my-5">
                                {{ $data->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.berita.create')
    @include('admin.berita.edit')
@endsection
