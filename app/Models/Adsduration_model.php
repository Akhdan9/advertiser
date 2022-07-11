<?php

namespace App\Models;

use CodeIgniter\Model;

class Adsduration_model extends Model
{
    protected $table = 'ads_duration';
    protected $primaryKey = 'id_ads_duration';

    protected $useAutoIncrement = false;

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_ads_duration', 'ads_duration_name', 'multiple'];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}
