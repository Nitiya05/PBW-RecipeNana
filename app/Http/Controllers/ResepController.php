<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use App\Http\Requests\StoreResepRequest;
use App\Http\Requests\UpdateResepRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ResepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {    
        $reseps = Resep::all();
            return view('admin.kelolaResep', compact(['reseps']));
        
    }
    
    public function index2(string $id)
    {    
        $reseps = Resep::findOrFail($id); // Ganti "User" dengan nama model yang sesuai
        return view('resep', compact('reseps'));
        
    }

    public function index1()
    {

        $reseps = Resep::all();
        return view('resep', compact(['reseps']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create-resep');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $this->validate($request,[
            'nama_makanan' => 'required',
            'resep' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        if ($request->hasFile('gambar')) { // tambahkan kondisi untuk memeriksa apakah input gambar diisi atau tidak
            $gambar = $request->file('gambar');
            // membuat folder baru jika belum ada
            $path = storage_path('/public/posts');
            if (!Storage::exists($path)) {
                Storage::makeDirectory($path, 0777, true, true);
            }

            // menyimpan file gambar ke direktori 
            $filename = $gambar->getClientOriginalName();
            $gambar->storeAs('/public/posts', $filename);
        } else {
            $filename = null; // jika input gambar tidak diisi, set nilai filename menjadi null
        }

        // menyimpan data user ke database
        Resep::create([
            'nama_makanan' => $request->nama_makanan,
            'resep' => $request->resep,
            'gambar' => $filename,
        ]);

        return redirect('kelola-resep')->with('success', 'berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(StoreResepRequest $request)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    function edit(Resep $id)
    {
        $resep = Resep::findOrFail($id); // Ganti "User" dengan nama model yang sesuai
        return view('admin.editTampilanResep', compact('resep'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = Resep::find($id); // Ganti "Model" dengan nama model yang sesuai

        // Update user
        $user->name = $request->input('nama_makanan');
        $user->email = $request->input('resep');
        // ...

        $user->save();
        // update user user ke userbase
        $user->update([
            'nama_makanan' => $request->nama_makanan,
            'resep' => $request->resep,
           
        ]);

        return redirect()->route('kelola-resep')->with('success', 'Resep Berhasil di Edit');
    }

    public function delete($id)
    {
        $data = Resep::find($id); // Ganti "Model" dengan nama model yang sesuai

        if ($data) {
            $data->delete();

            // Tindakan lain yang sesuai setelah menghapus data

            return redirect()->route('kelola-resep')->with('success', 'Data berhasil dihapus.');
        } else {
            // Tindakan yang sesuai jika data tidak ditemukan
            return redirect()->route('kelola-resep')->with('error', 'Data tidak ditemukan.');
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resep $resep)
    {
        //
    }
}
