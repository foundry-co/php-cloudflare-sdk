<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccountLoadBalancerMonitorGroupsGroupsMembersItem
{
	public function __construct(
		/** Whether this monitor is enabled in the group */
		public bool $enabled,
		public array $monitorId,
		/** Whether this monitor is used for monitoring only (does not affect pool health) */
		public bool $monitoringOnly,
		/** Whether this monitor must be healthy for the pool to be considered healthy */
		public bool $mustBeHealthy,
		/** The timestamp of when the monitor was added to the group */
		public ?\DateTimeImmutable $createdAt = null,
		/** The timestamp of when the monitor group member was last updated */
		public ?\DateTimeImmutable $updatedAt = null,
	) {
	}
}
