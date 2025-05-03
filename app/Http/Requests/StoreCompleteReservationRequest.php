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
            'user_id' => 'required|integer|exists:users,id',
            'room_id' => 'required|exists:rooms,id',
            'check_in' => 'required|date',
            'check_out' => 'required|date',
            'capacity' => 'required|integer',
            'adult' => 'required|integer|min:0',
            'children' => 'nullable|integer|min:0',
            'room-clean' => 'nullable',
            'spa' => 'nullable',
            'massage' => 'nullable',
            'total_price' => 'required|numeric',
        ];
    }
}
