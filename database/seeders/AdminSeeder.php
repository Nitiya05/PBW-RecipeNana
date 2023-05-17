<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kode untuk mengisi data
        User::create([
            'name'=>'Mimin',
            'email'=> 'mimin@gmail.com',
            'role'=>'admin',
            'password' => bcrypt('12345678')
        ]);
    }
}
