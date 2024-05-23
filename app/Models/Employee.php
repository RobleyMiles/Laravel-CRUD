<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = '_employee_table';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'FirstName',
        'LastName',
        'DateofBirth',
        'Phone',

    ];

    use HasFactory;
}
