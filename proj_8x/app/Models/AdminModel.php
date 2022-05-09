<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminModel extends Model
{
    protected $table = '';
    protected $primaryKey ='id';
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';
    protected $folderUpload = '';
    protected $fieldsearchAccepted = [
        'id',
        'name',
    ];
    protected $crudNotAccepted = [
        '_token',
        'thumb_current',
    ];

    protected function _uploadThumb($thumbObj) {
        $thumbName = Str::random(10) . '.' . $thumbObj->clientExtension();
        $thumbObj->storeAs($this->folderUpload, $thumbName, 'zvn_storage_image');

        return $thumbName;
    }

    protected function _deleteThumb($thumbName) {
        Storage::disk('zvn_storage_image')->delete($this->folderUpload . '/' . $thumbName);
    }

    protected function _prepareParams($params) {
        return $params = array_diff_key($params, array_flip($this->crudNotAccepted));
    }
}
