<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreMatcheRequest extends FormRequest
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
            'equipe1_id'=>'required',
            'equipe2_id'=>'required',
            'event_id'=>'required',
        ];
    }
    public function messages(): array
    {
        return [
            'event_id.require'=>"L' event_id doit être fournie",
            'equipe1_id.integer' => "L' equipe1_id doit être fournie",
            'equipe2_id.integer' => "L' equipe2_id doit être fournie",
        ];
    }
}
