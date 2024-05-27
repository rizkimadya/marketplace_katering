@extends('layout_kantor.app', ['title' => 'Login'])

@section('content')
    <section style="width:100%; overflow:hidden;">
        <div class="row">
            <div class="col-md-6 align-self-center">
                <div class="p-md-4 p-3">
                    <div class="card shadow border-0 p-md-4">
                        <h4>Halaman Login</h4>
                        <form action="{{ url('/login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="username" style="color:#000;">Username</label>
                                <input name="username" type="text" id="username"
                                    style="width: 100%; padding:6px 12px; border:1px solid #a8a8a8; border-radius:4px;"
                                    placeholder="Masukkan Username" />
                            </div>
                            <div class="mb-3">
                                <label for="password" style="color:#000;">Password</label>
                                <input name="password" type="password" id="password"
                                    style="width: 100%; padding:6px 12px; border:1px solid #a8a8a8; border-radius:4px;"
                                    placeholder="Masukkan Password" />
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                            </div>
                        </form>
                        <div class="mt-3">
                            <p>Belum Punya Akun? <a class="text-primary" href="{{ url('/regis') }}">Daftar</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('kantor/images/bg_3.jpg') }}" alt="" width="100%">
            </div>
        </div>
    </section>
@endsection
