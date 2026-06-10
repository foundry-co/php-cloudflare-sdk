<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ProvidersPatchStatus
{
	public function __construct(
		public ?ProvidersPatchStatusDiscoveryProgress $discoveryProgress = null,
		public ?ProvidersPatchStatusDiscoveryProgressV2 $discoveryProgressV2 = null,
		public ?\FoundryCo\Cloudflare\Enums\ProvidersPatchStatusLastDiscoveryStatus $lastDiscoveryStatus = null,
		public ?\FoundryCo\Cloudflare\Enums\ProvidersPatchStatusLastDiscoveryStatusV2 $lastDiscoveryStatusV2 = null,
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
