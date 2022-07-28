<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales_TR extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','Terminal_id'
    ];
}
