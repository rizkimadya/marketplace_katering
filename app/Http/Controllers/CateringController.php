<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CateringController extends Controller
{

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originalName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originalName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();

            $fileName = $fileName . '_' . time() . '.' . $extension;

            // Simpan file ke direktori storage/app/public/fileCkeditor
            $request->file('upload')->storeAs('public/fileCkeditor', $fileName);

            $url = asset('storage/fileCkeditor/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }
    
    public function dashboard(){
        return view('catering.dashboard.index');
    }
}
