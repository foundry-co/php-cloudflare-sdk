<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DCVDelegationResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Retrieve the DCV Delegation unique identifier.
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\DCVDelegationGet
	{
		return $this->client->get('/zones/' . $this->zoneId . '/dcv_delegation/uuid', \FoundryCo\Cloudflare\Responses\DCVDelegationGet::class, []);
	}
}
