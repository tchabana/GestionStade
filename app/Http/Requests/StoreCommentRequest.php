<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreCommentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Obtenez l'utilisateur connecté
        $user = Auth::user();
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
            'message'=>"required|min:1",
            'event_id'=>"required"
            // 'user_id'=>"required",
        ];
    }
    public function messages(): array
    {
        return [
            'event_id.required' => "Le event_id doit être fournie",
            'message.required' => "Le message doit être fournie",
            //'user_id.required' => "L' user_id doit être fournie",
        ];
    }
}
