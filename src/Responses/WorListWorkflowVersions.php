<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorListWorkflowVersions
{
	public function __construct(
		public ?string $className = null,
		public ?\DateTimeImmutable $createdOn = null,
		public ?bool $hasDag = null,
		public ?string $id = null,
		/** The programming language of the workflow implementation */
		public ?\FoundryCo\Cloudflare\Enums\WorListWorkflowVersionsLanguage $language = null,
		public ?\DateTimeImmutable $modifiedOn = null,
		public ?string $workflowId = null,
		public ?WorListWorkflowVersionsLimits $limits = null,
	) {
	}
}
