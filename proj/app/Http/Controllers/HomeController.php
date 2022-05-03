<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Models\SliderModel;
use App\Models\ArticleModel;
use App\Models\CategoryModel;

class HomeController extends Controller
{
    private $pathViewController = 'news.pages.home.';
    private $controllerName = 'home';
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
        $sliderModel   = new SliderModel();
        $articleModel  = new ArticleModel();

        $itemsSlider   = $sliderModel->listItems(null, ['task' => 'news-list-items']);
        $itemsFeature  = $articleModel->listItems(null, ['task' => 'news-list-items-feature']);
        $itemsLatest   = $articleModel->listItems(null, ['task' => 'news-list-items-latest']);
        $itemsCategory = $this->_getItemsCategory();

        return view($this->pathViewController . 'index', [
            'params' => $this->params,
            'itemsSlider' => $itemsSlider,
            'itemsCategory' => $itemsCategory,
            'itemsFeature' => $itemsFeature,
            'itemsLatest' => $itemsLatest
        ]);
    }

    private function _getItemsCategory() {
        $categoryModel = new CategoryModel();
        $itemsCategory = $categoryModel->listItems(null, ['task' => 'news-list-items-is-home']);
        $itemsCategory = new Collection($itemsCategory);
        $itemsCategory = $itemsCategory->groupBy('category_id')->toArray();
        $tmpCategory   = $tmpArticle = $tmpItem = [];

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
