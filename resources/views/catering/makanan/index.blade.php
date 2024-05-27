@extends('layout_catering.app', ['title' => 'Menu Makanan'])

@section('content')
    <div class="row">
        <div class="col-12 mb-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Buat
                Menu Makanan</button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Menu Makanan</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                            </button>
                        </div>
                        <form action="{{ url('/menu-makanan') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="gambar" class="form-label">Gambar</label>
                                    <input type="file" required class="form-control" name="gambar" id="gambar">
                                </div>
                                <div class="mb-3">
                                    <label for="nama_menu" class="form-label">Nama Menu</label>
                                    <input type="text" required class="form-control" name="nama_menu" id="nama_menu"
                                        placeholder="Masukkan Nama Menu">
                                </div>
                                <div class="mb-3">
                                    <label for="harga" class="form-label">Harga</label>
                                    <input type="number" required class="form-control" name="harga" id="harga"
                                        placeholder="Masukkan Harga">
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deskripsi Makanan</label>
                                    <textarea name="deskripsi" id="editor" style="height: 300px; color:#000;"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card table-responsive p-md-4 p-2">
                <table class="table table-striped" id="myTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Nama Menu</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($makanan as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ asset('storage/fileMakanan/' . $item->gambar) }}" alt="img"
                                        width="70px"></td>
                                <td>{{ $item->nama_menu }}</td>
                                <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                                <td>{{ rtrim(substr(strip_tags($item->deskripsi), 0, 50)) }}{{ strlen(strip_tags($item->deskripsi)) > 50 ? '...' : '' }}
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center" style="gap: 6px;">
                                        <a href="{{ url('menu-makanan/' . $item->id) }}" class="btn btn-primary">Edit</a>
                                        <a href="/menu-makanan/delete/{{ $item->id }}" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus item ini?')">
                                            Delete
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
