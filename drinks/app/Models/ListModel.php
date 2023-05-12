<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ListModel extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $primaryKey = 'oid';
    protected $keyType = 'integer'; // 配合 PK 型態，預設 int
    public $timestamps = false;
}
