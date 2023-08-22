<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Auth;

class LoginUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Obtenez l'utilisateur connecté
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'email'=>"required|email|exists:users,email",
            'password'=>"required",
        ];
    }
    public function messages(): array
    {
        return [
            'email.required'=>"Un email doit être fournie",
            'email.exists'=>"Ce mail n'est pas repertorier",
            'email.email'=>"ce email n'est pas valide",
            'password.required'=>"Un password doit être fournie",
        ];
    }
    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success'=>false,
            'message'=>'Erreur de validation',
            'errorList'=>$validator->errors(),
        ]));
        
    }
    
}
