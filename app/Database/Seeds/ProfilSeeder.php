<?php

namespace App\Database\Seeds;

class ProfilSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            'profil_tentang' => 'Seeder',
            'profil_candra'  => 'Seeder',
            'profil_evan'    => 'Seeder',
            'profil_no1'     => 'Seeder',
            'profil_no2'     => 'Seeder',
        ];
        $this->db->table('profils')->insert($data);
    }
}
