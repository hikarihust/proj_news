<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Models\ArticleModel;
use App\Models\CategoryModel;

class CategoryController extends Controller
{
    private $pathViewController = 'news.pages.category.';
    private $controllerName = 'category';
    private $params         = array();
    private $model;

    protected $fieldInCategory = [
        'category_id',
        'category_name',
        'display'
    ];

    protected $fieldInArticle = [
        'id',
        'name',
        'content',
        'thumb',
        'created',
        'category_name'
    ];

    public function __construct()
    {

        view()->share('controllerName', $this->controllerName);
    }

    public function index(Request $request)
    {
        $params['category_id'] = $request->category_id;
        $itemCategory = $this->_getItemsCategory($params);
        if(empty($itemCategory)) return redirect()->route('home');
        $articleModel  = new ArticleModel();
        $itemsLatest   = $articleModel->listItems(null, ['task' => 'news-list-items-latest']);

        return view($this->pathViewController . 'index', [
            'params' => $this->params,
            'itemsLatest' => $itemsLatest,
            'itemCategory' => $itemCategory
        ]);
    }

    private function _getItemsCategory($params) {
        $categoryModel = new CategoryModel();
        $itemsCategory = $categoryModel->getItem($params, ['task' => 'news-get-item']);
        if (!$itemsCategory[0]['id']) {
            return null;
        }

        $itemsCategory = new Collection($itemsCategory);
        $itemsCategory = $itemsCategory->groupBy('category_id')->toArray();
        $result = $tmpCategory   = $tmpArticle = $tmpItem = [];

        foreach ($itemsCategory as $val1) {
            foreach ($val1 as $val2) {
                $tmpCategory = array_intersect_key($val2, array_flip($this->fieldInCategory));
                $tmpArticle[] = array_intersect_key($val2, array_flip($this->fieldInArticle));
            }
            $tmpItem             = $tmpCategory;
            $tmpItem['articles'] = $tmpArticle;
            $result[]            = $tmpItem;
            $tmpCategory         = $tmpArticle = [];
        }

        return $result;
    }
}
