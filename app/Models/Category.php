<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name'
    ];
    protected $table = 'categories';
    public $incrementing = false;
    public $timestamps = false;

    public function course(){
        return $this->hasMany(Course::class);
    }
}
