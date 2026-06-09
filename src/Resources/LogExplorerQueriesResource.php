<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class LogExplorerQueriesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Run a log query
	 */
	public function list(?string $query = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/logs/explorer/query/sql', null, ['query' => $query ?? null]);
	}


	/**
	 * Run a log query
	 */
	public function create(): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/logs/explorer/query/sql', null, null);
	}


	/**
	 * Run a log query
	 */
	public function sql(?string $query = null): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/logs/explorer/query/sql', null, ['query' => $query ?? null]);
	}


	/**
	 * Run a log query
	 */
	public function zonesLogsExplorerQueryPost(): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/logs/explorer/query/sql', null, null);
	}
}
