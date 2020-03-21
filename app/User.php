<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function refreshToken()
    {
        $this->api_token = Str::random(60);
        $this->save();

        return $this->api_token;
    }

//    public function role(){
//        return $this->hasOne('App\Role');
//    }

    public function permission_roles(){
        return $this->hasMany('App\PermissionRole');
    }

    public function permissions(){
        $array = collect();
        $permission_roles = $this->permission_roles;
        foreach ($permission_roles as $permission_role){
            $permission = Permission::where('id', $permission_role->permission_id)->get()->first();
            $array->push($permission->code);
        }
        return $array;
    }
}
