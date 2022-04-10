<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    private $pathViewController = 'admin.pages.slider.';

    public function index()
    {
        return view($this->pathViewController . 'index');
    }

    public function form($id)
    {
        $title = "SliderController - form";
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
