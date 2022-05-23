<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    //check
    use HasFactory;
    protected $fillable = [
        'name',

        ];
        public function catagory()
        {
            return$this->hasMany('Catagory::class')
        }
}
