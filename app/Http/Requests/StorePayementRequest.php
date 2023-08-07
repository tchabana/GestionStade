<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StorePayementRequest extends FormRequest
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
            'ticket_id' => "required",
            'info_suplementaire' => "required|json",
        ];
    }
    public function messages(): array
    {
        return [
            'ticket_id.require' => "L' event_id doit être fournie",
            'info_suplementaire.require' => "L' info_suplementaire doit être fournie",
            'info_suplementaire.json' => "L' info_suplementaire doit être au format JSON",
        ];
    }
}
