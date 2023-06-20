<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use function Illuminate\Filesystem\name;

class StoreCategoryRequest extends FormRequest
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
            "banner" => ["image", "mimes:png,jpg,jpeg,gif"],
            "icon" => ["image", "mimes:png,jpg,jpeg,gif"],
            "meta_title" => ["string"],
            "meta_description" => ["string"]
        ];
    }
}
