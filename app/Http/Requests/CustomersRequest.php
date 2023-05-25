<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomersRequest extends FormRequest
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
            'surname'=>'The surname is required and must be between 3 and 32 characters long',
            'phone'=>'Phone number is required and must be between 3 and 24 characters long',
            'email'=>'Enter email address',
            'comment'=>'Leave comment',
            'company_id.required'=>'Company ID is required',
            'company_id.integer'=>'Company ID must be an integer',
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
            'surname'=>'required|min:3|max:32',
            'phone'=>'required|min:3|max:24',
            'email'=>'required|email',
            'comment'=>'required',
            'company_id'=>'required|integer'
             ];
    }
}
