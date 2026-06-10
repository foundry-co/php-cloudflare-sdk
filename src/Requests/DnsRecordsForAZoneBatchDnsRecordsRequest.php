<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Batch DNS Records
 */
readonly class DnsRecordsForAZoneBatchDnsRecordsRequest
{
	public function __construct(
		public ?array $deletes = null,
		public ?array $patches = null,
		public ?array $posts = null,
		public ?array $puts = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'deletes' => $this->deletes,
		    'patches' => $this->patches,
		    'posts' => $this->posts,
		    'puts' => $this->puts,
		], fn ($v) => $v !== null);
	}
}
