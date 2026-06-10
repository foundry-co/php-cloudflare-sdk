<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkersKvNamespaceListNamespaces
{
	public function __construct(
		/** Namespace identifier tag. */
		public ?string $id = null,
		/** A human-readable string name for a Namespace. */
		public ?string $title = null,
		/** True if keys written on the URL will be URL-decoded before storing. For example, if set to "true", a key written on the URL as "%3F" will be stored as "?". */
		public ?bool $supportsUrlEncoding = null,
	) {
	}
}
