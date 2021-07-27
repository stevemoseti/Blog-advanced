<?php

namespace App\Http\Requests\Products;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProduteRequest extends FormRequest
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
             'product_title'=>'required',
            'product_description'=>'required',
            'product_price'=>'required',
            'product_quantity'=>'required',
            'product_image'=>'required|image:products',
            'category'=>'required',
            'brand'=>'required'
        ];
    }
}
