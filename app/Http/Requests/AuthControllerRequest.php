<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthControllerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'user_name' => 'required|string|max:255',
            'phone_number' => 'required |string | phone_number |max:255',
            'password' => 'required | string | min:6 |confirmed'   
    
        ];
    }
}
