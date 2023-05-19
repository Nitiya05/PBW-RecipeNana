<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class ManageUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return view('admin.manageUser', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create-user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        // validasi input
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'role' => 'required',

        ]);

        $password = $request->input('password');
        $hashedPassword = bcrypt($password);


        // menyimpan user user ke userbase
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $hashedPassword,
            'role' => $request->role,
        ]);

        return redirect('manage-user')->with('success', 'User berhasil ditambahkan!');
    }

    public function tampilkanDataUser($id)
    {

        $user = User::findOrFail($id); // Ganti "User" dengan nama model yang sesuai
        return view('users.edit', compact('user'));
    }

    //untuk update user user
    public function updateDataUser(Request $request, $id)
    {

        // mengambil user user dari userbase
        $user = User::find($id);

        // Update user
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // ...

        $user->save();

        return redirect()->route('manage-user', $user->id);
        // Ganti "show" dengan route tampilan detail user yang sesuai
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id); // Ganti "User" dengan nama model yang sesuai
        return view('admin.editTampilanDataUser', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id); // Ganti "Model" dengan nama model yang sesuai

        // Update user
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // ...

        $user->save();
        // update user user ke userbase
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            // 'role' => $request->role,
        ]);

        return redirect()->route('manage-user')->with('success', 'user Berhasil di Edit');
    }

    public function delete($id)
    {
        $data = User::find($id); // Ganti "Model" dengan nama model yang sesuai

        if ($data) {
            $data->delete();

            // Tindakan lain yang sesuai setelah menghapus data

            return redirect()->route('manage-user')->with('success', 'Data berhasil dihapus.');
        } else {
            // Tindakan yang sesuai jika data tidak ditemukan
            return redirect()->route('manage-user')->with('error', 'Data tidak ditemukan.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
