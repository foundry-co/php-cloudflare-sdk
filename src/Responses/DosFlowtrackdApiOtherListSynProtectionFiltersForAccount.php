<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DosFlowtrackdApiOtherListSynProtectionFiltersForAccount
{
	public function __construct(
		/** The creation timestamp of the expression filter. */
		public \DateTimeImmutable $createdOn,
		/** The filter expression. */
		public string $expression,
		/** The unique ID of the expression filter. */
		public string $id,
		/** The filter's mode. Must be one of 'enabled', 'disabled', 'monitoring'. */
		public string $mode,
		/** The last modification timestamp of the expression filter. */
		public \DateTimeImmutable $modifiedOn,
	) {
	}
}
