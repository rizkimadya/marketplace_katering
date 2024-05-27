<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $makanan = Makanan::where('catering_id', Auth::user()->id)->latest()->get();
        return view('catering.makanan.index', compact('makanan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_menu' => 'required',
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:5000',
            'harga' => 'required',
            'deskripsi' => 'required',
        ]);

        if ($request->has('gambar')) {
            $file = $request->file('gambar');
            $nama_file = time() . "_" . $file->getClientOriginalName();

            // Simpan file ke direktori storage
            $file->storeAs('public/fileMakanan', $nama_file);

            $makanan = new Makanan([
                'catering_id' => Auth::user()->id,
                'nama_menu' => $request->nama_menu,
                'gambar' => $nama_file,
                'harga' => $request->harga,
                'deskripsi' => $request->deskripsi,
            ]);
        }

        $makanan->save();
        Alert::success('Success', 'Berhasil menambah makanan');
        return redirect('/menu-makanan');
    }


    public function edit($id)
    {
        $makanan = Makanan::where('id', $id)->firstOrFail();
        return view('catering.makanan.edit', compact('makanan'));
    }


    public function update(Request $request, $id)
    {
        $userId = Auth::user()->id;
        $makanan = Makanan::where('id', $id)->first();
        $data = $request->all();

        if($userId === $makanan->catering_id){
            if ($request->has('gambar')) {
                // Hapus gambar lama
                if (Storage::exists('public/fileMakanan/' . $makanan->gambar)) {
                    Storage::delete('public/fileMakanan/' . $makanan->gambar);
                }

                $file = $request->file('gambar');
                $nama_file = time() . "_" . $file->getClientOriginalName();
                $tujuan_upload = 'public/fileMakanan/';

                // Simpan file ke direktori storage
                $file->storeAs($tujuan_upload, $nama_file);

                $data['gambar'] = $nama_file;
            } else {
                unset($data['gambar']);
            }

            $makanan->update($data);
            Alert::success('Success', 'Berhasil mengupdate makanan');
            return redirect('/menu-makanan');
        }else{
            Alert::warning('Warning', 'Gagal mengupdate makanan, Menu Bukan Punya anda');
            return redirect('menu-makanan/'. $id);
        }
    }


    public function destroy($id)
    {
        $makanan = Makanan::find($id);

        // Hapus gambar
        if (Storage::exists('public/fileMakanan/' . $makanan->gambar)) {
            Storage::delete('public/fileMakanan/' . $makanan->gambar);
        }

        $makanan->delete();
        Alert::success('Success', 'Berhasil menghapus makanan');
        return redirect('/menu-makanan');
    }
}
