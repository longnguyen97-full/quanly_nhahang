<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\GiftCode;

class GiftCode_Detail extends Model
{
    use HasFactory;

    protected $table = 'gcode_detail';

	protected $primaryKey = 'id_gcode_detail';

	public function giftcode()
	{
		return $this->hasMany(GiftCode::class,'id_gcode','id_gcode');
	}
}
