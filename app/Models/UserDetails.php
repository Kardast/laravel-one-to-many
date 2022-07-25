<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'user_id', 'address', 'phone', 'birth'
    ];
    protected $table = 'users_details';
}
