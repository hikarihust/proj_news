<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SliderModel as MainModel;

class SliderController extends Controller
{
    private $pathViewController = 'admin.pages.slider.';
    private $controllerName = 'slider';
    private $params         = array();
    private $model;

    public function __construct()
    {
        $this->model = new MainModel();
        $this->params["pagination"]["totalItemsPerPage"] = 1;
        view()->share('controllerName', $this->controllerName);
    }

    public function index()
    {
        $items = $this->model->listItems($this->params, ['task' => 'admin-list-items']);
        $itemsStatusCount = $this->model->countItems($this->params, ['task' => 'admin-count-items-group-by-status']);

        return view($this->pathViewController . 'index', [
            'params' => $this->params,
            'items' => $items,
            'itemsStatusCount' => $itemsStatusCount
        ]);
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
