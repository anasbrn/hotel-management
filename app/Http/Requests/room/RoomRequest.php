<?php

namespace App\Http\Requests\Room;

use App\Models\Room;
use Illuminate\Foundation\Http\FormRequest;

class RoomRequest extends FormRequest
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
            Room::ROOM_NUMBER_COLUMN => ['required'],
            Room::HOTEL_ID_COLUMN => ['required'],
            Room::ROOM_TYPE_COLUMN => ['required'],
            Room::PRICE_PER_NIGHT_COLUMN => ['required'],
        ];
    }
}
