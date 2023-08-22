<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Auth;

class StoreUserRequest extends FormRequest
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
            'name'=>"required",
            'email'=>"required|unique:users,email",
            'password'=>"required",
            'role'=>"required",
        ];
    }
    public function messages(): array
    {
        return [
            'name.required'=>"Un name doit être fournie",
            'email.required'=>"Un email doit être fournie",
            'email.unique'=>"ce email est dejat utiliser",
            'password.required'=>"Une date doit être fournie pour l'evenement",
            'role.required'=>"Le role de debut doit être fournie",
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
