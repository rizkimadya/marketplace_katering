@extends('layout_kantor.app', ['title' => 'Marketplace Catering'])

@section('content')
    <section style="width:100%; overflow:hidden;">
        <div class="row">
            <div class="col-md-6 align-self-end">
                <div class="p-md-4 p-3">
                    <div class="card shadow border-0 p-md-4">
                        <div style="height: 120px; overflow:auto;">
                            <h6 class="mb-0 me-0 text-dark">{{ $makanan->nama_menu }}</h6>
                            <h4 class="mb-3 me-0 text-primary">Rp. {{ number_format($makanan->harga, 0, ',', '.') }}</h4>
                            <span class="mb-0 me-0 p-0">{!! $makanan->deskripsi !!}</span>
                        </div>
                        <form action="{{ url('/pesan') }}" method="POST">
                            @csrf
                            <input type="hidden" name="kantor_id" value="{{ auth()->user()->id }}">
                            <input type="hidden" name="catering_id" value="{{ $makanan->catering_id }}">
                            <input type="hidden" name="makanan_id" value="{{ $makanan->id }}">
                            <div class="mb-2">
                                <label for="tanggal_pengiriman" class="form-label">Tanggal Pengiriman</label>
                                <input type="date" name="tanggal_pengiriman" required class="form-control" id="tanggal_pengiriman">
                            </div>
                            <div class="form-group mb-2">
                                <label for="jumlah_porsi" class="form-label">Jumlah Porsi</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="jumlah_porsi" name="jumlah_porsi" value="1">
                                    <button type="button" class="btn btn-secondary" onclick="decrement()">-</button>
                                    <button type="button" class="btn btn-primary" onclick="increment()">+</button>
                                </div>
                            </div>
                            <button class="btn btn-success w-100" type="submit">Order</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="/storage/fileMakanan/{{ $makanan->gambar }}" style="  filter: brightness(0.8); " alt=""
                    width="100%">
            </div>
        </div>
    </section>

    <script>
        function increment() {
            var input = document.getElementById('jumlah_porsi');
            var value = parseInt(input.value, 10);
            input.value = isNaN(value) ? 1 : value + 1;
        }

        function decrement() {
            var input = document.getElementById('jumlah_porsi');
            var value = parseInt(input.value, 10);
            input.value = isNaN(value) ? 1 : (value > 1 ? value - 1 : 1);
        }
    </script>
@endsection
