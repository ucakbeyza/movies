<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class filmmodel extends Model
{
    use HasFactory;
    protected $table = "film";
    public $timestamps = false;
}
