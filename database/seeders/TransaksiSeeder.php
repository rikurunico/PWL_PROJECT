<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaksi')->insert([
            [
                'qty' => '2',
                'Tanggal_beli' => \Carbon\Carbon::createFromDate(2000,01,01)->toDateTimeString(),
                'user_id' => '1 ',
                'product_id' => '1',
            ],
        ]);
    }
}
