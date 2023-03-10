<?php

namespace App\Models;

use App\Models\Course;
use App\Models\Account;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $fillable = [
        'content',
        'account_id',
        'course_id',
    ];
    public $timestamps = false;
    public function account(){
        return $this->hasOne(Account::class);
    }
    public function video(){
        return $this->hasOne(Video::class);
    }
}
