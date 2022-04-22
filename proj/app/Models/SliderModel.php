<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class SliderModel extends Model
{
    protected $table = 'slider';
    protected $primaryKey ='id';
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';
    protected $fieldsearchAccepted = [
        'id',
        'name',
        'description',
        'link'
    ];

    public function listItems($params = null, $options = null){
        $result = null;
        if ($options['task'] === 'admin-list-items') {
            $query = $this->select('id', 'name', 'description', 'status', 'link', 'thumb', 'created', 'created_by', 'modified', 'modified_by');
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

    public function saveItem($params = null, $options = null) {
        if ($options['task'] === 'change-status') {
            $status = ($params['currentStatus'] === 'active') ? 'inactive' : 'active';
            $this->where('id', $params['id'])->update(['status' => $status]);
        }
    }

    public function deleteItem($params = null, $options = null) {
        if ($options['task'] === 'delete-item') {
            $this->where('id', $params['id'])->delete();
        }
    }
}
