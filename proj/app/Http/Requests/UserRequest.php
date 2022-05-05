<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    private $table = 'user';
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = $this->id;
        $task = $this->task;

        $condAvatar   = '';
        $condUserName = '';
        $condEmail    = '';
        $condPass     = '';
        $condLevel    = '';
        $condStatus   = '';
        $condFullname = '';

        switch ($task) {
            case 'add':
                $condUserName   = "bail|required|between:5,100|unique:$this->table,username";
                $condEmail      = "bail|required|email|unique:$this->table,email";
                $condFullname   = 'bail|required|min: 5';
                $condPass       = 'bail|required|between:5,100|confirmed';
                $condStatus     = 'bail|in:active,inactive';
                $condLevel      = 'bail|in:admin,member';
                $condAvatar     = 'bail|required|mimes:jpg,png,jpeg,gif,svg|max:500';
                break;
            case 'edit-info':
                $condUserName   = "bail|required|between:5,100|unique:$this->table,username,$id";
                $condFullname   = 'bail|required|min: 5';
                $condAvatar     = 'bail|mimes:jpg,png,jpeg,gif,svg|max:500';
                $condStatus     = 'bail|in:active,inactive';
                $condEmail      = "bail|required|email|unique:$this->table,email,$id";
                break;
            case 'change-password':
                break;
            case 'change-level':
                break;
            default:
                break;
        }

        return [
            'username' => $condUserName,
            'email'    => $condEmail,
            'fullname' => $condFullname,
            'status'   => $condStatus,
            'password' => $condPass,
            'level'    => $condLevel,
            'avatar'   => $condAvatar
        ];
    }

    public function messages()
    {
        return [
            // 'name.required' => trans('validation.required'),
            // 'name.min' => trans('validation.min.string'),
            // 'description.required' => trans('validation.required'),
            // 'link.required' => trans('validation.required'),
            // 'link.min' => trans('validation.min.string')
        ];
    }

    public function attributes()
    {
        return [
            'username' => 'Username',
            'email' => 'Email',
            'fullname' => 'Fullname',
            'status' => 'Status',
            'level' => 'Level',
            'password' => 'Password',
            'avatar' => 'Avatar'
        ];
    }
}
