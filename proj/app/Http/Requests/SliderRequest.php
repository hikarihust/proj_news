<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
{
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
        return [
            'name' => 'bail|required|min:5',
            'description' => 'bail|required',
            'link' => 'bail|required|min:5|url',
            'status' => 'bail|in:active,inactive',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => trans('validation.required'),
            'name.min' => trans('validation.min.string'),
            'description.required' => trans('validation.required'),
            'link.required' => trans('validation.required'),
            'link.min' => trans('validation.min.string')
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Name',
            'description' => 'Description',
            'link' => 'Link',
            'status' => 'Status',
        ];
    }
}
