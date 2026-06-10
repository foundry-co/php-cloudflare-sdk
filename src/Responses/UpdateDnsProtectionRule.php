<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UpdateDnsProtectionRule
{
	public function __construct(
		/** The burst sensitivity. Must be one of 'low', 'medium', 'high'. */
		public ?string $burstSensitivity = null,
		/** The creation timestamp of the DNS Protection rule. */
		public ?\DateTimeImmutable $createdOn = null,
		/** The unique ID of the DNS Protection rule. */
		public ?string $id = null,
		/** The mode for DNS Protection. Must be one of 'enabled', 'disabled', 'monitoring'. */
		public ?string $mode = null,
		/** The last modification timestamp of the DNS Protection rule. */
		public ?\DateTimeImmutable $modifiedOn = null,
		/** The name of the DNS Protection rule. Value is relative to the 'scope' setting. For 'global' scope, name should be 'global'. For either the 'region' or 'datacenter' scope, name should be the actual name of the region or datacenter, e.g., 'wnam' or 'lax'. */
		public ?string $name = null,
		/** The profile sensitivity. Recommended setting is 'low'. Must be one of 'low', 'medium', 'high', or 'very_high'. */
		public ?string $profileSensitivity = null,
		/** The rate sensitivity. Must be one of 'low', 'medium', 'high'. */
		public ?string $rateSensitivity = null,
		/** The scope for the DNS Protection rule. Must be one of 'global', 'region', or 'datacenter'. */
		public ?string $scope = null,
	) {
	}
}
