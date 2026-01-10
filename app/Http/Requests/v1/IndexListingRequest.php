<?php

namespace App\Http\Requests\v1;

use App\Domain\Enums\ListingCondition;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class IndexListingRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'price_from' => 'nullable|numeric|min:1|max:99999999.99|decimal:0,2',
            'price_to' => 'nullable|numeric|min:1|max:99999999.99|decimal:0,2|gt:price_from',
            'category_id' => 'nullable|numeric',
            'condition' => ['nullable', Rule::enum(ListingCondition::class)],
            'keywords' => 'nullable|array',
            'show_all' => 'nullable|bool',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
