<?php

namespace App\Http\Requests\v1;

use App\Models\Listing;
use Illuminate\Foundation\Http\FormRequest;

class DestroyListingRequest extends FormRequest
{
    public function rules(): array
    {
        return [
        ];
    }

    public function authorize(): bool
    {
        // Retreive binding from route
        $listing = $this->route('listing');
        return $listing->user_id === $this->user()->id;
    }
}
