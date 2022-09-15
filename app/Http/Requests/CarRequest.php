<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'model' => ['required','max:255'],
            'release_date' => ['required','date'],
            'color' => ['required','max:255'],
            'registration_number' => ['required'],

         ];
    }

    public function messages()
    {
        return [
            'model.required' => 'The model is required.',
            'release_date.required' => 'Release date is required.',
            'color.required' => 'Color is required.',
            'release_date.date' => 'Release date field should be date.',
            'registration_number.required' => 'Registration number should be numeric.',
 
        ];
    }

}
