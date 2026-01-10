<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
/**
 * @property-read string $name
 * @property-read int $id
 *
 * */
class Category extends Model
{
    //
    protected $fillable = ['name'];

    public function listings(): HasMany
    {
        return $this->hasMany(Listing::class);
    }
}
