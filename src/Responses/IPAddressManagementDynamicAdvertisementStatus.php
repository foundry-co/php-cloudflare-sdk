<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class IPAddressManagementDynamicAdvertisementStatus
{
	public function __construct(
		/**
		 * Advertisement status of the prefix. If `true`, the BGP route for the prefix is advertised to the Internet. If
		 * `false`, the BGP route is withdrawn.
		 */
		public ?bool $advertised = null,
		/** Last time the advertisement status was changed. This field is only not 'null' if on demand is enabled. */
		public ?\DateTimeImmutable $advertisedModifiedAt = null,
	) {
	}
}
