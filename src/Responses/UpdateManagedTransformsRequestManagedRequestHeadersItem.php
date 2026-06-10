<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UpdateManagedTransformsRequestManagedRequestHeadersItem
{
	public function __construct(
		/** Whether the Managed Transform is enabled. */
		public ?bool $enabled = null,
		/** Whether the Managed Transform conflicts with the currently-enabled Managed Transforms. */
		public ?bool $hasConflict = null,
		/** The human-readable identifier of the Managed Transform. */
		public ?string $id = null,
		/** The Managed Transforms that this Managed Transform conflicts with. */
		public ?array $conflictsWith = null,
	) {
	}
}
