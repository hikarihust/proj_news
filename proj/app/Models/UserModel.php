<?php

namespace App\Models;

use App\Models\AdminModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use DB;

class UserModel extends AdminModel
{
    public function __construct() {
        $this->table = 'users';
        $this->folderUpload = 'user';
        $this->fieldsearchAccepted = ['id', 'username', 'email', 'fullname'];
        $this->crudNotAccepted = ['_token','avatar_current', 'password_confirmation', 'task'];
    }

    public function listItems($params = null, $options = null){
        $result = null;
        if ($options['task'] === 'admin-list-items') {
            $query = $this->select('id', 'username', 'email', 'fullname', 'avatar', 'status', 'level', 'created', 'created_by', 'modified', 'modified_by');
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

    public function getItem($params = null, $options = null) {
        $result = null;
        if ($options['task'] === 'get-item') {
            $result = $this->select('id', 'username', 'email', 'status', 'fullname', 'avatar', 'level')
                        ->where('id', $params['id'])->first()->toArray();
        }

        if ($options['task'] === 'get-avatar') {
            $result = $this->select('id', 'avatar')->where('id', $params['id'])->first()->toArray();
        }

        return $result;
    }

    public function saveItem($params = null, $options = null) {
        if ($options['task'] === 'change-status') {
            $status = ($params['currentStatus'] === 'active') ? 'inactive' : 'active';
            $this->where('id', $params['id'])->update(['status' => $status]);
        }

        if ($options['task'] === 'add-item') {
            $params['created_by'] = 'quang';
            $params['avatar'] = $this->_uploadThumb($params['avatar']);
            $params['password'] = Hash::make($params['password']);
            $this->insert($this->_prepareParams($params));
        }

        if ($options['task'] === 'edit-item') {
            if (isset($params['avatar']) && !empty($params['avatar'])) {
                $this->_deleteThumb($params['avatar_current']);
                $params['avatar'] = $this->_uploadThumb($params['avatar']);
            }
            $params['modified_by'] = 'quang';
            $this->where('id', $params['id'])->update($this->_prepareParams($params));
        }

        if ($options['task'] === 'change-level') {
            $level = $params['currentLevel'];
            $this->where('id', $params['id'])->update(['level' => $level]);
        }

        if ($options['task'] === 'change-level-post') {
            $level = $params['level'];
            $this->where('id', $params['id'])->update(['level' => $level]);
        }

        if ($options['task'] === 'change-password') {
            $password = Hash::make($params['password']);
            $this->where('id', $params['id'])->update(['password' => $password]);
        }
    }

    public function deleteItem($params = null, $options = null) {
        if ($options['task'] === 'delete-item') {
            $item = $this->getItem($params, ['task' => 'get-avatar']);
            $this->_deleteThumb($item['avatar']);
            $this->where('id', $params['id'])->delete();
        }
    }
}
