<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Scan the context of predefined entries to only return matches surrounded by keywords.
 */
readonly class DlpProfilesCreatePredefinedProfileRequestContextAwareness
{
	public function __construct(
		/** If true, scan the context of predefined entries to only return matches surrounded by keywords. */
		public bool $enabled,
		/** Content types to exclude from context analysis and return all matches. */
		public DlpProfilesCreatePredefinedProfileRequestContextAwarenessSkip $skip,
	) {
	}
}
