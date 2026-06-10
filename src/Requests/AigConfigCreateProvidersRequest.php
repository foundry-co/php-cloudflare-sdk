<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a new Provider Configs
 */
readonly class AigConfigCreateProvidersRequest
{
	public function __construct(
		public string $alias,
		public bool $defaultConfig,
		public string $providerSlug,
		public ?float $rateLimit = null,
		public ?float $rateLimitPeriod = null,
		public ?string $secret = null,
		public ?string $secretId = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'alias' => $this->alias,
		    'default_config' => $this->defaultConfig,
		    'provider_slug' => $this->providerSlug,
		    'rate_limit' => $this->rateLimit,
		    'rate_limit_period' => $this->rateLimitPeriod,
		    'secret' => $this->secret,
		    'secret_id' => $this->secretId,
		], fn ($v) => $v !== null);
	}
}
