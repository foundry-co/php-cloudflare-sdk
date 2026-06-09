<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AIGatewayProviderConfigsProviders
{
	public function __construct(
		public string $alias,
		public bool $defaultConfig,
		/** gateway id */
		public string $gatewayId,
		public string $id,
		public \DateTimeImmutable $modifiedAt,
		public string $providerSlug,
		public string $secretId,
		public string $secretPreview,
		public ?float $rateLimit = null,
		public ?float $rateLimitPeriod = null,
	) {
	}
}
