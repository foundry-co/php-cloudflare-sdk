<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function create(
		\FoundryCo\Cloudflare\Requests\VectorizeDeprecatedCreateVectorizeIndexRequest $request,
	): \FoundryCo\Cloudflare\Responses\VectorizeBetaDeprecatedIndex
	{
		return $this->client->post('/accounts/' . $this->accountId . '/vectorize/indexes', \FoundryCo\Cloudflare\Responses\VectorizeBetaDeprecatedIndex::class, $request);
	}


	/**
	 * Get Vectorize Index (Deprecated)
	 */
	public function get(string $indexName): \FoundryCo\Cloudflare\Responses\VectorizeBetaDeprecatedIndex
	{
		return $this->client->get('/accounts/' . $this->accountId . '/vectorize/indexes/' . $indexName, \FoundryCo\Cloudflare\Responses\VectorizeBetaDeprecatedIndex::class, []);
	}


	/**
	 * Update Vectorize Index (Deprecated)
	 */
	public function update(
		string $indexName,
		\FoundryCo\Cloudflare\Requests\VectorizeDeprecatedUpdateVectorizeIndexRequest $request,
	): \FoundryCo\Cloudflare\Responses\VectorizeBetaDeprecatedIndex
	{
		return $this->client->put('/accounts/' . $this->accountId . '/vectorize/indexes/' . $indexName, \FoundryCo\Cloudflare\Responses\VectorizeBetaDeprecatedIndex::class, $request);
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
	): \FoundryCo\Cloudflare\Responses\VectorizeBetaDeprecatedId
	{
		return $this->client->post('/accounts/' . $this->accountId . '/vectorize/indexes/' . $indexName . '/delete-by-ids', \FoundryCo\Cloudflare\Responses\VectorizeBetaDeprecatedId::class, $request);
	}


	/**
	 * Get Vectors By Identifier (Deprecated)
	 */
	public function getByIds(
		string $indexName,
		\FoundryCo\Cloudflare\Requests\VectorizeDeprecatedGetVectorsByIdRequest $request,
	): \FoundryCo\Cloudflare\Responses\VectorizeBetaDeprecatedId
	{
		return $this->client->post('/accounts/' . $this->accountId . '/vectorize/indexes/' . $indexName . '/get-by-ids', \FoundryCo\Cloudflare\Responses\VectorizeBetaDeprecatedId::class, $request);
	}


	/**
	 * Insert Vectors (Deprecated)
	 */
	public function insert(string $indexName): \FoundryCo\Cloudflare\Responses\VectorizeBetaDeprecatedVector
	{
		return $this->client->post('/accounts/' . $this->accountId . '/vectorize/indexes/' . $indexName . '/insert', \FoundryCo\Cloudflare\Responses\VectorizeBetaDeprecatedVector::class, null);
	}


	/**
	 * Query Vectors (Deprecated)
	 */
	public function query(
		string $indexName,
		\FoundryCo\Cloudflare\Requests\VectorizeDeprecatedQueryVectorRequest $request,
	): \FoundryCo\Cloudflare\Responses\VectorizeBetaDeprecatedVector
	{
		return $this->client->post('/accounts/' . $this->accountId . '/vectorize/indexes/' . $indexName . '/query', \FoundryCo\Cloudflare\Responses\VectorizeBetaDeprecatedVector::class, $request);
	}


	/**
	 * Upsert Vectors (Deprecated)
	 */
	public function upsert(string $indexName): \FoundryCo\Cloudflare\Responses\VectorizeBetaDeprecatedVector
	{
		return $this->client->post('/accounts/' . $this->accountId . '/vectorize/indexes/' . $indexName . '/upsert', \FoundryCo\Cloudflare\Responses\VectorizeBetaDeprecatedVector::class, null);
	}
}
