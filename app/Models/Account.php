<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Notifications\ResetPasswordRequest;

class Account extends Model
{
    use HasFactory;
   
    protected $table = 'accounts';
    protected $fillable = [
        'username',
        'email',
        'password',
        'first_name',
        'last_name',
        'avatar',
        'role_id'
    ];
    public $timestamps = false;
    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function comment(){
        return $this->hasMany(Comment::class);
    }
    public function notify(ResetPasswordRequest $reset){
        return response()->json([
            'token' => $reset
        ]);
    }
}
