<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update Internal DNS View
 */
readonly class DnsViewsForAnAccountUpdateInternalDnsViewRequest
{
	public function __construct(
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


	public function toArray(): array
	{
		return array_filter([
		    'created_time' => $this->createdTime?->format(\DateTimeImmutable::ATOM),
		    'modified_time' => $this->modifiedTime?->format(\DateTimeImmutable::ATOM),
		    'name' => $this->name,
		    'zones' => $this->zones,
		], fn ($v) => $v !== null);
	}
}
