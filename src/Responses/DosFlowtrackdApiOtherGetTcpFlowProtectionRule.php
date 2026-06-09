<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DosFlowtrackdApiOtherGetTcpFlowProtectionRule
{
	public function __construct(
		/** The burst sensitivity. Must be one of 'low', 'medium', 'high'. */
		public string $burstSensitivity,
		/** The creation timestamp of the TCP Flow Protection rule. */
		public \DateTimeImmutable $createdOn,
		/** The unique ID of the TCP Flow Protection rule. */
		public string $id,
		/** The mode for TCP Flow Protection. Must be one of 'enabled', 'disabled', 'monitoring'. */
		public string $mode,
		/** The last modification timestamp of the TCP Flow Protection rule. */
		public \DateTimeImmutable $modifiedOn,
		/** The name of the TCP Flow Protection rule. Value is relative to the 'scope' setting. For 'global' scope, name should be 'global'. For either the 'region' or 'datacenter' scope, name should be the actual name of the region or datacenter, e.g., 'wnam' or 'lax'. */
		public string $name,
		/** The rate sensitivity. Must be one of 'low', 'medium', 'high'. */
		public string $rateSensitivity,
		/** The scope for the TCP Flow Protection rule. Must be one of 'global', 'region', or 'datacenter'. */
		public string $scope,
	) {
	}
}
