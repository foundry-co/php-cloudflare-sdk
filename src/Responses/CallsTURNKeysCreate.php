<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CallsTURNKeysCreate
{
	public function __construct(
		/** The date and time the item was created. */
		public ?\DateTimeImmutable $created = null,
		/** Bearer token */
		public ?string $key = null,
		/** The date and time the item was last modified. */
		public ?\DateTimeImmutable $modified = null,
		/** A short description of a TURN key, not shown to end users. */
		public ?string $name = null,
		/** A Cloudflare-generated unique identifier for a item. */
		public ?string $uid = null,
	) {
	}
}
