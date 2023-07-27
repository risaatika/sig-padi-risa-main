<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHarvestDataRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'year' => ['required', 'integer'],
            'land_area' => ['required', 'numeric'],
            'harvested_area' => ['required', 'numeric'],
            'productivity' => ['required', 'numeric'],
            'yield' => ['required', 'numeric'],
        ];
    }
}
