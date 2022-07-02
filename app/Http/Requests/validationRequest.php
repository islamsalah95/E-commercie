<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validationRequest extends FormRequest
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
        return  [
            'name_en' => 'required|max:255',
            'name_ar' => 'required|max:255',
            'code' => 'required',
            'old_price' => 'nullable|numeric',
            'sale' => 'nullable|numeric',
            'price' => 'required|numeric',
            'quantity' => 'nullable|integer|max:999',
            'desc_en' => 'required|max:255',
            'desc_ar' => 'required|max:255',
            'id_brand' => 'nullable|integer',
            'id_subcategorie' => 'nullable|integer',
            'L' => 'nullable|integer|max:5000',
            'XL' => 'nullable|integer|max:5000',
            'XXL' =>'nullable|integer|max:5000',
            'image'=> 'required|max:100'
        ];




        }




}
