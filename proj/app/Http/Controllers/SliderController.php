<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

    public function status(Request $request)
    {
        echo $request->status;
        echo "</br>";
        echo $request->id;
        echo "</br>";

        return "SliderController - status";
    }

    public function delete()
    {
        return view($this->pathViewController . 'delete');
    }
}
