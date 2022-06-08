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
                'stok' => '50',
                'harga' => 28000,
                'gambar' =>'img/featured/minyak.png',
                'supplier_id' => '1'
            ],
            [
                'product' => 'Gula Pasir',
                'kategori' => 'Bahan Dapur',
                'merk' => 'Gulaku',
                'stok' => '100',
                'harga' => 12000,
                'gambar' =>'img/featured/gula.png',
                'supplier_id' => '1'
            ],
            [
                'product' => 'Telur',
                'kategori' => 'Bahan Dapur',
                'merk' => 'Golden Imune',
                'stok' => '30',
                'harga' => 24000,
                'gambar' =>'img/featured//telur.png',
                'supplier_id' => '2'
            ],
            [
                'product' => 'Tepung Terigu',
                'kategori' => 'Bahan Dapur',
                'merk' => 'Segitiga Biru',
                'stok' => '60',
                'harga' => 10000,
                'gambar' =>'img/featured/tepung.png',
                'supplier_id' => '1'
                
            ],
            [
                'product' => 'Shampoo',
                'kategori' => 'Perlengkan Mandi',
                'merk' => 'clear',
                'stok' => '100',
                'harga' => 25000,
                'gambar' =>'img/featured/clear.png',
                'supplier_id' => '1'
            ],
            [
                'product' => 'Sabun Batang',
                'kategori' => 'Perlengkan Mandi',
                'merk' => 'Lifebuoy',
                'stok' => '80',
                'harga' => 3000,
                'gambar' =>'img/featured/sabun.png',
                'supplier_id' => '1'
            ],
            [
                'product' => 'Pasta gigi',
                'kategori' => 'Perlengkan Mandi',
                'merk' => 'Pepsodent',
                'stok' => '20',
                'harga' => 13000,
                'gambar' =>'img/featured/peps.png',
                'supplier_id' => '1'
            ],
            [
                'product' => 'Mie Goreng',
                'kategori' => 'Makanan Instan',
                'merk' => 'Indomie',
                'stok' => '120',
                'harga' => 2500,
                'gambar' =>'img/featured/mie.png',
                'supplier_id' => '1'
            ]
        ]);
    }
}
