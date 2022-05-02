<?php

namespace App\Models;

use App\Models\AdminModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use DB;

class ArticleModel extends AdminModel
{
    public function __construct()
    {
        $this->table = 'article as a';
        $this->folderUpload = 'article';
        $this->fieldsearchAccepted = ['name', 'content'];
    }

    public function listItems($params = null, $options = null)
    {
        $result = null;
        if ($options['task'] === 'admin-list-items') {
            $query = $this->select('a.id', 'a.name', 'a.content', 'a.status', 'a.thumb', 'a.type', 'c.name AS category_name')
                            ->leftJoin('category AS c', 'a.category_id', '=', 'c.id');

            if ($params['filter']['status'] !== 'all') {
                $query->where('a.status', '=', $params['filter']['status']);
            }

            if ($params['search']['value'] !== '') {
                if ($params['search']['field'] === 'all') {
                    $query->where(function ($query) use ($params) {
                        foreach ($this->fieldsearchAccepted as $column) {
                            $query->orWhere('a.' . $column, 'LIKE', "%{$params['search']['value']}%");
                        }
                    });
                } else if (in_array($params['search']['field'], $this->fieldsearchAccepted)) {
                    $query->where('a.' . $params['search']['field'], 'LIKE', "%{$params['search']['value']}%");
                }
            }

            $result = $query->orderBy('a.id', 'desc')
                ->paginate($params['pagination']['totalItemsPerPage']);
        }

        if ($options['task'] === 'news-list-items') {
            $query = $this->select('id', 'name', 'content', 'thumb')
                ->where('status', '=', 'active')
                ->limit(5);

            $result = $query->get()->toArray();
        }

        if ($options['task'] === 'news-list-items-feature') {
            $query = $this->select('a.id', 'a.name', 'a.content', 'a.created', 'a.category_id', 'c.name AS category_name', 'a.thumb')
                            ->leftJoin('category AS c', 'a.category_id', '=', 'c.id')
                            ->where('a.status', '=', 'active')
                            ->where('a.type', '=', 'feature')
                            ->orderBy('a.id', 'desc')
                            ->limit(3);

            $result = $query->get()->toArray();
        }

        return $result;
    }

    public function countItems($params = null, $options = null)
    {
        $result = null;
        if ($options['task'] === 'admin-count-items-group-by-status') {
            $query = $this->select(DB::raw('count(id) as count, status'));

            if ($params['search']['value'] !== '') {
                if ($params['search']['field'] === 'all') {
                    $query->where(function ($query) use ($params) {
                        foreach ($this->fieldsearchAccepted as $column) {
                            $query->orWhere($column, 'LIKE', "%{$params['search']['value']}%");
                        }
                    });
                } else if (in_array($params['search']['field'], $this->fieldsearchAccepted)) {
                    $query->where($params['search']['field'], 'LIKE', "%{$params['search']['value']}%");
                }
            }

            $query->groupBy('status');
            $result = $query->get()->toArray();
        }

        return $result;
    }

    public function getItem($params = null, $options = null)
    {
        $result = null;
        if ($options['task'] === 'get-item') {
            $result = $this->select('id', 'name', 'content', 'status', 'thumb', 'category_id')
                ->where('id', $params['id'])->first()->toArray();
        }

        if ($options['task'] === 'get-thumb') {
            $result = $this->select('id', 'thumb')->where('id', $params['id'])->first()->toArray();
        }

        return $result;
    }

    public function saveItem($params = null, $options = null)
    {
        if ($options['task'] === 'change-status') {
            $status = ($params['currentStatus'] === 'active') ? 'inactive' : 'active';
            $this->where('id', $params['id'])->update(['status' => $status]);
        }

        if ($options['task'] === 'change-type') {
            $this->where('id', $params['id'])->update(['type' => $params['currentType']]);
        }

        if ($options['task'] === 'add-item') {
            $params['created_by'] = 'quang';
            $params['thumb'] = $this->_uploadThumb($params['thumb']);
            $this->insert($this->_prepareParams($params));
        }

        if ($options['task'] === 'edit-item') {
            if (isset($params['thumb']) && !empty($params['thumb'])) {
                $this->_deleteThumb($params['thumb_current']);
                $params['thumb'] = $this->_uploadThumb($params['thumb']);
            }
            $params['modified_by'] = 'quang';
            $this->where('id', $params['id'])->update($this->_prepareParams($params));
        }
    }

    public function deleteItem($params = null, $options = null)
    {
        if ($options['task'] === 'delete-item') {
            $item = $this->getItem($params, ['task' => 'get-thumb']);
            $this->_deleteThumb($item['thumb']);
            $this->where('id', $params['id'])->delete();
        }
    }
}
