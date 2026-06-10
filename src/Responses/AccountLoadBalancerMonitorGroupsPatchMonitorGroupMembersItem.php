<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccountLoadBalancerMonitorGroupsPatchMonitorGroupMembersItem
{
	public function __construct(
		/** Whether this monitor is enabled in the group */
		public ?bool $enabled = null,
		/** The ID of the Monitor to use for checking the health of origins within this pool. */
		public ?string $monitorId = null,
		/** Whether this monitor is used for monitoring only (does not affect pool health) */
		public ?bool $monitoringOnly = null,
		/** Whether this monitor must be healthy for the pool to be considered healthy */
		public ?bool $mustBeHealthy = null,
		/** The timestamp of when the monitor was added to the group */
		public ?\DateTimeImmutable $createdAt = null,
		/** The timestamp of when the monitor group member was last updated */
		public ?\DateTimeImmutable $updatedAt = null,
	) {
	}
}
