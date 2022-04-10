<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    private $pathViewController = 'admin.pages.category.';

    public function index()
    {
        return view($this->pathViewController . 'index');
    }

    public function form($id)
    {
        $title = "CategoryController - form";
        return view($this->pathViewController . 'form', [
            'id'    => $id,
            'title' => $title
        ]);
    }

    public function delete()
    {
        return view($this->pathViewController . 'delete');
    }
}
