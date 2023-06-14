<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'catname'=>['required'],
            'CatDesc'=>['required,min:15','max:20']

        ];
    }
    public function messages(){
        return[
            'catname.required'=>"teh category name required",
            'CatDesc.required'=>"the category description",
            'CatDesc.min'=>"the category description should be grater than 15 chars",
            'CatDesc.max'=>"the category description should be less than 20 chars"





        ];
    }
}
