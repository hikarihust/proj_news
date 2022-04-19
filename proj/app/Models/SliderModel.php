<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SliderModel extends Model
{
    protected $table = 'slider';
    protected $primaryKey ='id';
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    public function listItems($params = null, $options = null){
        $result = null;
        if ($options['task'] === 'admin-list-items') {
            $result = SliderModel::all();
        }

        return $result;
    }
}
