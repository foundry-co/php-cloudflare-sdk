<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Details about a worker uploaded to a Workers for Platforms namespace.
 */
readonly class WorkersForPlatformsDetails
{
	public function __construct(
		/** When the script was created. */
		public ?\DateTimeImmutable $createdOn = null,
		/** Name of the Workers for Platforms dispatch namespace. */
		public ?string $dispatchNamespace = null,
		/** When the script was last modified. */
		public ?\DateTimeImmutable $modifiedOn = null,
		public ?WorkersForPlatformsDetailsScript $script = null,
	) {
	}
}
