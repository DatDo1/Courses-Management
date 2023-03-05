<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
