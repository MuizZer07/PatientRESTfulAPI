<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public function permissions(){
        return $this->hasMany('App\PermissionRole');
    }
}
