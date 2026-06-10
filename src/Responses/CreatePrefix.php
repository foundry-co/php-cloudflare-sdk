<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CreatePrefix
{
	public function __construct(
		/** A comment describing the prefix. */
		public ?string $comment = null,
		/** The creation timestamp of the prefix. */
		public ?\DateTimeImmutable $createdOn = null,
		/** Whether to exclude the prefix from protection. */
		public ?bool $excluded = null,
		/** The unique ID of the prefix. */
		public ?string $id = null,
		/** The last modification timestamp of the prefix. */
		public ?\DateTimeImmutable $modifiedOn = null,
		/** The prefix in CIDR format. */
		public ?string $prefix = null,
	) {
	}
}
