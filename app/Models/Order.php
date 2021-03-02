<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
use App\Models\Product;

class Order extends Model
{
    use HasFactory;

    protected $table = 'order';
    protected $primaryKey = 'id_order';

    public function customer() {
        return $this->belongsTo(Customer::class,'id_customer','id_customer');
    }
    public function product() {
        return $this->belongsTo(Product::class,'id_product','id_product');
    }
}
