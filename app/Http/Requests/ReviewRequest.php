<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    /*public function authorize(): bool
    {
        return false;
    }
    */
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'review.foods' => 'required|string|max:50',
            'review.rating' => 'required|digits_between:1,3',
            'review.comment' => 'required|string|max:1000',
            'image' => 'required|file|mimes:jpg,jpeg,png',
        ];
    }
}
