<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin'),
                'level' => 'admin',
                'foto' => 'admin.jpg',
                'notelp' => '081234567890',
                'alamat' => 'Jl. Raya Sukabumi',
                'created_at' => now(),
            ]
        ]);
    }
}
