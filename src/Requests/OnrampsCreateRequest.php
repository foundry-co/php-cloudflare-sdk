<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create On-ramp
 */
readonly class OnrampsCreateRequest
{
	public function __construct(
		public \FoundryCo\Cloudflare\Enums\OnrampsCreateRequestCloudType $cloudType,
		/** Enables BGP routing. When enabling this feature, set both install_routes_in_cloud and install_routes_in_magic_wan to false. */
		public bool $dynamicRouting,
		public bool $installRoutesInCloud,
		public bool $installRoutesInMagicWan,
		public string $name,
		public \FoundryCo\Cloudflare\Enums\OnrampsCreateRequestType $type,
		public ?string $adoptedHubId = null,
		public ?array $attachedHubs = null,
		public ?array $attachedVpcs = null,
		/** Sets the cloud-side ASN. If unset or zero, the cloud's default ASN takes effect. */
		public ?int $cloudAsn = null,
		public ?string $description = null,
		public ?string $hubProviderId = null,
		public ?bool $manageHubToHubAttachments = null,
		public ?bool $manageVpcToHubAttachments = null,
		public ?string $region = null,
		public ?string $vpc = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'cloud_type' => $this->cloudType->value,
		    'dynamic_routing' => $this->dynamicRouting,
		    'install_routes_in_cloud' => $this->installRoutesInCloud,
		    'install_routes_in_magic_wan' => $this->installRoutesInMagicWan,
		    'name' => $this->name,
		    'type' => $this->type->value,
		    'adopted_hub_id' => $this->adoptedHubId,
		    'attached_hubs' => $this->attachedHubs,
		    'attached_vpcs' => $this->attachedVpcs,
		    'cloud_asn' => $this->cloudAsn,
		    'description' => $this->description,
		    'hub_provider_id' => $this->hubProviderId,
		    'manage_hub_to_hub_attachments' => $this->manageHubToHubAttachments,
		    'manage_vpc_to_hub_attachments' => $this->manageVpcToHubAttachments,
		    'region' => $this->region,
		    'vpc' => $this->vpc,
		], fn ($v) => $v !== null);
	}
}
