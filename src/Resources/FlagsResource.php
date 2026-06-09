<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class FlagsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List flags
	 */
	public function get(
		string $appId,
		?string $limit = null,
		?string $cursor = null,
	): \FoundryCo\Cloudflare\Responses\FlagsFlags
	{
		return $this->client->get('/accounts/' . $this->accountId . '/flagship/apps/' . $appId . '/flags', \FoundryCo\Cloudflare\Responses\FlagsFlags::class, ['limit' => $limit ?? null, 'cursor' => $cursor ?? null]);
	}


	/**
	 * Create flag
	 */
	public function create(
		string $appId,
		\FoundryCo\Cloudflare\Requests\FlagshipCreateFlagRequest $request,
	): \FoundryCo\Cloudflare\Responses\FlagsFlag
	{
		return $this->client->post('/accounts/' . $this->accountId . '/flagship/apps/' . $appId . '/flags', \FoundryCo\Cloudflare\Responses\FlagsFlag::class, $request);
	}


	/**
	 * Get flag
	 */
	public function flags(string $appId, string $flagKey): \FoundryCo\Cloudflare\Responses\FlagsFlag
	{
		return $this->client->get('/accounts/' . $this->accountId . '/flagship/apps/' . $appId . '/flags/' . $flagKey, \FoundryCo\Cloudflare\Responses\FlagsFlag::class, []);
	}


	/**
	 * Update flag
	 */
	public function update(
		string $appId,
		string $flagKey,
		\FoundryCo\Cloudflare\Requests\FlagshipUpdateFlagRequest $request,
	): \FoundryCo\Cloudflare\Responses\FlagsFlag
	{
		return $this->client->put('/accounts/' . $this->accountId . '/flagship/apps/' . $appId . '/flags/' . $flagKey, \FoundryCo\Cloudflare\Responses\FlagsFlag::class, $request);
	}


	/**
	 * Delete flag
	 */
	public function delete(string $appId, string $flagKey): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/flagship/apps/' . $appId . '/flags/' . $flagKey);
	}
}
