<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class IpAddressManagementPrefixesFetchBgpPrefixBgpSignalOpts
{
	public function __construct(
		/** Whether control of advertisement of the prefix to the Internet is enabled to be performed via BGP signal */
		public ?bool $enabled = null,
		/** Last time BGP signaling control was toggled. This field is null if BGP signaling has never been enabled. */
		public ?\DateTimeImmutable $modifiedAt = null,
	) {
	}
}
