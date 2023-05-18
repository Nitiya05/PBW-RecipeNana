<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use App\Http\Requests\StoreResepRequest;
use App\Http\Requests\UpdateResepRequest;
use Illuminate\Support\Facades\Storage;

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
    public function store(StoreResepRequest $request)
    {
            // validasi input
            // $request->validate([
            //     'nama_makanan' => 'required',
            //     'resep' => 'required|',
            //     'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
               
            // ]);
    
    
            // if ($request->hasFile('gambar')) { // tambahkan kondisi untuk memeriksa apakah input gambar diisi atau tidak
            //     $gambar = $request->file('gambar');
    
            //     // membuat folder baru jika belum ada
            //     $path = storage_path('app/public/assets/gambar');
            //     if (!Storage::exists($path)) {
            //         Storage::makeDirectory($path, 0777, true, true);
            //     }
    
            //     // menyimpan file gambar ke direktori "public/assets/gambar"
            //     $filename = $gambar->getClientOriginalName();
            //     $gambar->storeAs('public/assets/gambar', $filename);
            // } else {
            //     $filename = null; // jika input gambar tidak diisi, set nilai filename menjadi null
            // }
    
            // menyimpan data user ke database
            Resep::create([
                'nama_makanan' => $request->nama_makanan,
                'resep' => $request->resep,
                'gambar' => $request->gambar,
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
     function edit(Resep $resep)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateResepRequest $request, Resep $resep)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resep $resep)
    {
        //
    }
}
