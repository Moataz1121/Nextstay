<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompleteReservationRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => 'nullable|integer|exists:users,id',
            'room_id' => 'nullable|exists:rooms,id',
            'check_in' => 'nullable|date',
            'check_out' => 'nullable|date',
            'capacity' => 'nullable|integer',
            'adult' => 'nullable|integer|min:0',
            'children' => 'nullable|integer|min:0',
            'room-clean' => 'nullable',
            'spa' => 'nullable',
            'massage' => 'nullable',
            'total_price' => 'nullable|numeric',
        ];
    }
}
