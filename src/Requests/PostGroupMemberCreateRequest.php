<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a group member
 */
readonly class PostGroupMemberCreateRequest
{
	public function __construct(
		public ?string $accountId = null,
		public ?string $accountTag = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'accountId' => $this->accountId,
		    'accountTag' => $this->accountTag,
		], fn ($v) => $v !== null);
	}
}
