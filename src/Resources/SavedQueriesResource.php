<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class SavedQueriesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List queries
	 */
	public function list(
		?float $page = null,
		?float $perPage = null,
		?\FoundryCo\Cloudflare\Enums\SavedQueriesOrder $order = null,
		?\FoundryCo\Cloudflare\Enums\SavedQueriesOrderBy $orderBy = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/observability/queries', \FoundryCo\Cloudflare\Responses\Querieslist::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'orderBy' => $orderBy ?? null]);
	}


	/**
	 * Save query
	 */
	public function create(\FoundryCo\Cloudflare\Requests\QueriespostRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/workers/observability/queries', \FoundryCo\Cloudflare\Responses\Queriespost::class, $request);
	}


	/**
	 * Get query
	 */
	public function get(string $queryId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/observability/queries/' . $queryId, \FoundryCo\Cloudflare\Responses\Queriesget::class, []);
	}


	/**
	 * Update query
	 */
	public function update(string $queryId, \FoundryCo\Cloudflare\Requests\QueriespatchRequest $request): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/workers/observability/queries/' . $queryId, \FoundryCo\Cloudflare\Responses\Queriespatch::class, $request);
	}


	/**
	 * Delete query
	 */
	public function delete(string $queryId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/workers/observability/queries/' . $queryId);
	}
}
