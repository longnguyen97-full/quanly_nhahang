<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedback';

	public function customer()
	{
		return $this->belongsTo(Customer::class,'id_customer','id_customer');
    }
}
