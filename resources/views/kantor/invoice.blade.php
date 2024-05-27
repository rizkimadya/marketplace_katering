@extends('layout_kantor.app', ['title' => 'Marketplace Catering'])

@section('content')
    <section style="width:100%; overflow:hidden;">
        <div class="container">
            <div class="row" style="padding: 130px 0px">
                <div class="col-12">
                    <DIV class="card-header border-0">DATA INVOICE</DIV>
                    <div class="card table-responsive p-md-4 p-2">
                            <table class="table table-striped" id="myTable">
                                <thead>
                                    <tr>
                                        <th>No Invoice</th>
                                        <th>Nama Catering</th>
                                        <th>No Wa</th>
                                        <th>Jumlah Porsi</th>
                                        <th>Tanggal Pengiriman</th>
                                        <th>Total Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($invoice as $item)
                                        <tr>
                                            <td>{{ $item->no_invoice }}</td>
                                            <td>{{ $item->catering->nama_lengkap }}</td>
                                            <td>{{ $item->catering->no_wa }}</td>
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
        </div>
    </section>

@endsection
