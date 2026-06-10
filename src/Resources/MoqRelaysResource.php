<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class MoqRelaysResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List relays
	 */
	public function list(
		?\DateTimeImmutable $createdBefore = null,
		?\DateTimeImmutable $createdAfter = null,
		?int $perPage = null,
		?bool $asc = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/moq/relays', \FoundryCo\Cloudflare\Responses\GetAccountsaccountIdMoqRelays::class, ['createdBefore' => $createdBefore ?? null, 'createdAfter' => $createdAfter ?? null, 'perPage' => $perPage ?? null, 'asc' => $asc ?? null]);
	}


	/**
	 * Create a relay
	 */
	public function create(\FoundryCo\Cloudflare\Requests\PostAccountsaccountIdMoqRelaysRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/moq/relays', \FoundryCo\Cloudflare\Responses\PostAccountsaccountIdMoqRelays::class, $request);
	}


	/**
	 * Get a relay
	 */
	public function get(string $relayId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/moq/relays/' . $relayId, \FoundryCo\Cloudflare\Responses\GetAccountsaccountIdMoqRelaysrelayId::class, []);
	}


	/**
	 * Update a relay
	 */
	public function update(
		string $relayId,
		\FoundryCo\Cloudflare\Requests\PutAccountsaccountIdMoqRelaysrelayIdRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/moq/relays/' . $relayId, \FoundryCo\Cloudflare\Responses\PutAccountsaccountIdMoqRelaysrelayId::class, $request);
	}


	/**
	 * Delete a relay
	 */
	public function delete(string $relayId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/moq/relays/' . $relayId);
	}


	/**
	 * Rotate a token
	 */
	public function rotate(
		string $relayId,
		\FoundryCo\Cloudflare\Requests\PostAccountsaccountIdMoqRelaysrelayIdTokensRotateRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/moq/relays/' . $relayId . '/tokens/rotate', \FoundryCo\Cloudflare\Responses\PostAccountsaccountIdMoqRelaysrelayIdTokensRotate::class, $request);
	}
}
