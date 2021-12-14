<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sequence extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = true;
    protected $primaryKey = ['name'];
    public $incrementing = false;
    protected $keyType = 'string';
}
