<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AIGatewayAccountProviderCostsCost
{
	public function __construct(
		public string $accountProviderId,
		public \DateTimeImmutable $createdAt,
		public string $id,
		public string $model,
		public \DateTimeImmutable $modifiedAt,
		public ?string $changedBy = null,
		public ?float $costIn = null,
		public ?float $costOut = null,
		public ?string $costType = null,
		public ?bool $enable = null,
		public ?\FoundryCo\Cloudflare\Enums\AIGatewayAccountProviderCostsCostModelRule $modelRule = null,
		public ?string $tokenPricing = null,
		public ?int $weight = null,
	) {
	}
}
