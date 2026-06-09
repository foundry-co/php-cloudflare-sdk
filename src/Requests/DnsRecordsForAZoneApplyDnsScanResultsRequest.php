<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Review Scanned DNS Records
 */
readonly class DnsRecordsForAZoneApplyDnsScanResultsRequest
{
	public function __construct(
		public ?array $accepts = null,
		public ?array $rejects = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'accepts' => $this->accepts,
		    'rejects' => $this->rejects,
		], fn ($v) => $v !== null);
	}
}
