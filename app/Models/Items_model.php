<?php

namespace App\Models;

use CodeIgniter\Model;

class Items_model extends Model
{
    protected $table = 'items';
    protected $primaryKey = 'id_items';

    protected $useAutoIncrement = false;

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_items', 'item_name', 'id_placement', 'daily_visitor', 'price_per_day', 'id_city', 'id_category', 'id_photos'];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}
