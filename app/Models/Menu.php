<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Menu extends Model
{
    use HasFactory;

	protected $table = 'menu';
	
	protected $primaryKey = 'id_menu';

	public function product()
	{
		return $this->hasMany(Product::class,'id_menu','id_menu');
	}
}
