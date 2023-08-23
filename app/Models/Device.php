<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Device extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'name',
        'verified_at'
    ];
    protected $casts=[
        'verified_at'=>'datetime',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
