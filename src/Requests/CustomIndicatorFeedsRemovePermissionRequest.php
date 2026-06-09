<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Revoke permission to indicator feed
 */
readonly class CustomIndicatorFeedsRemovePermissionRequest
{
	public function __construct(
		/** The Cloudflare account tag of the account to change permissions on */
		public ?string $accountTag = null,
		/** The ID of the feed to add/remove permissions on */
		public ?int $feedId = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'account_tag' => $this->accountTag,
		    'feed_id' => $this->feedId,
		], fn ($v) => $v !== null);
	}
}
