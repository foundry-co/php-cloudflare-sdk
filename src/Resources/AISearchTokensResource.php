<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AISearchTokensResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List tokens.
	 */
	public function list(
		?int $page = null,
		?int $perPage = null,
		?string $search = null,
	): \FoundryCo\Cloudflare\Responses\AISearchTokensTokens
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-search/tokens', \FoundryCo\Cloudflare\Responses\AISearchTokensTokens::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'search' => $search ?? null]);
	}


	/**
	 * Create token.
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\AiSearchCreateTokensRequest $request,
	): \FoundryCo\Cloudflare\Responses\AISearchTokensTokens
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-search/tokens', \FoundryCo\Cloudflare\Responses\AISearchTokensTokens::class, $request);
	}


	/**
	 * Read token.
	 */
	public function get(string $id): \FoundryCo\Cloudflare\Responses\AISearchTokensTokens
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-search/tokens/' . $id, \FoundryCo\Cloudflare\Responses\AISearchTokensTokens::class, []);
	}


	/**
	 * Update token.
	 */
	public function update(
		string $id,
		\FoundryCo\Cloudflare\Requests\AiSearchUpdateTokensRequest $request,
	): \FoundryCo\Cloudflare\Responses\AISearchTokensTokens
	{
		return $this->client->put('/accounts/' . $this->accountId . '/ai-search/tokens/' . $id, \FoundryCo\Cloudflare\Responses\AISearchTokensTokens::class, $request);
	}


	/**
	 * Delete token.
	 */
	public function delete(string $id): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/ai-search/tokens/' . $id);
	}
}
