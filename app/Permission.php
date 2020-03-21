<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = [
        'name', 'code',
    ];

    public function permissions(){
        return $this->hasMany('App\PermissionRole');
    }
}
