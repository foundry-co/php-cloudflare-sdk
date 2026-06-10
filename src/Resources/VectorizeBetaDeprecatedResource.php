<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class VectorizeBetaDeprecatedResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Vectorize Indexes (Deprecated)
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/vectorize/indexes', null, []);
	}


	/**
	 * Create Vectorize Index (Deprecated)
	 */
	public function create(\FoundryCo\Cloudflare\Requests\VectorizeDeprecatedCreateVectorizeIndexRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/vectorize/indexes', \FoundryCo\Cloudflare\Responses\VectorizeDeprecatedCreateVectorizeIndex::class, $request);
	}


	/**
	 * Get Vectorize Index (Deprecated)
	 */
	public function get(string $indexName): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/vectorize/indexes/' . $indexName, \FoundryCo\Cloudflare\Responses\VectorizeDeprecatedGetVectorizeIndex::class, []);
	}


	/**
	 * Update Vectorize Index (Deprecated)
	 */
	public function update(
		string $indexName,
		\FoundryCo\Cloudflare\Requests\VectorizeDeprecatedUpdateVectorizeIndexRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/vectorize/indexes/' . $indexName, \FoundryCo\Cloudflare\Responses\VectorizeDeprecatedUpdateVectorizeIndex::class, $request);
	}


	/**
	 * Delete Vectorize Index (Deprecated)
	 */
	public function delete(string $indexName): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/vectorize/indexes/' . $indexName);
	}


	/**
	 * Delete Vectors By Identifier (Deprecated)
	 */
	public function deleteByIds(
		string $indexName,
		\FoundryCo\Cloudflare\Requests\VectorizeDeprecatedDeleteVectorsByIdRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/vectorize/indexes/' . $indexName . '/delete-by-ids', \FoundryCo\Cloudflare\Responses\VectorizeDeprecatedDeleteVectorsById::class, $request);
	}


	/**
	 * Get Vectors By Identifier (Deprecated)
	 */
	public function getByIds(
		string $indexName,
		\FoundryCo\Cloudflare\Requests\VectorizeDeprecatedGetVectorsByIdRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/vectorize/indexes/' . $indexName . '/get-by-ids', \FoundryCo\Cloudflare\Responses\VectorizeDeprecatedGetVectorsById::class, $request);
	}


	/**
	 * Insert Vectors (Deprecated)
	 */
	public function insert(string $indexName): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/vectorize/indexes/' . $indexName . '/insert', \FoundryCo\Cloudflare\Responses\VectorizeDeprecatedInsertVector::class, null);
	}


	/**
	 * Query Vectors (Deprecated)
	 */
	public function query(
		string $indexName,
		\FoundryCo\Cloudflare\Requests\VectorizeDeprecatedQueryVectorRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/vectorize/indexes/' . $indexName . '/query', \FoundryCo\Cloudflare\Responses\VectorizeDeprecatedQueryVector::class, $request);
	}


	/**
	 * Upsert Vectors (Deprecated)
	 */
	public function upsert(string $indexName): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/vectorize/indexes/' . $indexName . '/upsert', \FoundryCo\Cloudflare\Responses\VectorizeDeprecatedUpsertVector::class, null);
	}
}
