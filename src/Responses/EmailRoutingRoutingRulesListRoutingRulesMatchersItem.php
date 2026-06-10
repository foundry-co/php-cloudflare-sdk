<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Matching pattern to forward your actions.
 */
readonly class EmailRoutingRoutingRulesListRoutingRulesMatchersItem
{
	public function __construct(
		/** Type of matcher. */
		public ?\FoundryCo\Cloudflare\Enums\EmailRoutingRoutingRulesListRoutingRulesMatchersItemType $type = null,
		/** Field for type matcher. */
		public ?\FoundryCo\Cloudflare\Enums\EmailRoutingRoutingRulesListRoutingRulesMatchersItemField $field = null,
		/** Value for matcher. */
		public ?string $value = null,
	) {
	}
}
