<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class R2PutBucketLifecycleConfigurationRequestRulesItem
{
	public function __construct(
		/** Conditions that apply to all transitions of this rule. */
		public R2PutBucketLifecycleConfigurationRequestRulesItemConditions $conditions,
		/** Whether or not this rule is in effect. */
		public bool $enabled,
		/** Unique identifier for this rule. */
		public string $id,
		/** Transition to abort ongoing multipart uploads. */
		public ?R2PutBucketLifecycleConfigurationRequestRulesItemAbortMultipartUploadsTransition $abortMultipartUploadsTransition = null,
		/** Transition to delete objects. */
		public ?R2PutBucketLifecycleConfigurationRequestRulesItemDeleteObjectsTransition $deleteObjectsTransition = null,
		/** Transitions to change the storage class of objects. */
		public ?array $storageClassTransitions = null,
	) {
	}
}
