<?php

namespace App\Models;

use CodeIgniter\Model;

class BoutiqueModel extends Model
{
    protected $table            = 'boutiques';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';

    protected $protectFields = true;
    protected $allowedFields = [
        'name',
        'city',
        'address',
        'ready_note',
        'created_at'
    ];

    // Karena hanya ada created_at saja
    protected $useTimestamps = false;

    protected $validationRules = [
        'name'    => 'required|min_length[3]',
        'city'    => 'required|min_length[2]',
        'address' => 'required'
    ];
}