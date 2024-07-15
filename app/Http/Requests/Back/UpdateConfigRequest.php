<?php

namespace App\Http\Requests\Back;

use Illuminate\Foundation\Http\FormRequest;

class UpdateConfigRequest extends FormRequest
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
          //  'name' => 'required|max:255',
           
          //  'category_id' => 'exists:categories,id',
           // 'image' => 'sometimes|required|image|mimes:jpeg,png,jpg,gif',
            'logo' => 'sometimes|required|image|mimes:jpeg,png,jpg,gif',
            'addresse' => 'required|string',
            'email' => 'required|email',
            //'logoHeader' => 'sometimes|required|image|mimes:jpeg,png,jpg,gif',
            
            'description' => 'required|string',
            
        
          'telephone' => 'required|numeric',
           'icon' => 'required|image|max:1024|mimes:jpg,jpeg,png',
            
        ];
    }
}
