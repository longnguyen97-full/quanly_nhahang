<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Payment_Method;

class Payment_Detail extends Model
{
    use HasFactory;

    protected $table = 'payment_detail';

	protected $primaryKey = 'id_payment_detail';

	public function payment()
	{
		return $this->hasMany(Payment_Method::class,'id_payment','id_payment');
	}
}
