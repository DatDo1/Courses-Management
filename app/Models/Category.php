<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $filable = [
        'id',
        'name'
    ];
    protected $table = 'categories';
    public function course(){
        return $this->hasMany(Course::class);
    }
}
