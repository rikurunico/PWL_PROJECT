<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'product' => 'Minyak Goreng ',
                'jenis' => 'Bahan Dapur',
                'harga' => 28000,
                'gambar' =>'img/featured/minyak.png'
            ],
            [
                'product' => 'Gula Pasir',
                'jenis' => 'Bahan Dapur',
                'harga' => 12000,
                'gambar' =>'img/featured/gula.png'
            ],
            [
                'product' => 'Telur',
                'jenis' => 'Bahan Dapur',
                'harga' => 24000,
                'gambar' =>'img/featured//telur.png'
            ],
            [
                'product' => 'Tepung Terigu',
                'jenis' => 'Bahan Dapur',
                'harga' => 10000,
                'gambar' =>'img/featured/tepung.png'
            ],
            [
                'product' => 'Shampoo Clear',
                'jenis' => 'Perlengkan Mandi',
                'harga' => 25000,
                'gambar' =>'img/featured/clear.png'
            ],
            [
                'product' => 'Sabun Lifebuoy',
                'jenis' => 'Perlengkan Mandi',
                'harga' => 3000,
                'gambar' =>'img/featured/sabun.png'
            ],
            [
                'product' => 'Pepsodent',
                'jenis' => 'Perlengkan Mandi',
                'harga' => 13000,
                'gambar' =>'img/featured/peps.png'
            ],
            [
                'product' => 'Mie Goreng',
                'jenis' => 'Makanan Instan',
                'harga' => 2500,
                'gambar' =>'img/featured/mie.png'
            ]
        ]);
    }
}
