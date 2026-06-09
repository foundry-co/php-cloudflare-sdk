<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ZeroTrustSeatsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Update a user seat
	 */
	public function update(): \FoundryCo\Cloudflare\Responses\ZeroTrustSeatsSeat
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/access/seats', \FoundryCo\Cloudflare\Responses\ZeroTrustSeatsSeat::class, null);
	}
}
