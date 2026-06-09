<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkflowsVersions
{
	public function __construct(
		public string $className,
		public \DateTimeImmutable $createdOn,
		public bool $hasDag,
		public string $id,
		/** The programming language of the workflow implementation */
		public \FoundryCo\Cloudflare\Enums\WorkflowsVersionsLanguage $language,
		public \DateTimeImmutable $modifiedOn,
		public string $workflowId,
		public ?WorkflowsVersionsLimits $limits = null,
	) {
	}
}
