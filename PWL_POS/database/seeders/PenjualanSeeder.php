<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id'=>1,
                'user_id'=>3,
                'pembeli'=>'Nela',
                'penjualan_kode'=>'aaa',
                'penjualan_tanggal'=>'2024-09-11',
            ],
            [
                'penjualan_id'=>2,
                'user_id'=>3,
                'pembeli'=>'Nara',
                'penjualan_kode'=>'aab',
                'penjualan_tanggal'=>'2024-09-11',
            ],
            [
                'penjualan_id'=>3,
                'user_id'=>3,
                'pembeli'=>'Lala',
                'penjualan_kode'=>'aba',
                'penjualan_tanggal'=>'2024-09-11',
            ],
            [
                'penjualan_id'=>4,
                'user_id'=>3,
                'pembeli'=>'Chia',
                'penjualan_kode'=>'abc',
                'penjualan_tanggal'=>'2024-09-11',
            ],
            [
                'penjualan_id'=>5,
                'user_id'=>3,
                'pembeli'=>'Nela',
                'penjualan_kode'=>'acb',
                'penjualan_tanggal'=>'2024-09-11',
            ],
            [
                'penjualan_id'=>6,
                'user_id'=>3,
                'pembeli'=>'Nela',
                'penjualan_kode'=>'acc',
                'penjualan_tanggal'=>'2024-09-11',
            ],
            [
                'penjualan_id'=>7,
                'user_id'=>3,
                'pembeli'=>'Nara',
                'penjualan_kode'=>'ana',
                'penjualan_tanggal'=>'2024-09-11',
            ],
            [
                'penjualan_id'=>8,
                'user_id'=>3,
                'pembeli'=>'Neva',
                'penjualan_kode'=>'ama',
                'penjualan_tanggal'=>'2024-09-11',
            ],
            [
                'penjualan_id'=>9,
                'user_id'=>3,
                'pembeli'=>'Nela',
                'penjualan_kode'=>'omo',
                'penjualan_tanggal'=>'2024-09-11',
            ],
            [
                'penjualan_id'=>10,
                'user_id'=>3,
                'pembeli'=>'Nela',
                'penjualan_kode'=>'umu',
                'penjualan_tanggal'=>'2024-09-11',
            ]
        ];
        DB::table('t_penjualan')->insert($data);
    }
}