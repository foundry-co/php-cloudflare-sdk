<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UpdateAllowlistPrefix
{
	public function __construct(
		/** An optional comment describing the allowlist prefix. */
		public ?string $comment = null,
		/** The creation timestamp of the allowlist prefix. */
		public ?\DateTimeImmutable $createdOn = null,
		/** Whether to enable the allowlist prefix into effect. Defaults to false. */
		public ?bool $enabled = null,
		/** The unique ID of the allowlist prefix. */
		public ?string $id = null,
		/** The last modification timestamp of the allowlist prefix. */
		public ?\DateTimeImmutable $modifiedOn = null,
		/** The allowlist prefix in CIDR format. */
		public ?string $prefix = null,
	) {
	}
}
