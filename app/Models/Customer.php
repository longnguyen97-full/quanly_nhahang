<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Feedback;

class Customer extends Authenticatable
{
    use HasFactory;

	protected $table = 'customer';
	
	protected $fillable = [
        'email', 'password',
	];
	
    protected $hidden = [
        'password', 'remember_token',
	];
	
	public function feedback()
	{
		return $this->hasMany(Feedback::class,'id_customer','id_customer');
	}
}
