<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartsVideo extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'course_id',
    ];
    protected $table = 'parts_video';
    public $incrementing = false;
    public $timestamps = false;
    public function video(){
        return $this->hasMany(Video::class);
    }
    public function course(){
        return $this->belongsTo(Course::class);
    }
}
