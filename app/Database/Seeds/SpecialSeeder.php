<?php

namespace App\Database\Seeds;

class SpecialSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            'special_kategori' => 'Seeder',
            'special_kode' => 'Seeder',
            'special_nama_paket' => 'Seeder',
            'special_include' => 'Seeder',
            'special_exclude' => 'Seeder',
            'special_trip_array' => 'Seeder',
            'special_harga' => 'Seeder',
            'special_desc' => 'Seeder',
            'special_foto' => 'Seeder'
        ];
        $this->db->table('specials')->insert($data);
    }
}
