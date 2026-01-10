<?php

namespace App\Domain\ValueObjects;
/**
 * Contains the enrichment fields given by IA from Listing
 * */
class ListingEnrichment
{
    public function __construct(
        public readonly string $estimated_price,
        public readonly string $evaluation_text,
        public readonly string $recommended_skill_level,
    )
    {
    }
}
