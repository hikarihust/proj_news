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
        $condThumb = 'bail|required|mimes:jpg,png,jpeg,gif,svg|max:500';
        if (! empty($this->id)) {
            $condThumb = 'bail|mimes:jpg,png,jpeg,gif,svg|max:500';
        }

        return [
            'name' => 'bail|required|min:5',
            'description' => 'bail|required',
            'link' => 'bail|required|min:5|url',
            'status' => 'bail|in:active,inactive',
            'thumb' => $condThumb
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
            'name' => 'Name',
            'description' => 'Description',
            'link' => 'Link',
            'status' => 'Status',
            'thumb' => 'Thumb',
        ];
    }
}
