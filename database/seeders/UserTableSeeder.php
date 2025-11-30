<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users = [
            ['name'=>'admin','email'=>'admin@gmail.com','password'=>Hash::make('251251'),'role' => 'admin'],
            ['name'=>'user','email'=>'user@gmail.com','password'=>Hash::make('162120'),'role' => 'user'],
        ];
        DB::table('users')->insert($users);
    }
}
