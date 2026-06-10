<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ResourcesCatalogRead
{
	public function __construct(
		public ?string $accountId = null,
		public ?\FoundryCo\Cloudflare\Enums\ResourcesCatalogReadCloudType $cloudType = null,
		public ?array $config = null,
		public ?string $deploymentProvider = null,
		public ?string $id = null,
		public ?bool $managed = null,
		public ?ResourcesCatalogReadMonthlyCostEstimate $monthlyCostEstimate = null,
		public ?string $name = null,
		public ?string $nativeId = null,
		public ?array $observations = null,
		public ?array $providerIds = null,
		public ?array $providerNamesById = null,
		public ?string $region = null,
		public ?string $resourceGroup = null,
		public ?\FoundryCo\Cloudflare\Enums\ResourcesCatalogReadResourceType $resourceType = null,
		public ?array $sections = null,
		public ?array $state = null,
		public ?array $tags = null,
		public ?string $updatedAt = null,
		public ?string $url = null,
		public ?array $managedBy = null,
	) {
	}
}
