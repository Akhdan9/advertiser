<?php

namespace App\Models;

use CodeIgniter\Model;

class Display_model extends Model
{
    protected $table = 'display_screen';
    protected $primaryKey = 'id_display_screen';

    protected $useAutoIncrement = false;

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_display_screen', 'display_screen_name'];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}
