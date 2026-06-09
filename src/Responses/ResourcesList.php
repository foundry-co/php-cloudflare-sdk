<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ResourcesList
{
	public function __construct(
		public string $accountId,
		public \FoundryCo\Cloudflare\Enums\ResourcesListCloudType $cloudType,
		public array $config,
		public string $deploymentProvider,
		public string $id,
		public bool $managed,
		public ResourcesListMonthlyCostEstimate $monthlyCostEstimate,
		public string $name,
		public string $nativeId,
		public array $observations,
		public array $providerIds,
		public array $providerNamesById,
		public string $region,
		public string $resourceGroup,
		public \FoundryCo\Cloudflare\Enums\ResourcesListResourceType $resourceType,
		public array $sections,
		public array $state,
		public array $tags,
		public string $updatedAt,
		public string $url,
		public ?array $managedBy = null,
	) {
	}
}
