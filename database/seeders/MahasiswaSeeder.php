<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert(
            [
                'mahasiswa' => 'Ahmad Zidni Rosadi',
                'NIM' => '12312312',
                'notelepon' => '082345530800',
                'jeniskelamin' => 'laki-laki',
                'alamat' => 'ciputat tangerang',
                'foto' => 'profil.jpg',
                'id_jurusan' => '1'

            ]
        );
    }
}
