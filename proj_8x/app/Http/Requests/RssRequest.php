<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RssRequest extends FormRequest
{
    private $table = 'rss';
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

        $condName  = "bail|required|between:5,100|unique:$this->table,name";
        $condSource = implode(',', array_keys(config('zvn.template.rss_source')));

        if(!empty($id)){ // edit
            $condName  .= ",$id";
        }
        return [
            'name'        => $condName,
            'ordering'    => 'required',
            'link'        => 'bail|required|min:5|url',
            'source'      => "bail|in:$condSource",
            'status'      => 'bail|in:active,inactive',
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
            'ordering' => 'Ordering',
            'link' => 'Link',
            'status' => 'Status',
            'source' => 'Source',
        ];
    }
}
