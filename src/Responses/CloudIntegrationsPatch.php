<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CloudIntegrationsPatch
{
	public function __construct(
		public \FoundryCo\Cloudflare\Enums\CloudIntegrationsPatchCloudType $cloudType,
		public string $friendlyName,
		public string $id,
		public string $lastUpdated,
		public \FoundryCo\Cloudflare\Enums\CloudIntegrationsPatchLifecycleState $lifecycleState,
		public \FoundryCo\Cloudflare\Enums\CloudIntegrationsPatchState $state,
		public \FoundryCo\Cloudflare\Enums\CloudIntegrationsPatchStateV2 $stateV2,
		public ?string $awsArn = null,
		public ?string $azureSubscriptionId = null,
		public ?string $azureTenantId = null,
		public ?string $description = null,
		public ?string $gcpProjectId = null,
		public ?string $gcpServiceAccountEmail = null,
		public ?CloudIntegrationsPatchStatus $status = null,
	) {
	}
}
