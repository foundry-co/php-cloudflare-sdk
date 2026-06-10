<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WorkerTailLogsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Tails
	 */
	public function get(string $scriptName): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName . '/tails', \FoundryCo\Cloudflare\Responses\GetAccountsaccountIdWorkersScriptsscriptNameTails::class, []);
	}


	/**
	 * Start Tail
	 */
	public function create(string $scriptName): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName . '/tails', \FoundryCo\Cloudflare\Responses\WorkerTailLogsStartTail::class, null);
	}


	/**
	 * Delete Tail
	 */
	public function delete(string $scriptName, string $id): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/workers/scripts/' . $scriptName . '/tails/' . $id);
	}
}
