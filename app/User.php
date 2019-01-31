<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Gallery;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Authenticatable
{
    use Notifiable;
    use AuthenticableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','admin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function gallery()
    {
        return $this->hasOne(Gallery::class);
    }

    public function profils()
    {
        return $this->hasOne(Profil::class);
    }

    public function is_admin()

    {
        if($this->admin)

        {
            return true;
        }

        return false;
    }
    public function redirectUrlAfterLogin()
    {
        return $this->admin ? route('dashboard') : route('index');
    }
}
