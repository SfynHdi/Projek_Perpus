<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Dhita Humdana',
            'username' => 'Dhita',
            'password' => Hash::make('1234567890'),
            'nama_lengkap' => 'Dhita Humdana',
            'alamat' => 'Pringsewu',
            'nomor_telpon' => '088276257481',
            'email' => 'dhitahumdana@gmail.com',
        ]);

    }

}