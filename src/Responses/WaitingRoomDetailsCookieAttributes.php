<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configures cookie attributes for the waiting room cookie. This encrypted cookie stores a user's status in the waiting room, such as queue position.
 */
readonly class WaitingRoomDetailsCookieAttributes
{
	public function __construct(
		/** Configures the SameSite attribute on the waiting room cookie. Value `auto` will be translated to `lax` or `none` depending if **Always Use HTTPS** is enabled. Note that when using value `none`, the secure attribute cannot be set to `never`. */
		public ?\FoundryCo\Cloudflare\Enums\WaitingRoomDetailsCookieAttributesSamesite $samesite = null,
		/** Configures the Secure attribute on the waiting room cookie. Value `always` indicates that the Secure attribute will be set in the Set-Cookie header, `never` indicates that the Secure attribute will not be set, and `auto` will set the Secure attribute depending if **Always Use HTTPS** is enabled. */
		public ?\FoundryCo\Cloudflare\Enums\WaitingRoomDetailsCookieAttributesSecure $secure = null,
	) {
	}
}
