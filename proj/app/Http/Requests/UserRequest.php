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
        $condAvatar = 'bail|required|mimes:jpg,png,jpeg,gif,svg|max:500';
        $condUserName = "bail|required|between:5,100|unique:$this->table,username";
        $condEmail = "bail|required|email|unique:$this->table,email";
        if (! empty($this->id)) {
            $condAvatar = 'bail|mimes:jpg,png,jpeg,gif,svg|max:500';
            $condUserName .= ",$this->id";
            $condEmail .= ",$this->id";
        }

        return [
            'username' => $condUserName,
            'email' => $condEmail,
            'fullname' => 'bail|required|min:5',
            'status' => 'bail|in:admin,member',
            'avatar' => $condAvatar
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
            'avatar' => 'Avatar'
        ];
    }
}
