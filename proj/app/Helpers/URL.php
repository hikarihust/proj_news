<?php

namespace App\Helpers;

use Illuminate\Support\Str;

class URL
{
    public static function linkCategory($id, $name)
    {
        return $link = route('category/index', ['category_name' => Str::slug($name), 'category_id' => $id]);
    }
}
