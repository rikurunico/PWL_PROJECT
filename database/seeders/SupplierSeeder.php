<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            [
                'nama' => 'Ade Irawan ',
                'alamat' => 'Jl. Raya Cikarang',
                'telp' => '0812341234',
            ],
           
            [
                'nama' => 'Tuti Hastatik ',
                'alamat' => 'Jl. Kamboja',
                'telp' => '0878787878',
            ],
        ]);
    }
}
