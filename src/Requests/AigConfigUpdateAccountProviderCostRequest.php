<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a Account Provider Cost
 */
readonly class AigConfigUpdateAccountProviderCostRequest
{
	public function __construct(
		public ?float $costIn = null,
		public ?float $costOut = null,
		public ?string $costType = null,
		public ?bool $enable = null,
		public ?string $model = null,
		public ?\FoundryCo\Cloudflare\Enums\AigConfigUpdateAccountProviderCostRequestModelRule $modelRule = null,
		public ?\FoundryCo\Cloudflare\Responses\AigConfigUpdateAccountProviderCostRequestTokenPricing $tokenPricing = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'cost_in' => $this->costIn,
		    'cost_out' => $this->costOut,
		    'cost_type' => $this->costType,
		    'enable' => $this->enable,
		    'model' => $this->model,
		    'model_rule' => $this->modelRule?->value,
		    'token_pricing' => $this->tokenPricing?->toArray(),
		], fn ($v) => $v !== null);
	}
}
