<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';
    protected $fillable = [
       'name',
       'price',
       'price_sale',
       'description',
       'image',
       'category_id'
    ];
    public $timestamps = false;
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
