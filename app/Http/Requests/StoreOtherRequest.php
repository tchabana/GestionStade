<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreOtherRequest extends FormRequest
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
            'designation' => "required|min:4|max:255",
            'event_id' => "required",
            'info_suplementaire' => "required|json",
        ];
    }
    public function messages(): array
    {
        return [
            'designation.require' => "La designation doit être fournie",
            'event_id.require' => "L' event_id doit être fournie",
            'info_suplementaire.require' => "L' info_suplementaire doit être fournie",
        ];
    }
}
