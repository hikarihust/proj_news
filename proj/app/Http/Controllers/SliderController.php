<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class SliderController extends Controller
{
    private $pathViewController = 'admin.pages.slider.';
    private $controllerName = 'slider';

    public function __construct()
    {
        view()->share('controllerName', $this->controllerName);
    }

    public function index()
    {
        $tables = DB::select('SHOW TABLES');
        foreach($tables as $table) {
            echo "<pre>";
            print_r($table);
            echo "</pre>";
        }
        return view($this->pathViewController . 'index');
    }

    public function form(Request $request)
    {
        $title = "SliderController - form";
        return view($this->pathViewController . 'form', [
            'id'    => $request->id,
            'title' => $title
        ]);
    }

    public function status(Request $request)
    {
        echo $request->status;
        echo "</br>";
        echo $request->id;
        echo "</br>";

        return redirect()->route($this->controllerName);
    }

    public function delete()
    {
        return view($this->pathViewController . 'delete');
    }
}
