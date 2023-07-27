<?php

namespace App\Http\Requests;

use App\Models\HarvestData;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;

class StoreHarvestDataRequest extends FormRequest
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
            'subdistrict_id' => ['required', 'integer', Rule::exists('subdistricts', 'id')],
            'year' => ['required', 'integer'],
            'land_area' => ['required', 'numeric'],
            'harvested_area' => ['required', 'numeric'],
            'productivity' => ['required', 'numeric'],
            'yield' => ['required', 'numeric'],
        ];
    }
}
