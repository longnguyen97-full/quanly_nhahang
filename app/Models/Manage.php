<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;
use App\Models\Customer;
use App\Models\Comment;

class Manage extends Model
{
    use HasFactory;

    protected $table = 'manage';

	public function blog()
	{
		return $this->hasMany(Blog::class,'id_blog','id_blog');
	}
	
	public function customer()
	{
		return $this->hasMany(Customer::class,'id_customer','id_customer');
	}
	
	public function comment()
	{
		return $this->hasMany(Comment::class,'id_comment','id_comment');
	}
}
