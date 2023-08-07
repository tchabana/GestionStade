<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreEventRequest extends FormRequest
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
            'title'=>"require",
            'description'=>"require",
            'date_on'=>"require",
            'start_at'=>"require",
            'end_at'=>"require",
            'authors'=>"nullable",
            'info_suplementaire'=>"nullable",
        ];
    }
    public function messages(): array
    {
        return [
            'title.require'=>"Un title doit être fournie",
            'description.require'=>"Une description doit être fournie",
            'date_on.require'=>"Une date doit être fournie pour l'evenement",
            'start_at.require'=>"L' heure de debut doit être fournie",
            'end_at.require'=>"L' heure de fin doit être fournie",
        ];
    }
}
