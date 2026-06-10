<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class R2PutBucketLifecycleConfigurationRequestRulesItemStorageClassTransitionsItem
{
	public function __construct(
		public mixed $condition = null,
		public ?\FoundryCo\Cloudflare\Enums\R2PutBucketLifecycleConfigurationRequestRulesItemStorageClassTransitionsItemStorageClass $storageClass = null,
	) {
	}
}
