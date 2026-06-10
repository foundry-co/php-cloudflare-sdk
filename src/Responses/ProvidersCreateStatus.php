<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ProvidersCreateStatus
{
	public function __construct(
		public ?ProvidersCreateStatusDiscoveryProgress $discoveryProgress = null,
		public ?ProvidersCreateStatusDiscoveryProgressV2 $discoveryProgressV2 = null,
		public ?\FoundryCo\Cloudflare\Enums\ProvidersCreateStatusLastDiscoveryStatus $lastDiscoveryStatus = null,
		public ?\FoundryCo\Cloudflare\Enums\ProvidersCreateStatusLastDiscoveryStatusV2 $lastDiscoveryStatusV2 = null,
		public ?array $regions = null,
		public ?string $credentialsGoodSince = null,
		public ?string $credentialsMissingSince = null,
		public ?string $credentialsRejectedSince = null,
		public ?string $discoveryMessage = null,
		public ?string $discoveryMessageV2 = null,
		public ?array $inUseBy = null,
		public ?string $lastDiscoveryCompletedAt = null,
		public ?string $lastDiscoveryCompletedAtV2 = null,
		public ?string $lastDiscoveryStartedAt = null,
		public ?string $lastDiscoveryStartedAtV2 = null,
		public ?string $lastUpdated = null,
	) {
	}
}
