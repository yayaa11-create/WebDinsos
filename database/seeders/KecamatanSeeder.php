<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $sosped = [
            ['kodekecamatan'=>'1','kecamatan'=>'Cikelet','kelurahan'=>'-','desa'=>'11','kodepos'=>'44177'],
            ['kodekecamatan'=>'2','kecamatan'=>'Bungbulang','kelurahan'=>'-','desa'=>'13','kodepos'=>'44165'],
            ['kodekecamatan'=>'3','kecamatan'=>'Mekarmukti','kelurahan'=>'-','desa'=>'5','kodepos'=>'44199'],
            ['kodekecamatan'=>'4','kecamatan'=>'Pakenjeng','kelurahan'=>'-','desa'=>'13','kodepos'=>'44164'],
        ];
        DB::table('kecamatan')->insert($kecamatan);
    }
}
