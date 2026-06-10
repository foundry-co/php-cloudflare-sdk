<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update IP profile
 */
readonly class UpdateIpProfileRequest
{
	public function __construct(
		/** An optional description of the Device IP profile. */
		public ?string $description = null,
		/** Whether the Device IP profile is enabled. */
		public ?bool $enabled = null,
		/** The wirefilter expression to match registrations. Available values: "identity.name", "identity.email", "identity.groups.id", "identity.groups.name", "identity.groups.email", "identity.saml_attributes". */
		public ?string $match = null,
		/** A user-friendly name for the Device IP profile. */
		public ?string $name = null,
		/** The precedence of the Device IP profile. Lower values indicate higher precedence. Device IP profile will be evaluated in ascending order of this field. */
		public ?int $precedence = null,
		/** The ID of the Subnet. */
		public ?string $subnetId = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'description' => $this->description,
		    'enabled' => $this->enabled,
		    'match' => $this->match,
		    'name' => $this->name,
		    'precedence' => $this->precedence,
		    'subnet_id' => $this->subnetId,
		], fn ($v) => $v !== null);
	}
}
