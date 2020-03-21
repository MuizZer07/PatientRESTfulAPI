<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermissionRole extends Model
{
    protected $fillable = [
        'user_id', 'permission_id'
    ];
}
