<?php

namespace App\Models;

use CodeIgniter\Model;

class Category_model extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'id_category';

    protected $useAutoIncrement = false;

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_category', 'category_name'];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}
