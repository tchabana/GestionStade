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
        // Récupérez la date et l'heure actuelles
        $now = now();
        $now = $now->format("M:d:Y");
        // Récupérez les valeurs de date et d'heure du formulaire
        $date_start = $this->input('date_start');
        $date_end = $this->input('date_end');
        $start_at = $this->input('start_at');
        $end_at = $this->input('end_at');
        // Combinez la date et l'heure en une seule valeur DateTime
        // $date_start_start_at = \Carbon\Carbon::parse("$date_start $start_at");
        // $date_end_end_at = \Carbon\Carbon::parse("$date_end $end_at");
        return [
            'image_path'=>'required',
            'title'=>'required',
            'description'=>'required',
            'date_start'=>['required','date','after_or_equal:'.$now],
            'date_end'=>['required','date','after_or_equal:'.$date_start],
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
