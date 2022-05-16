<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class property extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'pr_name',
        'pr_model',
        'pr_price',
        'pr_quantity'
        ];
}
