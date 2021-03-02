<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Menu;

class Product extends Model
{
    use HasFactory;

	protected $table = 'product';
	protected $primaryKey = 'id_product';

	public function menu()
	{
		return $this->belongsTo(Menu::class, 'id_menu', 'id_menu');
	}
}
