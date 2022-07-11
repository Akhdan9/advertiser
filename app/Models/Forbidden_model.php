<?php

namespace App\Models;

use CodeIgniter\Model;

class Forbidden_model extends Model
{
    protected $table = 'forbidden_advertisement';
    protected $primaryKey = 'id_forbidden_advertisement';

    protected $useAutoIncrement = false;

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_forbidden_advertisement', 'forbidden_advertisement_name'];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}
