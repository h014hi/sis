<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'ubigeo_peru_departments';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
