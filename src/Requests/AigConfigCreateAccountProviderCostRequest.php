<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a new Account Provider Cost
 */
readonly class AigConfigCreateAccountProviderCostRequest
{
	public function __construct(
		public string $accountProviderId,
		public string $model,
		public ?float $costIn = null,
		public ?float $costOut = null,
		public ?string $costType = null,
		public ?bool $enable = null,
		public ?\FoundryCo\Cloudflare\Enums\AigConfigCreateAccountProviderCostRequestModelRule $modelRule = null,
		public ?\FoundryCo\Cloudflare\Responses\AigConfigCreateAccountProviderCostRequestTokenPricing $tokenPricing = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'account_provider_id' => $this->accountProviderId,
		    'model' => $this->model,
		    'cost_in' => $this->costIn,
		    'cost_out' => $this->costOut,
		    'cost_type' => $this->costType,
		    'enable' => $this->enable,
		    'model_rule' => $this->modelRule?->value,
		    'token_pricing' => $this->tokenPricing?->toArray(),
		], fn ($v) => $v !== null);
	}
}
