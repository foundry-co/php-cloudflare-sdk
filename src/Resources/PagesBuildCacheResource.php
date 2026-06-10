<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class PagesBuildCacheResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Purge build cache
	 */
	public function create(string $projectName): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/pages/projects/' . $projectName . '/purge_build_cache', null, null);
	}
}
