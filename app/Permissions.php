<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use ReflectionClass;

class Permissions extends Model
{
    public function getAllPermissions() {
        try {
            $reflectionClass = new ReflectionClass($this);
            return $reflectionClass->getConstants();
        } catch (\ReflectionException $e) {
            abort(500, "Internal Server Error");
        }
    }

    public const __ADMIN__ = 'Admin';
}
