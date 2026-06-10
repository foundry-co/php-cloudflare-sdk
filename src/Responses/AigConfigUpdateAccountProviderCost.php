<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AigConfigUpdateAccountProviderCost
{
	public function __construct(
		public ?string $accountProviderId = null,
		public ?\DateTimeImmutable $createdAt = null,
		public ?string $id = null,
		public ?string $model = null,
		public ?\DateTimeImmutable $modifiedAt = null,
		public ?string $changedBy = null,
		public ?float $costIn = null,
		public ?float $costOut = null,
		public ?string $costType = null,
		public ?bool $enable = null,
		public ?\FoundryCo\Cloudflare\Enums\AigConfigUpdateAccountProviderCostModelRule $modelRule = null,
		public ?string $tokenPricing = null,
		public ?int $weight = null,
	) {
	}
}
