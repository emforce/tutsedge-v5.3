<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use App\Traits\Admin;

class User extends Authenticatable
{
    use HasApiTokens;
    use Notifiable;
    use AuthenticableTrait;
    use Admin;
    
    /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['provider_id','name', 'email', 'password', 'provider'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function articles()
    {
        return $this->hasMany('App\Lesson');
    }
    
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }
}
