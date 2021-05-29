<?php

namespace App\Http\Requests\Api\Auth;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\ResponseTrait;
class LoginRequest extends FormRequest
{
    use ResponseTrait;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
      
        if (isset($this->validator) && $validator->errors()) {
            
            $trans = trans('api.unprocessable_entity');
            
            $errorsResponse = $this->generalResponse(false,422,$trans,$validator->errors(),null);

            throw new \Illuminate\Validation\ValidationException($validator, $errorsResponse);
         } 
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email', 
            'password' => 'required'
        ];
    }
}
