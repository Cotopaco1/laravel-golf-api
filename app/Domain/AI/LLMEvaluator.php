<?php

namespace App\Domain\AI;

use App\Domain\Entities\Listing;
use App\Domain\ValueObjects\ListingEnrichment;

interface LLMEvaluator
{
    public function evaluateListing(Listing $listing): ListingEnrichment;
}
