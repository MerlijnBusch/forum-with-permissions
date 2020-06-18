<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryRoles extends Model
{
    public function user()
    {
        dd($this);
        DB::table('user_category_role')
        return $this->belongsToMany('App\User', 'user_category_role', 'user_id', 'category_role_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
