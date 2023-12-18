<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'ubigeo_peru_provinces';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
