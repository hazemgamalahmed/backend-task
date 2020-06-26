<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'description' => 'required',
            'price' => 'required|numeric'

        ];
        if($this->input('category_id')){
            $rules['category_id'] = 'exists:products,category_id';
        }
        
        return $rules;
    }

    public function messages()
    {
        return [
        'category_id' => 'invalid categories',
        
        'name' => 'Please Enter The Product Name',
        'price' => 'Price Must Be Numeric And Required'

    ];
    }
}
