<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Account;

class Position extends Model
{
    use HasFactory;

    protected $table = 'position';

	// public function account()
	// {
	// 	return $this->hasMany(Account::class,'id_position','id_position');
	// }
}
