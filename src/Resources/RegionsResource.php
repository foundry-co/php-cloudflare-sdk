<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RegionsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List DLS regions for an account
	 */
	public function list(
		?string $cursor = null,
		?int $perPage = null,
		?\FoundryCo\Cloudflare\Enums\RegionsType $type = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dls/regions', \FoundryCo\Cloudflare\Responses\PublicListRegions::class, ['cursor' => $cursor ?? null, 'perPage' => $perPage ?? null, 'type' => $type ?? null]);
	}


	/**
	 * Get a DLS region
	 */
	public function get(string $regionId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dls/regions/' . $regionId, \FoundryCo\Cloudflare\Responses\PublicGetRegion::class, []);
	}
}
