<?php

namespace App\Models;

use CodeIgniter\Model;

class KomikModel extends Model
{
  protected $table = 'komik';
  //protected $insertID = 0;
  //protected $DBGroup;
  //protected $returnType = 'array';
  //protected $useSoftDeletes = false;
  //protected $allowedFields = [];
  protected $useTimestamps = true;
  //protected $dateFormat = 'datetime';
  //protected $createdField = 'created_at';
  //protected $updatedField = 'updated_at';
  public function getKomik($slug = false)
  {
    if ($slug == false) {
      return $this->findall();
    }
    
    return $this->where(['slug' => $slug])->first();
  }
}