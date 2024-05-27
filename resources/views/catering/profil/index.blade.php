@extends('layout_catering.app', ['title' => 'Profil'])

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Update Profile</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.update') }}">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                        value="{{ old('nama_lengkap') ?? Auth::user()->nama_lengkap }}">
                                </div>

                                <div class="mb-3">
                                    <label for="no_wa" class="form-label">Nomor WhatsApp</label>
                                    <input type="text" class="form-control" id="no_wa" name="no_wa"
                                        value="{{ old('no_wa') ?? Auth::user()->no_wa }}">
                                </div>

                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username"
                                        value="{{ old('username') ?? Auth::user()->username }}">
                                </div>
                                <div class="mb-3">
                                    <label for="kontak" class="form-label">Kontak</label>
                                    <input type="text" class="form-control" id="kontak" name="kontak"
                                        value="{{ old('kontak') ?? Auth::user()->kontak }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea class="form-control" id="alamat" name="alamat" rows="8">{{ old('alamat') ?? Auth::user()->alamat }}</textarea>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deskripsi Perusahaan</label>
                                    <textarea name="deskripsi" id="editor" style="height: 300px; color:#000;">{{ old('deskripsi') ?? Auth::user()->deskripsi }}</textarea>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
