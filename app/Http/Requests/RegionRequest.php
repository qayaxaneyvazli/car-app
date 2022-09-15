<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegionRequest extends FormRequest
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
            'name' => ['required','max:255'],
            'travel_date' => ['required','date'],
            'travel_period' => ['required','max:255'],

         ];
    }
    public function messages()
    {
        return [
            'name.required' => 'The name is required.',
            'travel_date.required' => 'Travel date is required.',
            'travel_period.required' => 'Travel period is required.',
 
        ];
    }

}
