<?php

namespace App\Infraestructure\Queue\Jobs;

use App\Application\UsesCases\EnrichListingUseCase;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class EnrichListingJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $tries = 3;

    public int $backoff= 10;

    public function __construct(public int|string $id)
    {
    }

    public function handle(EnrichListingUseCase $useCase): void
    {
        $useCase->execute($this->id);
    }
}
