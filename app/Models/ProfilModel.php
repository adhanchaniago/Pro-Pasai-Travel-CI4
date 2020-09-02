<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfilModel extends Model
{
    protected $table = 'profils';
    protected $primaryKey = 'profil_id';
    protected $allowedFields = [
        'profil_tentang',
        'profil_candra',
        'profil_evan',
        'profil_no1',
        'profil_no2',
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

    public function remove($id)
    {
        return $this->db->table($this->table)->delete([$this->primaryKey => $id]);
    }
}
