<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Internal DNS View
 */
readonly class DnsViewsForAnAccountCreateInternalDnsViewsRequest
{
	public function __construct(
		/** The name of the view. */
		public string $name,
		/** The list of zones linked to this view. */
		public array $zones,
		/** When the view was created. */
		public ?\DateTimeImmutable $createdTime = null,
		/** When the view was last modified. */
		public ?\DateTimeImmutable $modifiedTime = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'zones' => $this->zones,
		    'created_time' => $this->createdTime?->format(\DateTimeImmutable::ATOM),
		    'modified_time' => $this->modifiedTime?->format(\DateTimeImmutable::ATOM),
		], fn ($v) => $v !== null);
	}
}
