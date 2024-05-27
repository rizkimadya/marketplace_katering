<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class ProfilController extends Controller
{
    public function index()
    {
        return view('catering.profil.index');
    }

    public function update(Request $request)
    {
        // Dapatkan ID pengguna yang terautentikasi
        $userId = Auth::user()->id;

        // Validasi data input
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'no_wa' => 'nullable|string|max:15',
            'username' => 'required|string|max:255|unique:users,username,' . $userId,
            'alamat' => 'nullable|string|max:255',
            'kontak' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string|max:500',
            'password' => 'nullable',
        ]);

        // Temukan pengguna berdasarkan ID
        $user = User::findOrFail($userId);

        // Perbarui data pengguna
        $user->nama_lengkap = $validatedData['nama_lengkap'];
        $user->no_wa = $validatedData['no_wa'];
        $user->username = $validatedData['username'];
        $user->alamat = $validatedData['alamat'];
        $user->kontak = $validatedData['kontak'];
        $user->deskripsi = $validatedData['deskripsi'];

        // Jika kata sandi disediakan, hash dan perbarui
        if (!empty($validatedData['password'])) {
            $user->password = Hash::make($validatedData['password']);
        }

        // Simpan perubahan
        $user->save();

        // Redirect atau respon dengan pesan sukses
        Alert::success('Success', 'Berhasil Memperbarui Profil');
        return redirect('/profil');
    }
}
