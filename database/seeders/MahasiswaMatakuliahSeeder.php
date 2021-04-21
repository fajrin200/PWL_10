<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaMatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [   'mahasiswa_id' => 1,
                'matakuliah_id' => 1,
                'nilai' => 90,
            ],
            [   'mahasiswa_id' => 2,
                'matakuliah_id' => 2,
                'nilai' => 100,
            ],
        ];

        DB::table('mahasiswa_matakuliah')->insert($data);
    }
}
