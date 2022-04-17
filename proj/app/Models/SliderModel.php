<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SliderModel extends Model
{
    protected $table = 'slider';
    protected $primaryKey ='id';
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';
}
