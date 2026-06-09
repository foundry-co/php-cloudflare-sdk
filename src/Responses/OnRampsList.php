<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class OnRampsList
{
	public function __construct(
		public \FoundryCo\Cloudflare\Enums\OnRampsListCloudType $cloudType,
		public bool $dynamicRouting,
		public string $id,
		public bool $installRoutesInCloud,
		public bool $installRoutesInMagicWan,
		public string $name,
		public \FoundryCo\Cloudflare\Enums\OnRampsListType $type,
		public string $updatedAt,
		public ?array $attachedHubs = null,
		public ?array $attachedVpcs = null,
		public ?int $cloudAsn = null,
		public ?string $description = null,
		public ?string $hub = null,
		public ?string $lastAppliedAt = null,
		public ?string $lastExportedAt = null,
		public ?string $lastPlannedAt = null,
		public ?bool $manageHubToHubAttachments = null,
		public ?bool $manageVpcToHubAttachments = null,
		public ?OnRampsListPlannedMonthlyCostEstimate $plannedMonthlyCostEstimate = null,
		public ?array $plannedResources = null,
		public ?bool $plannedResourcesUnavailable = null,
		public ?OnRampsListPostApplyMonthlyCostEstimate $postApplyMonthlyCostEstimate = null,
		public ?array $postApplyResources = null,
		public ?bool $postApplyResourcesUnavailable = null,
		public ?string $region = null,
		public ?OnRampsListStatus $status = null,
		public ?string $vpc = null,
		public ?array $vpcsById = null,
		/** The list of vpc IDs for which resource details failed to generate. */
		public ?array $vpcsByIdUnavailable = null,
	) {
	}
}
