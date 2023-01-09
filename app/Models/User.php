<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
 use HasApiTokens, HasFactory, Notifiable, HasRoles;

 /**
  * The attributes that are mass assignable.
  *
  * @var array<int, string>
  */
 protected $_fillable = ['name', 'email', 'password'];
 /**
  * The attributes that should be hidden for serialization.
  *
  * @var array<int, string>
  */
 protected $_hidden = ['password', 'remember_token'];

 /**
  * The attributes that should be cast.
  *
  * @var array<string, string>
  */
 protected $_casts = [
  'email_verified_at' => 'datetime',
 ];

 //  public function invoices()
 //  {
 //   return $this->hasMany(Invoice::class);
 //  }

}