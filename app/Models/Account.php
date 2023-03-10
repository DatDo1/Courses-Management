<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Account extends Model
{
    use HasFactory;
   
    protected $table = 'accounts';
    protected $fillable = [
        'username',
        'email',
        'password',
        'role_id'
    ];
    public $timestamps = false;
    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function comment(){
        return $this->hasMany(Comment::class);
    }
}
