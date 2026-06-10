<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create IP profile
 */
readonly class CreateIpProfileRequest
{
	public function __construct(
		/** The wirefilter expression to match registrations. Available values: "identity.name", "identity.email", "identity.groups.id", "identity.groups.name", "identity.groups.email", "identity.saml_attributes". */
		public string $match,
		/** A user-friendly name for the Device IP profile. */
		public string $name,
		/** The precedence of the Device IP profile. Lower values indicate higher precedence. Device IP profile will be evaluated in ascending order of this field. */
		public int $precedence,
		/** The ID of the Subnet. */
		public string $subnetId,
		/** An optional description of the Device IP profile. */
		public ?string $description = null,
		/** Whether the Device IP profile will be applied to matching devices. */
		public ?bool $enabled = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'match' => $this->match,
		    'name' => $this->name,
		    'precedence' => $this->precedence,
		    'subnet_id' => $this->subnetId,
		    'description' => $this->description,
		    'enabled' => $this->enabled,
		], fn ($v) => $v !== null);
	}
}
