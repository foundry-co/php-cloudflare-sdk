<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class VectorizeResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Vectorize Indexes
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/vectorize/v2/indexes', null, []);
	}


	/**
	 * Create Vectorize Index
	 */
	public function create(\FoundryCo\Cloudflare\Requests\VectorizeCreateVectorizeIndexRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/vectorize/v2/indexes', \FoundryCo\Cloudflare\Responses\VectorizeCreateVectorizeIndex::class, $request);
	}


	/**
	 * Get Vectorize Index
	 */
	public function get(string $indexName): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/vectorize/v2/indexes/' . $indexName, \FoundryCo\Cloudflare\Responses\VectorizeGetVectorizeIndex::class, []);
	}


	/**
	 * Delete Vectorize Index
	 */
	public function delete(string $indexName): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/vectorize/v2/indexes/' . $indexName);
	}


	/**
	 * Delete Vectors By Identifier
	 */
	public function deleteByIds(
		string $indexName,
		\FoundryCo\Cloudflare\Requests\VectorizeDeleteVectorsByIdRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/vectorize/v2/indexes/' . $indexName . '/delete_by_ids', \FoundryCo\Cloudflare\Responses\VectorizeDeleteVectorsById::class, $request);
	}


	/**
	 * Get Vectors By Identifier
	 */
	public function getByIds(
		string $indexName,
		\FoundryCo\Cloudflare\Requests\VectorizeGetVectorsByIdRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/vectorize/v2/indexes/' . $indexName . '/get_by_ids', \FoundryCo\Cloudflare\Responses\VectorizeGetVectorsById::class, $request);
	}


	/**
	 * Get Vectorize Index Info
	 */
	public function info(string $indexName): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/vectorize/v2/indexes/' . $indexName . '/info', \FoundryCo\Cloudflare\Responses\VectorizeIndexInfo::class, []);
	}


	/**
	 * Insert Vectors
	 */
	public function insert(
		string $indexName,
		?\FoundryCo\Cloudflare\Enums\VectorizeUnparsableBehavior $unparsableBehavior = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/vectorize/v2/indexes/' . $indexName . '/insert', \FoundryCo\Cloudflare\Responses\VectorizeInsertVector::class, null);
	}


	/**
	 * List Vectors
	 */
	public function vectorizeListVectors(string $indexName, ?int $count = null, ?string $cursor = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/vectorize/v2/indexes/' . $indexName . '/list', \FoundryCo\Cloudflare\Responses\VectorizeListVectors::class, ['count' => $count ?? null, 'cursor' => $cursor ?? null]);
	}


	/**
	 * Create Metadata Index
	 */
	public function vectorizeCreateMetadataIndex(
		string $indexName,
		\FoundryCo\Cloudflare\Requests\VectorizeCreateMetadataIndexRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/vectorize/v2/indexes/' . $indexName . '/metadata_index/create', \FoundryCo\Cloudflare\Responses\VectorizeCreateMetadataIndex::class, $request);
	}


	/**
	 * Delete Metadata Index
	 */
	public function vectorizeDeleteMetadataIndex(
		string $indexName,
		\FoundryCo\Cloudflare\Requests\VectorizeDeleteMetadataIndexRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/vectorize/v2/indexes/' . $indexName . '/metadata_index/delete', \FoundryCo\Cloudflare\Responses\VectorizeDeleteMetadataIndex::class, $request);
	}


	/**
	 * List Metadata Indexes
	 */
	public function vectorizeListMetadataIndexes(string $indexName): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/vectorize/v2/indexes/' . $indexName . '/metadata_index/list', \FoundryCo\Cloudflare\Responses\VectorizeListMetadataIndexes::class, []);
	}


	/**
	 * Query Vectors
	 */
	public function query(string $indexName, \FoundryCo\Cloudflare\Requests\VectorizeQueryVectorRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/vectorize/v2/indexes/' . $indexName . '/query', \FoundryCo\Cloudflare\Responses\VectorizeQueryVector::class, $request);
	}


	/**
	 * Upsert Vectors
	 */
	public function upsert(
		string $indexName,
		?\FoundryCo\Cloudflare\Enums\VectorizeUnparsableBehavior $unparsableBehavior = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/vectorize/v2/indexes/' . $indexName . '/upsert', \FoundryCo\Cloudflare\Responses\VectorizeUpsertVector::class, null);
	}
}
