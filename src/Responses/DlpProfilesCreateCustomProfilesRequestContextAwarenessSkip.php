<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Content types to exclude from context analysis and return all matches.
 */
readonly class DlpProfilesCreateCustomProfilesRequestContextAwarenessSkip
{
	public function __construct(
		/** If the content type is a file, skip context analysis and return all matches. */
		public ?bool $files = null,
	) {
	}
}
