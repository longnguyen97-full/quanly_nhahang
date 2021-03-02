<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin_Sidebar extends Model
{
    use HasFactory;

    protected $table = "admin_sidebar";

    protected $primaryKey = "id_sidebar";
}
