<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateActualityRequest extends FormRequest
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
            'title' => "required|max:255|min:3",
            'message' => "required",
            'image_path' => "image|mimes:png,jpg,jpeg,gif,svg|max:2028",
            // 'user_id' => "required",
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => "Le titre doit être fournie",
            'message.required' => "Le message doit être fournie",
            // 'user_id.required' => "L' id doit être fournie",
        ];
    }
}
