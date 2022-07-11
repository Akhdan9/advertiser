<?php

namespace App\Models;

use CodeIgniter\Model;

class Media_model extends Model
{
    protected $table = 'media';
    protected $primaryKey = 'id_media';

    protected $useAutoIncrement = false;

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_media', 'id_users', 'media_name', 'media_path', 'media_ext'];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}
