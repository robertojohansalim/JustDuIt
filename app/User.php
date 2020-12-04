<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
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

    public function role(){
        return $this->hasOne('App\Role', 'id', 'id_role');
    }

    public function cart(){
        return $this->hasOne('App\Cart', 'user_id');
    }

    public static function addUser($username, $password, $email, $id_role = 2){
        $user = new User();
        $user->username = $username;
        $user->password = $password;
        $user->email = $email;
        $user->id_role = $id_role; 
        return $user->save();
    }
}