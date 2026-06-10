<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CallsAppsDeleteApp
{
	public function __construct(
		/** The date and time the item was created. */
		public ?\DateTimeImmutable $created = null,
		/** The date and time the item was last modified. */
		public ?\DateTimeImmutable $modified = null,
		/** A short description of Calls app, not shown to end users. */
		public ?string $name = null,
		/** A Cloudflare-generated unique identifier for a item. */
		public ?string $uid = null,
	) {
	}
}
