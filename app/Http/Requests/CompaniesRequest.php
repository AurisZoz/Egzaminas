<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompaniesRequest extends FormRequest
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

    public function messages()
    {
        return  [
        'id.required'=>'ID is required',
        'id.integer'=>'ID must be an integer',
        'name'=>'The name is required and must be between 3 and 32 characters long',
        'address'=>'Address is required',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
       'id'=>'required|integer',
       'name'=>'required|min:3|max:32',
       'address'=>'required'
        ];
    }
}
