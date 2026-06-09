<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UpdateManagedTransformsRequestManagedRequestHeadersItem
{
	public function __construct(
		/** Whether the Managed Transform is enabled. */
		public bool $enabled,
		/** Whether the Managed Transform conflicts with the currently-enabled Managed Transforms. */
		public bool $hasConflict,
		public array $id,
		/** The Managed Transforms that this Managed Transform conflicts with. */
		public ?array $conflictsWith = null,
	) {
	}
}
