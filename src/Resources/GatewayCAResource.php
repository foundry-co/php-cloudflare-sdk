<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class GatewayCAResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List SSH Certificate Authorities (CA)
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\GatewayCACa
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/gateway_ca', \FoundryCo\Cloudflare\Responses\GatewayCACa::class, []);
	}


	/**
	 * Add a new SSH Certificate Authority (CA)
	 */
	public function create(): \FoundryCo\Cloudflare\Responses\GatewayCACa
	{
		return $this->client->post('/accounts/' . $this->accountId . '/access/gateway_ca', \FoundryCo\Cloudflare\Responses\GatewayCACa::class, null);
	}


	/**
	 * Delete an SSH Certificate Authority (CA)
	 */
	public function delete(string $certificateId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/access/gateway_ca/' . $certificateId);
	}
}
