<?php

namespace App\Models;

use CodeIgniter\Model;

class SpecialModel extends Model
{
    protected $table = 'specials';
    protected $primaryKey = 'special_id';
    protected $allowedFields = [
        'special_kategori'   => 'Seeder',
        'special_kode'       => 'Seeder',
        'special_nama_paket' => 'Seeder',
        'special_include'    => 'Seeder',
        'special_exclude'    => 'Seeder',
        'special_trip_array' => 'Seeder',
        'special_harga'      => 'Seeder',
        'special_desc'       => 'Seeder',
        'special_foto'       => 'Seeder'
    ];

    public function add($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function get($id = false)
    {
        if ($id === false) {
            return $this->db->table($this->table)->get()->getResult();
        } else {
            return $this->db->table($this->table)->getWhere([$this->primaryKey => $id])->getRow();
        }
    }

    public function edit($id, $data)
    {
        return $this->db->table($this->table)->update($data, array($this->primaryKey => $id));
    }

    public function hapus($id)
    {
        return $this->db->table($this->table)->delete([$this->primaryKey => $id]);
    }
}
