<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Position;

class Account extends Authenticatable
{
    use HasFactory;

    protected $table = 'account';

	// public function blog_author()
	// {
	// 	return $this->hasMany(Blog::class);
	// }

	// public function position() {
	// 	return $this->belongsTo(Position::class);
	// }
}
