<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccountLoadBalancerMonitorGroupsPatchMonitorGroup
{
	public function __construct(
		/** A short description of the monitor group */
		public ?string $description = null,
		public mixed $id = null,
		/** List of monitors in this group */
		public ?array $members = null,
		/** The timestamp of when the monitor group was created */
		public ?\DateTimeImmutable $createdOn = null,
		/** The timestamp of when the monitor group was last updated */
		public ?\DateTimeImmutable $modifiedOn = null,
	) {
	}
}
