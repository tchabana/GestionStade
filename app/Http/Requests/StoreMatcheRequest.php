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
            'image_path'=>'required',
            'title'=>'required',
            'description'=>'required',
            'date_start'=>'required',
            'date_end'=>'required',
            'start_at'=>'required',
            'end_at'=>'required',
            'nbr_participant'=>'required',
            'authors'=>'required',
            'equipe1_name'=>'required',
            'equipe2_name'=>'required',
            //'event_id'=>'required',
        ];
    }
    public function messages(): array
    {
        return [
            'equipe1_name.require'=>"L' event_id doit être fournie",
            'equipe2_name.integer' => "L' equipe1_id doit être fournie",
            //'equipe2_id.integer' => "L' equipe2_id doit être fournie",
        ];
    }
}
