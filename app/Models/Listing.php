<?php

namespace App\Models;

use App\Domain\Enums\ListingCondition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Date;

/**
 * Listing Model
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $category_id
 * @property string $title
 * @property float $price
 * @property ListingCondition $condition
 * @property string $description
 * @property string|null $ai_estimated_price
 * @property string|null $ai_evaluation_text
 * @property string|null $ai_recommended_skill_level
 * @property Carbon $end_date
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 *
 * @property-read User $user
 * @property-read Category|null $category
 */
class Listing extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'price',
        'condition',
        'description',
        'ai_estimated_price',
        'ai_evaluation_text',
        'ai_recommended_skill_level',
        'end_date',
    ];
   protected $casts = [
       'end_date' => 'datetime:Y-m-d H:i:s',
       'condition' => ListingCondition::class
   ];

   public function category() : BelongsTo
   {
       return $this->belongsTo(Category::class);
   }

   public function user() : BelongsTo
   {
       return $this->belongsTo(User::class);
   }

}
