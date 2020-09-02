<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'news_id';
    protected $allowedFields = [
        'news_nama',
        'news_tgl',
        'news_foto',
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

    public function getLimit()
    {
        return $this->db->table($this->table)->get(4)->getResult();
    }
    public function updateNews($id, $data)
    {
        return $this->db->table($this->table)->update($data, array($this->primaryKey => $id));
    }

    public function hapus($id)
    {
        return $this->db->table($this->table)->delete([$this->primaryKey => $id]);
    }
}
