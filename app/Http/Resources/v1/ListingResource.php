<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ListingResource extends JsonResource
{
    public function toArray(Request $request): array
    {

        return [
            'id' => $this->id,
//            'user_id' => $this->userId,
//            'category_id' => $this->categoryId,
            'title' => $this->title,
            'price' => $this->price,
            'condition' => $this->condition->value,
            'description' => $this->description,
            'end_date' => $this?->endDate->format('Y-m-d H:i:s'),
            'ai_estimated_price' => $this->ai_estimated_price,
            'ai_evaluation_text' => $this->ai_evaluation_text,
            'ai_recommended_skill_level' => $this->ai_recommended_skill_level,
            'created_at' => $this->createdAt->format('Y-m-d H:i:s'),
            'user' => [
                'first_name' => $this->user->firstName,
                'last_name' => $this->user->lastName,
            ],
            'category' => $this->when($this->category, function(){
                return ['name' => $this->category->name];
            })
        ];
    }
}
