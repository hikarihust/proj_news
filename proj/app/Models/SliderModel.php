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

    public function listItems($params = null, $options = null){
        $result = null;
        if ($options['task'] === 'admin-list-items') {
            $result = SliderModel::select('id', 'name', 'description', 'status', 'link', 'thumb', 'created', 'created_by', 'modified', 'modified_by')
                                ->orderBy('id', 'desc')
                                ->paginate($params['pagination']['totalItemsPerPage']);
        }

        return $result;
    }

    public function countItems($params = null, $options = null){
        $result = null;
        if ($options['task'] === 'admin-count-items-group-by-status') {
            $query = self::select(DB::raw('count(id) as count, status'));

            $query->groupBy('status');
            $result = $query->get()->toArray();
        }

        return $result;
    }
}
