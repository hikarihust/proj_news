<?php

namespace App\Models;

use App\Models\AdminModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use DB;

class CategoryModel extends AdminModel
{
    public function __construct() {
        $this->table = 'category AS c';
        $this->folderUpload = 'category';
        $this->fieldsearchAccepted = ['id', 'name'];
        $this->crudNotAccepted = ['_token'];
    }

    public function listItems($params = null, $options = null){
        $result = null;
        if ($options['task'] === 'admin-list-items') {
            $query = $this->select('id', 'name', 'status', 'is_home', 'display', 'created', 'created_by', 'modified', 'modified_by');
            if ($params['filter']['status'] !== 'all') {
                $query->where('status', '=', $params['filter']['status']);
            }

            if ($params['search']['value'] !== '') {
                if ($params['search']['field'] === 'all') {
                    $query->where(function($query) use ($params) {
                        foreach ($this->fieldsearchAccepted as $column) {
                            $query->orWhere($column, 'LIKE', "%{$params['search']['value']}%");
                        }
                    });
                } else if (in_array($params['search']['field'], $this->fieldsearchAccepted)) {
                    $query->where($params['search']['field'], 'LIKE', "%{$params['search']['value']}%");
                }
            }

            $result = $query->orderBy('id', 'desc')
                            ->paginate($params['pagination']['totalItemsPerPage']);
        }

        if ($options['task'] === 'news-list-items') {
            $query = $this->select('id', 'name')
                            ->where('status', '=', 'active')
                            ->limit(8);

            $result = $query->get()->toArray();
        }

        if ($options['task'] === 'news-list-items-is-home') {
            $query = $this->select('c.id as category_id', 'c.name as category_name', 'c.display', 'a.id', 'a.name', 'a.content', 'a.thumb', 'a.created')
                            ->leftJoin('article AS a', 'a.category_id', '=', 'c.id')
                            ->where('c.status', '=', 'active')
                            ->where('c.is_home', '=', 'yes')
                            ->orderBy('c.display', 'desc')
                            ->limit(8);

            $result = $query->get()->toArray();
        }

        if ($options['task'] === 'admin-list-items-in-selectbox') {
            $query = $this->select('id', 'name')
                            ->orderBy('name', 'asc')
                            ->where('status', '=', 'active');

            $result = $query->pluck('name', 'id')->toArray();
        }

        return $result;
    }

    public function countItems($params = null, $options = null){
        $result = null;
        if ($options['task'] === 'admin-count-items-group-by-status') {
            $query = $this->select(DB::raw('count(id) as count, status'));

            if ($params['search']['value'] !== '') {
                if ($params['search']['field'] === 'all') {
                    $query->where(function($query) use ($params) {
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

    public function getItem($params = null, $options = null) {
        $result = null;
        if ($options['task'] === 'get-item') {
            $result = $this->select('id', 'name', 'status')
                        ->where('id', $params['id'])->first();
        }

        if ($options['task'] === 'news-get-item') {
            $result = self::select('c.id AS category_id', 'c.name AS category_name', 'c.display', 'a.id', 'a.name', 'a.content', 'a.thumb', 'a.created')
                        ->leftJoin('article AS a', 'a.category_id', '=', 'c.id')
                        ->where('c.status', '=', 'active')
                        ->where('c.id', $params['category_id'])->get();
        }
        if($result) $result = $result->toArray();

        return $result;
    }

    public function saveItem($params = null, $options = null) {
        if ($options['task'] === 'change-status') {
            $status = ($params['currentStatus'] === 'active') ? 'inactive' : 'active';
            $this->where('id', $params['id'])->update(['status' => $status]);
        }

        if ($options['task'] === 'change-is-home') {
            $isHome = ($params['currentIsHome'] === 'yes') ? 'no' : 'yes';
            $this->where('id', $params['id'])->update(['is_home' => $isHome]);
        }

        if ($options['task'] === 'change-display') {
            $display = $params['currentDisplay'];
            $this->where('id', $params['id'])->update(['display' => $display]);
        }

        if ($options['task'] === 'add-item') {
            $params['created_by'] = 'quang';
            $this->insert($this->_prepareParams($params));
        }

        if ($options['task'] === 'edit-item') {
            $params['modified_by'] = 'quang';
            $this->where('id', $params['id'])->update($this->_prepareParams($params));
        }
    }

    public function deleteItem($params = null, $options = null) {
        if ($options['task'] === 'delete-item') {
            $this->where('id', $params['id'])->delete();
        }
    }
}
