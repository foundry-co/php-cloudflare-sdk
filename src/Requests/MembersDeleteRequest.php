<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Delete organization member
 */
readonly class MembersDeleteRequest
{
	public function __construct(
		/** Organization Member ID */
		public string $memberId,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'member_id' => $this->memberId,
		], fn ($v) => $v !== null);
	}
}
