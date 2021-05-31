<?php

namespace App\Http\Requests\Api\Profile;

use App\Models\User;
use App\Traits\ResponseTrait;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
        $userId = User::where('id', Auth('api')->user()->id)->value('id');

        return [
            'date_of_birth' => ['required','date'],
            'email' => ['required', 'email', Rule::unique('users')->ignore($userId)],
            'gender' => ['required']
        ];
    }
}
