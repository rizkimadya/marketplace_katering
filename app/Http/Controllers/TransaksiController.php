<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexCatering()
    {
        $transaksi = Transaksi::where('catering_id', Auth::user()->id)->latest()->get();

        return view('catering.transaksi.index', compact('transaksi'));
    }

    public function indexInvoice()
    {
        $invoice = Transaksi::where('kantor_id', Auth::user()->id)->latest()->get();

        return view('kantor.invoice', compact('invoice'));
    }

    public function indexPesan($id){
        $makanan = Makanan::findOrFail($id);

        return view('kantor.pesan', compact('makanan'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kantor_id' => 'required',
            'catering_id' => 'required',
            'makanan_id' => 'required',
            'jumlah_porsi' => 'required|integer',
            'tanggal_pengiriman' => 'required|date',
        ]);

        $no_invoice = 'INV-' . uniqid();
        $transaksi = new Transaksi();
        $transaksi->no_invoice = $no_invoice;
        $transaksi->kantor_id = $validatedData['kantor_id'];
        $transaksi->catering_id = $validatedData['catering_id'];
        $transaksi->makanan_id = $validatedData['makanan_id'];
        $transaksi->jumlah_porsi = $validatedData['jumlah_porsi'];
        $transaksi->tanggal_pengiriman = $validatedData['tanggal_pengiriman'];

        $transaksi->save();

        Alert::success('Sukses', 'Berhasil membuat transaksi, dengan no invoice ' . $no_invoice);
        return redirect('/');
    }
}
