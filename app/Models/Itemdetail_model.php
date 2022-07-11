<?php

namespace App\Models;

use CodeIgniter\Model;

class Itemdetail_model extends Model
{
    protected $table = 'item_detail';
    protected $primaryKey = 'id_item_detail';

    protected $useAutoIncrement = false;

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_item_detail', 'id_display_screen', 'playback_per_day', 'average_spending', 'about_item', 'id_operation_hours', 'item_address', 'id_forbidden_advertisement'];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}
