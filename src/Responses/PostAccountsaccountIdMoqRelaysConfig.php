<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * origin_fallback and lingering_subscribe are mutually exclusive.
 */
readonly class PostAccountsaccountIdMoqRelaysConfig
{
	public function __construct(
		public ?PostAccountsaccountIdMoqRelaysConfigLingeringSubscribe $lingeringSubscribe = null,
		public ?PostAccountsaccountIdMoqRelaysConfigOriginFallback $originFallback = null,
	) {
	}
}
