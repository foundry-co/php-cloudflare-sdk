<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Account settings
 */
readonly class UsersAccountMembershipsDetailsAccountSettings
{
	public function __construct(
		/** Sets an abuse contact email to notify for abuse reports. */
		public ?string $abuseContactEmail = null,
		/**
		 * Indicates whether membership in this account requires that
		 * Two-Factor Authentication is enabled
		 */
		public ?bool $enforceTwofactor = null,
	) {
	}
}
