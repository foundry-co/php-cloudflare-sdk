<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class R2PutBucketLockConfigurationRequestRulesItem
{
	public function __construct(
		public mixed $condition,
		/** Whether or not this rule is in effect. */
		public bool $enabled,
		/** Unique identifier for this rule. */
		public string $id,
		/** Rule will only apply to objects/uploads in the bucket that start with the given prefix, an empty prefix can be provided to scope rule to all objects/uploads. */
		public ?string $prefix = null,
	) {
	}
}
