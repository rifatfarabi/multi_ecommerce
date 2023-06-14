<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
            "name" => ["string", "required"],
            "banner" => ["required", "image", "mimes:png,jpg,jpeg,gif"],
            "icon" => ["required", "image", "mimes:png,jpg,jpeg,gif"],
            "meta_title" => ["string", "required"],
            "meta_description" => ["string", "required"]
        ];
    }
}
