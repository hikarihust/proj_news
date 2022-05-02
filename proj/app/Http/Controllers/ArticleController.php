<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ArticleModel as MainModel;
use App\Models\CategoryModel;
use App\Http\Requests\ArticleRequest as MainRequest;

class ArticleController extends Controller
{
    private $pathViewController = 'admin.pages.article.';
    private $controllerName = 'article';
    private $params         = array();
    private $model;

    public function __construct()
    {
        $this->model = new MainModel();
        $this->params["pagination"]["totalItemsPerPage"] = 1;
        view()->share('controllerName', $this->controllerName);
    }

    public function index(Request $request)
    {
        $this->params['filter']['status'] = $request->input('filter_status', 'all');
        $this->params['search']['field'] = $request->input('search_field', '');
        $this->params['search']['value'] = $request->input('search_value', '');
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
        $item = null;
        if ($request->id) {
            $params['id'] = $request->id;
            $item = $this->model->getItem($params, ['task' => 'get-item']);
        }

        $categoryModel = new CategoryModel();
        $itemsCategory = $categoryModel->listItems(null, ['task' => 'admin-list-items-in-selectbox']);

        return view($this->pathViewController . 'form', [
            'item' => $item,
            'itemsCategory' => $itemsCategory
        ]);
    }

    public function save(MainRequest $request)
    {
        if ($request->method() === 'POST') {
            $params = $request->all();

            $task   = 'add-item';
            $notify = trans('notify.add_item');

            if (isset($params['id']) && $params['id']) {
                $task   = 'edit-item';
                $notify = trans('notify.edit_item');
            }
            $this->model->saveItem($params, ['task' => $task]);
            return redirect()->route($this->controllerName)->with('zvn_notify', $notify);
        }
    }

    public function status(Request $request)
    {
        $params['currentStatus'] = $request->status;
        $params['id'] = $request->id;
        $this->model->saveItem($params, ['task' => 'change-status']);

        return redirect()->route($this->controllerName)->with('zvn_notify', trans('notify.change_status'));
    }

    public function type(Request $request)
    {
        $params['currentType'] = $request->type;
        $params['id'] = $request->id;
        $this->model->saveItem($params, ['task' => 'change-type']);
        return redirect()->route($this->controllerName)->with('zvn_notify', trans('notify.change_type'));
    }

    public function isHome(Request $request)
    {
        $params['currentIsHome'] = $request->is_home;
        $params['id'] = $request->id;
        $this->model->saveItem($params, ['task' => 'change-is-home']);
        return redirect()->route($this->controllerName)->with('zvn_notify', trans('notify.change_is_home'));
    }

    public function display(Request $request)
    {
        $params['currentDisplay'] = $request->display;
        $params['id'] = $request->id;
        $this->model->saveItem($params, ['task' => 'change-display']);

        return redirect()->route($this->controllerName)->with('zvn_notify', trans('notify.change_display'));
    }

    public function delete(Request $request)
    {
        $params['id'] = $request->id;
        $this->model->deleteItem($params, ['task' => 'delete-item']);
        return redirect()->route($this->controllerName)->with('zvn_notify', trans('notify.delete_item'));
    }
}
