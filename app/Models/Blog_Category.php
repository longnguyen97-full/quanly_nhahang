<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog_Category extends Model
{
    use HasFactory;

    protected $table = 'blog_category';

    protected $primaryKey = 'id_blg_cate';
}
