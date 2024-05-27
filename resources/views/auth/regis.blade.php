@extends('layout_kantor.app', ['title' => 'Regis'])

@section('content')
    <section style="width:100%; overflow:hidden;">
        <div class="row">
            <div class="col-md-6 align-self-center">
                <div class="p-md-4 p-3">
                    <div class="card shadow border-0 p-md-4">
                        <h4>Halaman Registrasi</h4>
                        @if (session('success'))
                            <p class="alert alert-success">{{ session('success') }}</p>
                        @endif
                        @if (session('wait'))
                            <p class="alert alert-danger">{{ session('wait') }}</p>
                        @endif
                        @if ($errors->any())
                            @foreach ($errors->all() as $err)
                                <p class="alert alert-danger">{{ $err }}</p>
                            @endforeach
                        @endif
                        <form action="{{ url('/regis') }}" method="POST">
                            @csrf
                            <div style="height: 50vh; overflow:auto;">
                                <div class="mb-3">
                                    <label for="roles" style="color:#000;">Role</label>
                                    <select required name="roles" id="roles"
                                        style="width: 100%; padding:8px 12px; border:1px solid #a8a8a8; border-radius:4px;">
                                        <option value="" selected disabled>Pilih Role</option>
                                        <option value="Catering">Catering</option>
                                        <option value="Customer">Customer</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="nama_lengkap" id="label_nama_lengkap" style="color:#000;">Nama
                                        </label>
                                    <input required name="nama_lengkap" type="text" id="nama_lengkap"
                                        style="width: 100%; padding:6px 12px; border:1px solid #a8a8a8; border-radius:4px;"
                                        placeholder="Masukkan Nama " />
                                </div>

                                <script>
                                    document.getElementById('roles').addEventListener('change', function() {
                                        var roles = this.value;
                                        var labelNamaLengkap = document.getElementById('label_nama_lengkap');

                                        if (roles === 'Catering') {
                                            labelNamaLengkap.textContent = 'Nama Perusahaan';
                                            document.getElementById('nama_lengkap').placeholder = 'Masukkan Nama Perusahaan';
                                        } else {
                                            labelNamaLengkap.textContent = 'Nama Lengkap';
                                            document.getElementById('nama_lengkap').placeholder = 'Masukkan Nama Lengkap';
                                        }
                                    });
                                </script>
                                <div class="mb-3">
                                    <label for="username" style="color:#000;">Username</label>
                                    <input required name="username" type="text" id="username"
                                        style="width: 100%; padding:6px 12px; border:1px solid #a8a8a8; border-radius:4px;"
                                        placeholder="Masukkan Username" />
                                </div>
                                <div class="mb-3">
                                    <label for="no_wa" style="color:#000;">Nomor Whatsapp</label>
                                    <input required name="no_wa" type="number" id="no_wa"
                                        style="width: 100%; padding:6px 12px; border:1px solid #a8a8a8; border-radius:4px;"
                                        placeholder="Masukkan Nomor Whatsapp" />
                                </div>
                                <div class="mb-3">
                                    <label for="password" style="color:#000;">Password</label>
                                    <input required name="password" type="password" id="password"
                                        style="width: 100%; padding:6px 12px; border:1px solid #a8a8a8; border-radius:4px;"
                                        placeholder="Masukkan Password" />
                                </div>
                            </div>
                            <div class="text-center pt-4">
                                <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                            </div>
                        </form>
                        <div class="mt-3">
                            <p>Sudah Punya Akun? <a class="text-primary" href="{{ url('/login') }}">Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('kantor/images/bg_3.jpg') }}" style="  filter: brightness(0.8); " alt="" width="100%">
            </div>
        </div>
    </section>
@endsection
