<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * @return string
     */
    public function getRouteKeyName() {
        return 'name';
    }

    public function categoryroles()
    {
        return $this->hasMany('App\CategoryRoles');
    }
}
