<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UsersVerify extends Model
{
    use HasFactory;
    public $table ="users_verify";

    protected $fillable=[
        'user_id',
        'token'
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
