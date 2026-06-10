<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CreateSynProtectionFilter
{
	public function __construct(
		/** The creation timestamp of the expression filter. */
		public ?\DateTimeImmutable $createdOn = null,
		/** The filter expression. */
		public ?string $expression = null,
		/** The unique ID of the expression filter. */
		public ?string $id = null,
		/** The filter's mode. Must be one of 'enabled', 'disabled', 'monitoring'. */
		public ?string $mode = null,
		/** The last modification timestamp of the expression filter. */
		public ?\DateTimeImmutable $modifiedOn = null,
	) {
	}
}
