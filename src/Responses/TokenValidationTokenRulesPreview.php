<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class TokenValidationTokenRulesPreview
{
	public function __construct(
		/** All hostnames on zone used by operations */
		public ?array $availableHosts = null,
		/** Number of operations with `excluded` `state` */
		public ?int $excluded = null,
		/** Number of operations with `ignored` `state` */
		public ?int $ignored = null,
		/** Number of operations with `included` `state` */
		public ?int $included = null,
		public ?array $operations = null,
		/** Hostnames of `included` operations */
		public ?array $selectedHosts = null,
		/** Number of operations on zone */
		public ?int $total = null,
	) {
	}
}
