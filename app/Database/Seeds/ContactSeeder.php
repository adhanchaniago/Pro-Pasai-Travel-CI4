<?php

namespace App\Database\Seeds;

class ContactSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            'contact_facebook' => 'Seeder',
            'contact_twitter'  => 'Seeder',
            'contact_youtube'  => 'Seeder',
            'contact_email'    => 'Seeder',
            'contact_alamat'   => 'Seeder',
            'contact_rek_bri'  => 'Seeder',
            'contact_rek_bni'  => 'Seeder',
            'contact_rek_bca'  => 'Seeder',
        ];
        $this->db->table('contacts')->insert($data);
    }
}
