<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin_Widget;

class Header extends Model
{
    use HasFactory;

    protected $table = 'header';

	public function widget()
	{
		return $this->belongsTo(Admin_Widget::class, 'id_widget', 'id_widget');
	}
}
