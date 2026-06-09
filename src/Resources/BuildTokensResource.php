<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class BuildTokensResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List build tokens
	 */
	public function list(?int $page = null, ?int $perPage = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/builds/tokens', null, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create build token
	 */
	public function create(\FoundryCo\Cloudflare\Requests\CreateBuildTokenRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/builds/tokens', null, $request);
	}


	/**
	 * Delete build token
	 */
	public function delete(string $buildTokenUuid): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/builds/tokens/' . $buildTokenUuid);
	}
}
