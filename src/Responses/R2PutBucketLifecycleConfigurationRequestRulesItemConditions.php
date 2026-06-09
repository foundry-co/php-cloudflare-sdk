<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Conditions that apply to all transitions of this rule.
 */
readonly class R2PutBucketLifecycleConfigurationRequestRulesItemConditions
{
	public function __construct(
		/** Transitions will only apply to objects/uploads in the bucket that start with the given prefix, an empty prefix can be provided to scope rule to all objects/uploads. */
		public string $prefix,
	) {
	}
}
