@extends('layout_catering.app', ['title' => 'Menu Makanan'])

@section('modal-button')
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModalCenter">Buat
        Menu Makanan</button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Gambar Lama</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div style="max-height: 66vh; overflow: auto">
                        <img src="{{ asset('storage/fileMakanan/' . $makanan->gambar) }}" alt="img" width="100%">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card table-responsive p-md-4 p-2">
                <form action="/menu-makanan/{{ $makanan->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" class="form-control" name="gambar" id="gambar">
                    </div>
                    <div class="mb-3">
                        <label for="nama_menu" class="form-label">Nama Menu</label>
                        <input type="text" required class="form-control" value="{{$makanan->nama_menu}}" name="nama_menu" id="nama_menu"
                            placeholder="Masukkan Nama Menu">
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" required class="form-control" value="{{$makanan->harga}}" name="harga" id="harga"
                            placeholder="Masukkan Harga">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi Makanan</label>
                        <textarea name="deskripsi" id="editor" style="height: 300px; color:#000;">{{$makanan->deskripsi}}</textarea>
                    </div>
                    <div class="mt-5 justify-content-center d-flex">
                        <a href="{{ url('/menu-makanan') }}" class="btn btn-secondary" style="margin-right: 6px;">Kembali</a>
                        <button type="submit" class="btn btn-primary" style="margin-left: 6px;">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
