<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WorkerPlacementResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Placement Regions
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/placement/regions', \FoundryCo\Cloudflare\Responses\WorkerPlacementListRegions::class, []);
	}
}
