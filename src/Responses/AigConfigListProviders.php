<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AigConfigListProviders
{
	public function __construct(
		public ?string $alias = null,
		public ?bool $defaultConfig = null,
		/** gateway id */
		public ?string $gatewayId = null,
		public ?string $id = null,
		public ?\DateTimeImmutable $modifiedAt = null,
		public ?string $providerSlug = null,
		public ?string $secretId = null,
		public ?string $secretPreview = null,
		public ?float $rateLimit = null,
		public ?float $rateLimitPeriod = null,
	) {
	}
}
