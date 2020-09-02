<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'contacts';
    protected $primaryKey = 'contact_id';
    protected $allowedFields = [
        'contact_facebook',
        'contact_twitter',
        'contact_youtube',
        'contact_email',
        'contact_alamat',
        'contact_rek_bri',
        'contact_rek_bni',
        'contact_rek_bca',
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

    public function deletecontact($id)
    {
        return $this->db->table($this->table)->delete([$this->primaryKey => $id]);
    }
}
