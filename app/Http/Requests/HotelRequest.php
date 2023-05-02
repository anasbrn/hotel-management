<?php

namespace App\Http\Requests;

use App\Models\Hotel;
use Illuminate\Foundation\Http\FormRequest;

class HotelRequest extends FormRequest
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
            Hotel::NAME_COLUMN => ['required'],
            Hotel::DESCRIPTION_COLUMN => ['required'],
            Hotel::ADDRESS_COLUMN => ['required'],
            Hotel::NUM_ROOMS_COLUMN => ['required'],
            Hotel::CITY_ID_COLUMN => ['required'],
        ];
    }
}
