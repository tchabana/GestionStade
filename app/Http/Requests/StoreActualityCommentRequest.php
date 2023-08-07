<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreActualityCommentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Obtenez l'utilisateur connecté
        $user = Auth::user();
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'message'=>"required|min:1",
            'actu_id'=>"required",
            'user_id'=>"required",
        ];
    }
    public function messages(): array
    {
        return [
            'actu_id.required' => "Le actu_id doit être fournie",
            'message.required' => "Le message doit être fournie",
            'user_id.required' => "L' user_id doit être fournie",
        ];
    }
}
