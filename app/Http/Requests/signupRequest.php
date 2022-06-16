<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class signupRequest extends FormRequest
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
            'name' => 'required | max:255 | string',
            'age' => 'numeric|required',
            'date' => 'string',
            'phone' => 'numeric',
            'web' => 'string',
            'address' => 'string',

        ];
    }
    public function messages(){
        return[
          'name.string'  => 'Vui long dien ten cho dung',
          'name.required'  => 'nguyen doepo gai phai fien dfdf',
          'age.required'  => 'nguyen doepo gai phai fien dfdf',
          'age.numeric'  => 'Vui long nhap tuoi cho dung',
          'date.string'  => 'Vui long dien lai ngay thang',
          'phone.numeric'  => 'Vui long kiem tra lai so dien thoai',
          'web.string'  => 'Vui long kiem tra lai ki tu',
          'address.string'  => 'Vui long nhap lai dia chi',
        ];
    }
}