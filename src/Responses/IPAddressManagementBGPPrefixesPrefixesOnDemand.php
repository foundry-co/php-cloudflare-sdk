<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class IPAddressManagementBGPPrefixesPrefixesOnDemand
{
	public function __construct(
		/** Prefix advertisement status to the Internet. This field is only not 'null' if on demand is enabled. */
		public ?bool $advertised = null,
		/** Last time the advertisement status was changed. This field is only not 'null' if on demand is enabled. */
		public ?\DateTimeImmutable $advertisedModifiedAt = null,
		/** Whether advertisement of the prefix to the Internet may be dynamically enabled or disabled. */
		public ?bool $onDemandEnabled = null,
		/** Whether the advertisement status of the prefix is locked, meaning it cannot be changed. */
		public ?bool $onDemandLocked = null,
	) {
	}
}
