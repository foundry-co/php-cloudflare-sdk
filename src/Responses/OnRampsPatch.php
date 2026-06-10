<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class OnrampsPatch
{
	public function __construct(
		public ?\FoundryCo\Cloudflare\Enums\OnrampsPatchCloudType $cloudType = null,
		public ?bool $dynamicRouting = null,
		public ?string $id = null,
		public ?bool $installRoutesInCloud = null,
		public ?bool $installRoutesInMagicWan = null,
		public ?string $name = null,
		public ?\FoundryCo\Cloudflare\Enums\OnrampsPatchType $type = null,
		public ?string $updatedAt = null,
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
		public ?OnrampsPatchPlannedMonthlyCostEstimate $plannedMonthlyCostEstimate = null,
		public ?array $plannedResources = null,
		public ?bool $plannedResourcesUnavailable = null,
		public ?OnrampsPatchPostApplyMonthlyCostEstimate $postApplyMonthlyCostEstimate = null,
		public ?array $postApplyResources = null,
		public ?bool $postApplyResourcesUnavailable = null,
		public ?string $region = null,
		public ?OnrampsPatchStatus $status = null,
		public ?string $vpc = null,
		public ?array $vpcsById = null,
		/** The list of vpc IDs for which resource details failed to generate. */
		public ?array $vpcsByIdUnavailable = null,
	) {
	}
}
