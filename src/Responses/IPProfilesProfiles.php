<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class IPProfilesProfiles
{
	public function __construct(
		/** The RFC3339Nano timestamp when the Device IP profile was created. */
		public string $createdAt,
		/** An optional description of the Device IP profile. */
		public string $description,
		/** Whether the Device IP profile is enabled. */
		public bool $enabled,
		/** The ID of the Device IP profile. */
		public string $id,
		/** The wirefilter expression to match registrations. Available values: "identity.name", "identity.email", "identity.groups.id", "identity.groups.name", "identity.groups.email", "identity.saml_attributes". */
		public string $match,
		/** A user-friendly name for the Device IP profile. */
		public string $name,
		/** The precedence of the Device IP profile. Lower values indicate higher precedence. Device IP profile will be evaluated in ascending order of this field. */
		public int $precedence,
		/** The ID of the Subnet. */
		public string $subnetId,
		/** The RFC3339Nano timestamp when the Device IP profile was last updated. */
		public string $updatedAt,
	) {
	}
}
