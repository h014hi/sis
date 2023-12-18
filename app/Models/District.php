<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'ubigeo_peru_districts';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
