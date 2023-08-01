<?php

namespace App\Http\Requests\product;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
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
            "unit" => ["string"],
            "minimum_purchase_qty" => ["string"],
            "maximum_purchase_qty" => ["string"],
            "thumbnail_image" => ["image", "mimes:png,jpg,jpeg,gif"],
            "unit_price" => ["string"],
            "discount" => ["string"],
            "name" => ["string", "required"],
            "quantity" => ["string"],
            "description" => ["string"]
        ];
    }
}
