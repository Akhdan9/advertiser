<?php

namespace App\Models;

use CodeIgniter\Model;

class Country_model extends Model
{
    protected $table = 'country';
    protected $primaryKey = 'id_country';

    protected $useAutoIncrement = false;

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_country', 'country_name'];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}
