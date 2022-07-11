<?php

namespace App\Models;

use CodeIgniter\Model;

class City_model extends Model
{
    protected $table = 'city';
    protected $primaryKey = 'id_city';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}
