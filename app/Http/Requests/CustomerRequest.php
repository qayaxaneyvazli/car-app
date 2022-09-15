<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'surname' => ['required','max:255'],
            'date_of_birth' => ['required'],
            'sex' => ['required','max:255'],
            'phone' => ['required'],
            'traveled_regions' => ['required'],
            'cars' => ['required'],
         ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The name is required.',
            'surname.required' => 'Surname is required.',
            'date_of_birth.required' => 'Date of birth is required.',
            'sex.required' => 'Sex is required.',
            'phone.required' => 'Phone is required.',
            'traveled_regions.required' => 'Traveled Regions is required.',
            'cars.required' => 'Car is required.',
        ];
    }
}
