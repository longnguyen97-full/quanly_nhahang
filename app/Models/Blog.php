<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog_Category;
use App\Models\Account;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blog';

	public function account_author()
	{
		return $this->belongsTo(Account::class, 'id_account', 'id_account');
		// para 1 = foreign key => access to Blog  => get foreign key of Blog
		// para 2 = local key => access to Account => get primary key of Account
	}
}
