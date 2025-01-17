<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $fillable = [
        'image', 'fullname', 'username', 'nip', 'email', 'password', 'phone', 'address', 'department', 'role'
    ];
}
