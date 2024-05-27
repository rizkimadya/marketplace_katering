@extends('layout_catering.app', ['title' => 'Transaksi'])

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card table-responsive p-md-4 p-2">
                <table class="table table-striped" id="myTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pembeli</th>
                            <th>No Wa</th>
                            <th>Hari</th>
                            <th>Tanggal Masuk</th>
                            <th>Jam Masuk</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($dataAbsensiPegawai as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->user->nama_lengkap }}</td>
                                <td>{{ $item->user->no_wa }}</td>
                                <td>{{ $item->jadwal->hari }}</td>
                                <td>{{ $item->jadwal->tanggal }}</td>
                                <td>{{ $item->jadwal->jam }}</td>
                                @if ($item->keterangan === 'Hadir')
                                    <td style="font-weight: 700;" class="text-primary">{{ $item->keterangan }}</td>
                                @else
                                    <td style="font-weight: 700;" class="text-danger">{{ $item->keterangan }}</td>
                                @endif
                            </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
