<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'destinationName' => 'nullable|string|max:255|min:3',
            'minTripStartDate' => 'nullable|date_format:"Y-m-d"',
            'maxTripStartDate' => 'nullable|date_format:"Y-m-d"',
            'lengthOfStay' => 'nullable|integer',
            'minStarRating' => 'nullable|Numeric|max:5|min:1',
            'maxStarRating' => 'nullable|Numeric|max:5|min:1',
            'minTotalRate' => 'nullable|Numeric',
            'maxTotalRate' => 'nullable|Numeric',
            'minGuestRating' => 'nullable|Numeric',
            'maxGuestRating' => 'nullable|Numeric'
        ];
    }
}
