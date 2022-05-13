<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Models\RssModel;
use App\Helpers\Feed;

class RssController extends Controller
{
    private $pathViewController = 'news.pages.rss.';
    private $controllerName = 'rss';
    private $params         = array();
    private $model;

    public function __construct()
    {

        view()->share('controllerName', $this->controllerName);
    }

    public function index(Request $request)
    {
        $rssModel   = new RssModel();

        $itemsRss   = $rssModel->listItems(null, ['task'   => 'news-list-items']);
        $data = Feed::read($itemsRss);

        return view($this->pathViewController .  'index', [
            'items'   => $data,
            'title'   => 'Tin tức tổng hợp',
        ]);
    }

    public function getGold()
    {
        $itemsGold = Feed::getGold();
        return view($this->pathViewController .  'child-index.box-gold', [
            'itemsGold' => $itemsGold
        ]);
    }

    public function getCoin()
    {
        $itemsCoin = Feed::getCoin();
        return view($this->pathViewController .  'child-index.box-coin', [
            'itemsCoin' => $itemsCoin
        ]);
    }
}
