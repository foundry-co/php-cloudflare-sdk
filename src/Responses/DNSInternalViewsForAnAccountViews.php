<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DNSInternalViewsForAnAccountViews
{
	public function __construct(
		/** Identifier. */
		public string $id,
		/** When the view was created. */
		public ?\DateTimeImmutable $createdTime = null,
		/** When the view was last modified. */
		public ?\DateTimeImmutable $modifiedTime = null,
		/** The name of the view. */
		public ?string $name = null,
		/** The list of zones linked to this view. */
		public ?array $zones = null,
	) {
	}
}
