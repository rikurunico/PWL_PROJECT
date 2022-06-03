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
                'kategori' => 'Bahan Dapur',
                'merk' => 'Bimoli',
                'harga' => 28000,
                'gambar' =>'img/featured/minyak.png'
            ],
            [
                'product' => 'Gula Pasir',
                'kategori' => 'Bahan Dapur',
                'merk' => 'Gulaku',
                'harga' => 12000,
                'gambar' =>'img/featured/gula.png'
            ],
            [
                'product' => 'Telur',
                'kategori' => 'Bahan Dapur',
                'merk' => 'Golden Imune',
                'harga' => 24000,
                'gambar' =>'img/featured//telur.png'
            ],
            [
                'product' => 'Tepung Terigu',
                'kategori' => 'Bahan Dapur',
                'merk' => 'Segitiga Biru',
                'harga' => 10000,
                'gambar' =>'img/featured/tepung.png'
            ],
            [
                'product' => 'Shampoo',
                'kategori' => 'Perlengkan Mandi',
                'merk' => 'clear',
                'harga' => 25000,
                'gambar' =>'img/featured/clear.png'
            ],
            [
                'product' => 'Sabun Batang',
                'kategori' => 'Perlengkan Mandi',
                'merk' => 'Lifebuoy',
                'harga' => 3000,
                'gambar' =>'img/featured/sabun.png'
            ],
            [
                'product' => 'Pasta gigi',
                'kategori' => 'Perlengkan Mandi',
                'merk' => 'Pepsodent',
                'harga' => 13000,
                'gambar' =>'img/featured/peps.png'
            ],
            [
                'product' => 'Mie Goreng',
                'kategori' => 'Makanan Instan',
                'merk' => 'Indomie',
                'harga' => 2500,
                'gambar' =>'img/featured/mie.png'
            ]
        ]);
    }
}
