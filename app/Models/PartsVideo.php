<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartsVideo extends Model
{
    use HasFactory;

    protected $table = 'parts_video';
    public function video(){
        return $this->belongsTo(Video::class);
    }
}
