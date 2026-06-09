<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Patch On-ramp
 */
readonly class OnrampsPatchRequest
{
	public function __construct(
		public ?array $attachedHubs = null,
		public ?array $attachedVpcs = null,
		public ?string $description = null,
		public ?bool $installRoutesInCloud = null,
		public ?bool $installRoutesInMagicWan = null,
		public ?bool $manageHubToHubAttachments = null,
		public ?bool $manageVpcToHubAttachments = null,
		public ?string $name = null,
		public ?string $vpc = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'attached_hubs' => $this->attachedHubs,
		    'attached_vpcs' => $this->attachedVpcs,
		    'description' => $this->description,
		    'install_routes_in_cloud' => $this->installRoutesInCloud,
		    'install_routes_in_magic_wan' => $this->installRoutesInMagicWan,
		    'manage_hub_to_hub_attachments' => $this->manageHubToHubAttachments,
		    'manage_vpc_to_hub_attachments' => $this->manageVpcToHubAttachments,
		    'name' => $this->name,
		    'vpc' => $this->vpc,
		], fn ($v) => $v !== null);
	}
}
