<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CloudIntegrationsPatchStatus
{
	public function __construct(
		public CloudIntegrationsPatchStatusDiscoveryProgress $discoveryProgress,
		public CloudIntegrationsPatchStatusDiscoveryProgressV2 $discoveryProgressV2,
		public \FoundryCo\Cloudflare\Enums\CloudIntegrationsPatchStatusLastDiscoveryStatus $lastDiscoveryStatus,
		public \FoundryCo\Cloudflare\Enums\CloudIntegrationsPatchStatusLastDiscoveryStatusV2 $lastDiscoveryStatusV2,
		public array $regions,
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
