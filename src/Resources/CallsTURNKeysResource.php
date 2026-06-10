<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class CallsTURNKeysResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List TURN Keys
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/calls/turn_keys', \FoundryCo\Cloudflare\Responses\CallsTurnKeyList::class, []);
	}


	/**
	 * Create a new TURN key
	 */
	public function create(\FoundryCo\Cloudflare\Requests\CallsTurnKeyCreateRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/calls/turn_keys', \FoundryCo\Cloudflare\Responses\CallsTurnKeyCreate::class, $request);
	}


	/**
	 * Retrieve TURN key details
	 */
	public function get(string $keyId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/calls/turn_keys/' . $keyId, \FoundryCo\Cloudflare\Responses\CallsRetrieveTurnKeyDetails::class, []);
	}


	/**
	 * Edit TURN key details
	 */
	public function update(string $keyId, \FoundryCo\Cloudflare\Requests\CallsUpdateTurnKeyRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/calls/turn_keys/' . $keyId, \FoundryCo\Cloudflare\Responses\CallsUpdateTurnKey::class, $request);
	}


	/**
	 * Delete TURN key
	 */
	public function delete(string $keyId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/calls/turn_keys/' . $keyId);
	}
}
