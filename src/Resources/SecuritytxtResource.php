<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class SecuritytxtResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Retrieves security.txt
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/security-center/securitytxt', null, []);
	}


	/**
	 * Updates security.txt
	 */
	public function update(\FoundryCo\Cloudflare\Requests\UpdateSecurityTxtRequest $request): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/security-center/securitytxt', null, $request);
	}


	/**
	 * Deletes security.txt
	 */
	public function delete(): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/security-center/securitytxt');
	}
}
