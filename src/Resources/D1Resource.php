<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class D1Resource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List D1 Databases
	 */
	public function list(?string $name = null, ?float $page = null, ?float $perPage = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/d1/database', null, ['name' => $name ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create D1 Database
	 */
	public function create(\FoundryCo\Cloudflare\Requests\D1CreateDatabaseRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/d1/database', null, $request);
	}


	/**
	 * Get D1 Database
	 */
	public function get(mixed $databaseId, ?array $fields = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/d1/database/' . $databaseId, null, ['fields' => $fields ?? null]);
	}


	/**
	 * Update D1 Database
	 */
	public function update(string $databaseId, \FoundryCo\Cloudflare\Requests\D1UpdateDatabaseRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/d1/database/' . $databaseId, null, $request);
	}


	/**
	 * Update D1 Database partially
	 */
	public function database(
		string $databaseId,
		\FoundryCo\Cloudflare\Requests\D1UpdatePartialDatabaseRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/d1/database/' . $databaseId, null, $request);
	}


	/**
	 * Delete D1 Database
	 */
	public function delete(string $databaseId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/d1/database/' . $databaseId);
	}


	/**
	 * Export D1 Database as SQL
	 */
	public function export(string $databaseId, \FoundryCo\Cloudflare\Requests\D1ExportDatabaseRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/d1/database/' . $databaseId . '/export', null, $request);
	}


	/**
	 * Import SQL into your D1 Database
	 */
	public function import(string $databaseId): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/d1/database/' . $databaseId . '/import', null, null);
	}


	/**
	 * Query D1 Database
	 */
	public function query(string $databaseId): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/d1/database/' . $databaseId . '/query', null, null);
	}


	/**
	 * Raw D1 Database query
	 */
	public function raw(string $databaseId): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/d1/database/' . $databaseId . '/raw', null, null);
	}


	/**
	 * Get D1 database bookmark
	 */
	public function bookmark(string $databaseId, ?\DateTimeImmutable $timestamp = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/d1/database/' . $databaseId . '/time_travel/bookmark', null, ['timestamp' => $timestamp ?? null]);
	}


	/**
	 * Restore D1 Database to a bookmark or point in time
	 */
	public function restore(string $databaseId, ?string $bookmark = null, ?\DateTimeImmutable $timestamp = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/d1/database/' . $databaseId . '/time_travel/restore', null, null);
	}
}
