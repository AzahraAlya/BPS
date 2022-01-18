<?php

namespace App\Models;

use CodeIgniter\Model;

class M_user extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'user';
    protected $primaryKey           = 'id_user';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDeletes       = true;
    protected $protectFields        = true;
    protected $allowedFields        = ['username', 'password', 'firstname','lastname', 'email', 'role', 'created_at', 'updated_at', 'deleted_at'];

    // Dates
    protected $useTimestamps        = true;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];
  
  
  
  
    protected function beforeInsert(array $data){
      $data = $this->passwordHash($data);
      $data['data']['created_at'] = date('Y-m-d H:i:s');
  
      return $data;
    }
  
    protected function beforeUpdate(array $data){
      $data = $this->passwordHash($data);
      $data['data']['updated_at'] = date('Y-m-d H:i:s');
      return $data;
    }
  
    protected function passwordHash(array $data){
      if(isset($data['data']['password']))
        $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
  
      return $data;
    }
  
    

}