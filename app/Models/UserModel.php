<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'name',
        'email',
        'phone',
        'password',
        'role',
        'status',
        'deleted_at',
        'created_at'
    ];

    protected $useTimestamps = false;
}