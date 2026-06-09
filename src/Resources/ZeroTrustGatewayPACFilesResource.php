<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ZeroTrustGatewayPACFilesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List PAC files
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\ZeroTrustGatewayPACFilesList
	{
		return $this->client->get('/accounts/' . $this->accountId . '/gateway/pacfiles', \FoundryCo\Cloudflare\Responses\ZeroTrustGatewayPACFilesList::class, []);
	}


	/**
	 * Create a PAC file
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\ZeroTrustGatewayPacfilesCreatePacfileRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZeroTrustGatewayPACFilesPacfile
	{
		return $this->client->post('/accounts/' . $this->accountId . '/gateway/pacfiles', \FoundryCo\Cloudflare\Responses\ZeroTrustGatewayPACFilesPacfile::class, $request);
	}


	/**
	 * Get a PAC file
	 */
	public function get(string $pacfileId): \FoundryCo\Cloudflare\Responses\ZeroTrustGatewayPACFilesDetails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/gateway/pacfiles/' . $pacfileId, \FoundryCo\Cloudflare\Responses\ZeroTrustGatewayPACFilesDetails::class, []);
	}


	/**
	 * Update a Zero Trust Gateway PAC file
	 */
	public function update(
		string $pacfileId,
		\FoundryCo\Cloudflare\Requests\ZeroTrustGatewayPacfilesUpdateRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZeroTrustGatewayPACFilesUpdate
	{
		return $this->client->put('/accounts/' . $this->accountId . '/gateway/pacfiles/' . $pacfileId, \FoundryCo\Cloudflare\Responses\ZeroTrustGatewayPACFilesUpdate::class, $request);
	}


	/**
	 * Delete a PAC file
	 */
	public function delete(string $pacfileId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/gateway/pacfiles/' . $pacfileId);
	}
}
