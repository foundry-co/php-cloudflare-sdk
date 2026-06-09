<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Define a snippet rule.
 */
readonly class UpdateZoneSnippetRulesRequestRulesItem
{
	public function __construct(
		/** Define the expression that determines which traffic matches the rule. */
		public string $expression,
		/** Specify the unique ID of the rule. */
		public string $id,
		/** Specify the timestamp of when the rule was last modified. */
		public \DateTimeImmutable $lastUpdated,
		/** Identify the snippet. */
		public string $snippetName,
		/** Provide an informative description of the rule. */
		public ?string $description = null,
		/** Indicate whether to execute the rule. */
		public ?bool $enabled = null,
	) {
	}
}
