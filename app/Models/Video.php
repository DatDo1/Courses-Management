<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'videos';
    protected $fillable = [
        'title',
        'description',
        'link',
        'duration',
        'date_posted',
        'part_id',
    ];
    public function partsvideo(){
        return $this->belongsTo(PartsVideo::class, 'part_id');
    }
    public function comment(){
        return $this->hasMany(Comment::class);
    }
}
