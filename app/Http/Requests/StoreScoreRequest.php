<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreScoreRequest extends FormRequest
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
            'id'=>'required',
            'equipe1_goal'=>'integer|min:0',
            'equipe2_goal'=>'integer|min:0'
        ];
    }
    public function messages(): array
    {
        return [
            'id.require'=>"L' id doit être fournie",
            'equipe1_goal.integer' => 'Le nombre de buts doit être un chiffre',
            'equipe2_goal.integer' => 'Le nombre de buts doit être un chiffre',
            'equipe1_goal.min' => "Le score ne peut pas être inférieur à 0",
            'equipe2_goal.min' => "Le score ne peut pas être inférieur à 0",
        ];
    }
}
