<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class crudModel extends Model
{
    use HasFactory;
    protected $table = 'user_info';
    protected $primarykey = 'id';
    protected $fillable = [
        'uName',
        'uEmail',
        'uPhone'
    ];
}
