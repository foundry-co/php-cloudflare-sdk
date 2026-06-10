<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DomainSearchResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Read matches for string queries by ID
	 */
	public function list(
		?string $id = null,
		?int $offset = null,
		?int $limit = null,
		?bool $includeDomainId = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/brand-protection/matches', null, ['id' => $id ?? null, 'offset' => $offset ?? null, 'limit' => $limit ?? null, 'includeDomainId' => $includeDomainId ?? null]);
	}


	/**
	 * Download matches for string queries by ID
	 */
	public function download(
		?string $id = null,
		?int $offset = null,
		?int $limit = null,
		?bool $includeDomainId = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/brand-protection/matches/download', null, ['id' => $id ?? null, 'offset' => $offset ?? null, 'limit' => $limit ?? null, 'includeDomainId' => $includeDomainId ?? null]);
	}


	/**
	 * Read string queries by ID
	 */
	public function queries(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/brand-protection/queries', null, []);
	}


	/**
	 * Create new saved string queries
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\PostAccountsaccountIdBrandProtectionQueriesRequest $request,
		?string $id = null,
		?string $tag = null,
		?bool $scan = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/brand-protection/queries', null, $request);
	}


	/**
	 * Update saved string queries by ID
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\PatchAccountsaccountIdBrandProtectionQueriesRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/brand-protection/queries', null, $request);
	}


	/**
	 * Delete saved string queries by ID
	 */
	public function delete(?string $id = null, ?string $tag = null, ?bool $scan = null): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/brand-protection/queries');
	}


	/**
	 * Create new saved string queries in bulk
	 */
	public function bulk(
		\FoundryCo\Cloudflare\Requests\PostAccountsaccountIdBrandProtectionQueriesBulkRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/brand-protection/queries/bulk', null, $request);
	}


	/**
	 * Create new string queries
	 */
	public function search(): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/brand-protection/search', null, null);
	}


	/**
	 * Read the total number of saved string queries
	 */
	public function totalQueries(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/brand-protection/total-queries', null, []);
	}
}
