<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Delete Event Notification Rules
 */
readonly class R2EventNotificationDeleteConfigRequest
{
	public function __construct(
		/** Array of rule ids to delete. */
		public ?array $ruleIds = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'ruleIds' => $this->ruleIds,
		], fn ($v) => $v !== null);
	}
}
