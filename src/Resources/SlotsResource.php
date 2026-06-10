<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class SlotsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Retrieve a list of all slots matching the specified parameters
	 */
	public function list(
		?string $addressContains = null,
		?string $site = null,
		?string $speed = null,
		?bool $occupied = null,
		?int $cursor = null,
		?int $limit = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cni/slots', null, ['addressContains' => $addressContains ?? null, 'site' => $site ?? null, 'speed' => $speed ?? null, 'occupied' => $occupied ?? null, 'cursor' => $cursor ?? null, 'limit' => $limit ?? null]);
	}


	/**
	 * Get information about the specified slot
	 */
	public function get(string $slot): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cni/slots/' . $slot, null, []);
	}
}
