@extends('layout_catering.app', ['title' => 'Transaksi'])

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card table-responsive p-md-4 p-2">
                <table class="table table-striped" id="myTable">
                    <thead>
                        <tr>
                            <th>No Invoice</th>
                            <th>Nama Pembeli</th>
                            <th>No Wa</th>
                            <th>Jumlah Porsi</th>
                            <th>Tanggal Pengiriman</th>
                            <th>Total Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transaksi as $item)
                            <tr>
                                <td>{{ $item->no_invoice }}</td>
                                <td>{{ $item->kantor->nama_lengkap }}</td>
                                <td>{{ $item->kantor->no_wa }}</td>
                                <td>{{ $item->jumlah_porsi }}</td>
                                <td>{{ $item->tanggal_pengiriman }}</td>
                                <td>Rp {{ number_format($item->jumlah_porsi * $item->makanan->harga, 0, ',', '.') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
