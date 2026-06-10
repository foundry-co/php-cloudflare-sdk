<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ProvidersList
{
	public function __construct(
		public ?\FoundryCo\Cloudflare\Enums\ProvidersListCloudType $cloudType = null,
		public ?string $friendlyName = null,
		public ?string $id = null,
		public ?string $lastUpdated = null,
		public ?\FoundryCo\Cloudflare\Enums\ProvidersListLifecycleState $lifecycleState = null,
		public ?\FoundryCo\Cloudflare\Enums\ProvidersListState $state = null,
		public ?\FoundryCo\Cloudflare\Enums\ProvidersListStateV2 $stateV2 = null,
		public ?string $awsArn = null,
		public ?string $azureSubscriptionId = null,
		public ?string $azureTenantId = null,
		public ?string $description = null,
		public ?string $gcpProjectId = null,
		public ?string $gcpServiceAccountEmail = null,
		public ?ProvidersListStatus $status = null,
	) {
	}
}
