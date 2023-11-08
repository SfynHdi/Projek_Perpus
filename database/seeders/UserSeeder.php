<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
<<<<<<< HEAD
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
=======
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
>>>>>>> a2dc0431e6433636cb0ced48cf6d210b4308e485
     */
    public function run(): void
    {
        DB::table('users')->insert([
<<<<<<< HEAD
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
=======
            'name' =>'Administrator',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('poiuytre'),
            
        ]);
    }
}
>>>>>>> a2dc0431e6433636cb0ced48cf6d210b4308e485
