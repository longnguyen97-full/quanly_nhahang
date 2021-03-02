<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin_Widget extends Model
{
    use HasFactory;

    protected $table = "admin_widget";

    protected $primaryKey = 'id_widget';
}
