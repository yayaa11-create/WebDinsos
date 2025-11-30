<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BansosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $bansos = [
            ['kodebansos'=>'1','nik'=>'3205012104770003','nama'=>'YUDI SUGIANTO','alamat'=>'Jl. Ciledug Gg. Hidmah Sari I','pkh'=>false,'sembako'=>false,'pbi'=>true,'yapi'=>false],
            ['kodebansos'=>'2','nik'=>'3205010410970003','nama'=>'HENDRA NUGRAHA','alamat'=>'Kp. Sukaasih','pkh'=>true,'sembako'=>false,'pbi'=>true,'yapi'=>true],
            ['kodebansos'=>'3','nik'=>'3205196910712001','nama'=>'RIMA','alamat'=>'Kp. Cisaat','pkh'=>true,'sembako'=>false,'pbi'=>false,'yapi'=>false],
            ['kodebansos'=>'4','nik'=>'3205011412890000','nama'=>'DEDI SAMSUDIN','alamat'=>'Kp. Sumbersari Wetan','pkh'=>true,'sembako'=>false,'pbi'=>true,'yapi'=>false],
        ];
        DB::table('bansos')->insert($bansos);
    }
}
