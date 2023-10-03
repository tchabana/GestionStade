<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateOtherRequest extends FormRequest
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
        // Récupérez la date et l'heure actuelles
        $now = now();
        $now = $now->format("M:d:Y");
        // Récupérez les valeurs de date et d'heure du formulaire
         $date_start = $this->input('date_start');
         $date_end = $this->input('date_end');
         $start_at = $this->input('start_at');
         $end_at = $this->input('end_at');
        return [
            //'image_path'=>'required',
            'title'=>'required',
            'description'=>'required',
            'date_start'=>['required','date','after_or_equal:'.$now],
            'date_end'=>['required','date','after:'.$date_start],
            // 'start_at'=>'required|timezone',
            // 'end_at'=>'required|timezone|after:'.$start_at,
            'start_at'=>'required',
            'end_at'=>'required',
            'nbr_participant'=>'required',
            'authors'=>'required',
            //'designation' => "required|min:4|max:255",
            //'event_id' => "required",
            //'info_suplementaire' => "required|json",
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
