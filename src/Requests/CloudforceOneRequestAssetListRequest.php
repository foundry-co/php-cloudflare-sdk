<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * List Request Assets
 */
readonly class CloudforceOneRequestAssetListRequest
{
	public function __construct(
		/** Page number of results. */
		public int $page,
		/** Number of results per page. */
		public int $perPage,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'page' => $this->page,
		    'per_page' => $this->perPage,
		], fn ($v) => $v !== null);
	}
}
