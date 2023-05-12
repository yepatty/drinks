<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'pid';
    protected $keyType = 'string'; // 配合 PK 型態，預設 int
    public $timestamps = false;
}
