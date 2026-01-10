<?php

namespace App\Http\Requests\v1;

use App\Domain\Enums\ListingCondition;
use App\Http\Rules\AlphaWithSpaces;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreListingRequest extends FormRequest
{
    public function rules(): array
    {

        return [
            'title' => ['required', new AlphaWithSpaces()],  // alpha only accepts letters without space.
            'price' => 'required|numeric|min:1|max:99999999.99|decimal:0,2',
            'condition' => ['required', Rule::enum(ListingCondition::class)],
            'description' => 'nullable|string|max:500',
            'end_date'  => 'required|date_format:Y-m-d H:i:s|after:now',
            'category_id' => 'required|exists:categories,id'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
