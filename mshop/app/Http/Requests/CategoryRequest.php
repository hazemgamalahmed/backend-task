<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        
        $rules = [
            'name' => 'required',
            'description' => 'required'
        ];

        if($this->input('parent_id')){
            $rules['parent_id'] = 'exists:categories,id';
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'parent_id.exists' => 'Invalid Category',
            'name.required' => 'Please Enter Your Name Of The Product',
            'description.required' => 'Please The Description Is Required'
        ];
    }
}
