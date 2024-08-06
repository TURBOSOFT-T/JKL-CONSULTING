<?php

namespace App\Http\Requests;

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
        return $rules = [
           // 'name' => 'required|max:255',
           // 'slug' => ['required', 'max:255', new Slug, 'unique:products,slug' . $id],
          //  'category_id' => 'exists:categories,id',
            'image' => 'sometimes|required|image|mimes:jpeg,png,jpg,gif',
            'description' => 'nullable|string',
            'email' => 'required|email|max:255' ,
            'telephone' => 'required|max:255|',
         //   'weight' => 'required|numeric|regex:/^(\d+(?:[\.\,]\d{1,3})?)$/',
         //  'stock' => 'required|numeric',
         //  'stock_alert' => 'required|numeric',
           // 'user_id'=>Auth::user(),
          //  'user_id' => auth()->user()->id,
           'image' => 'nullable|image|max:1024|mimes:jpg,jpeg,png',
           'icon' => 'nullable|image|max:1024|mimes:jpg,jpeg,png',
           // 'logoHeader' => 'sometimes|required|image|mimes:jpeg,png,jpg,gif',
           // 'logoFooter' => 'sometimes|required|image|mimes:jpeg,png,jpg,gif',
           // 'logoSideBar' => 'sometimes|required|image|mimes:jpeg,png,jpg,gif',
           // 'logoTopBar' => 'sometimes|required|image|mimes:jpeg,png
            // 'logoBottomBar' => 'sometimes|required|image|mimes:jpeg,png,jpg,gif',
           // 'logoLeftBar' => 'sometimes|required|image|mimes:jpeg,png,jpg,gif',
           // 'logoRightBar' => 'sometimes|required|image|mimes:jpeg,png,jpg,gif',
           // 'logoHome' => 'sometimes|required|image|mimes:jpeg,png,jpg,gif',
           // 'logoAbout' => 'sometimes|required|image|mimes:jpeg,png,jpg,gif',
           // 'logoContact' => 'sometimes|required|image|mimes:jpeg,png,jpg,gif',
           // 'logoServices' => 'sometimes|required|image|mimes:jpeg,png,jpg,gif',
           // 'logoTerms' => 'sometimes|required|image|mime
           
           // 'category_id' => 'exists:categories,id',
        ];
    }
}
