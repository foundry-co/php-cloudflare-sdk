<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZoneLockdownUpdateAZoneLockdownRule
{
	public function __construct(
		/** A list of IP addresses or CIDR ranges that will be allowed to access the URLs specified in the Zone Lockdown rule. You can include any number of `ip` or `ip_range` configurations. */
		public ?array $configurations = null,
		/** The timestamp of when the rule was created. */
		public ?\DateTimeImmutable $createdOn = null,
		/** An informative summary of the rule. */
		public ?string $description = null,
		/** The unique identifier of the Zone Lockdown rule. */
		public ?string $id = null,
		/** The timestamp of when the rule was last modified. */
		public ?\DateTimeImmutable $modifiedOn = null,
		/** When true, indicates that the rule is currently paused. */
		public ?bool $paused = null,
		/** The URLs to include in the rule definition. You can use wildcards. Each entered URL will be escaped before use, which means you can only use simple wildcard patterns. */
		public ?array $urls = null,
	) {
	}
}
