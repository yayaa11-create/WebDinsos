<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SospedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $sosped = [
            ['kodesosped'=>'1','title'=>'ATENSI','deskripsi'=>'Asistensi Rehabilitasi Sosial disebut ATENSI layanan rehabilitasi sosial yang menggunakan pendekatan berbasis keluarga, komunitas, dan residensial yang meliputi dukungan pemenuhan hidup layak, perawatan sosial dan/atau pengasuhan anak, dukungan keluarga, terapi fisik, terapi psikososial, terapi mental spiritual, pelatihan vokasional, pembinaan kewirausahaan, bantuan dan asistensi sosial, serta dukungan aksesibilitas.'],
            ['kodesosped'=>'2','title'=>'Aplikasi Online Monitoring Sistem Perbendaharaan dan Anggaran Negara (OMSPAN)','deskripsi'=>'Aplikasi yang digunakan dalam rangka memonitor transaksi dalam sistem perbendaharaan dan anggaran negara dan menyajikan informasi sesuai kebutuhan yang diakses melalui jaringan berbasis web.'],
            ['kodesosped'=>'3','title'=>'Anak Terlantar','deskripsi'=>'Anak yang tidak terpenuhi kebutuhannya secara wajar, baik fisik, mental, spiritual, maupun sosial'],
            ['kodesosped'=>'4','title'=>'Anti Sosial','deskripsi'=>'Tindakan melawan, menentang, memusuhi atau melanggar norma hukum, adat dan agama yang berlaku dalam suatu kelompok masyarakat tertentu'],
        ];
        DB::table('sosped')->insert($sosped);
    }
}
